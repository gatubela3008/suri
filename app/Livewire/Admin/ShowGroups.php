<?php

namespace App\Livewire\Admin;

use App\Models\Group;
use App\Models\Professor;
use App\Models\Schedule;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ShowGroups extends Component
{
    use WithPagination;

    public $search = '';
    public $sort = 'capacitation_name';
    public $direction = 'asc';

    public $capacitations;
    public $capacitation;
    public $capacitation_id;
    public $capacitation_name;

    public $subjects;
    public $subject;
    public $subject_id;
    public $subject_name;

    public $professors;
    public $professor;
    public $professor_id;
    public $professor_name;

    public $group;
    public $group_id;
    public $group_name;

    public $selectedGroup;
    public $selectedGroupId;
    public $schedules;
    public $assignedSchedules;
    public $unassignedSchedules;
    public $selectedUnassignedSchedule;
    public $selectedAssignedSchedule;
    public $start_date;
    public $edition;

    public $open_edit = false;

    protected $rules = [
        'start_date' => 'required|date',
        'edition' => 'required|string',
        'unassignedSchedules' => 'required|array|min:0',
        'assignedSchedules' => 'required|array|min:1',
    ];

    public function mount()
    {
        $this->schedules = Schedule::all();
        $this->professors = Professor::with('user')->get();
    }

    public function render()
    {
        $groups = Group::with(['subject.capacitation', 'professor.user', 'schedules'])
            ->leftJoin('subjects', 'groups.subject_id', '=', 'subjects.id')
            ->leftJoin('capacitations', 'subjects.capacitation_id', '=', 'capacitations.id')
            ->leftJoin('professors', 'groups.professor_id', '=', 'professors.id')
            ->leftJoin('users', 'professors.user_id', '=', 'users.id')
            ->where(function ($query) {
                $query->where('groups.group_name', 'like', '%' . $this->search . '%')
                    ->orWhere('subjects.subject_name', 'like', '%' . $this->search . '%')
                    ->orWhere('capacitations.capacitation_name', 'like', '%' . $this->search . '%')
                    ->orWhere('users.name', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->getSortField(), $this->direction)
            ->select('groups.*')
            ->paginate(15);

        return view('livewire.admin.show-groups', compact('groups'));
    }

    protected function getSortField()
    {
        switch ($this->sort) {
            case 'group_name':
                return 'groups.group_name';
            case 'subject_name':
                return 'subjects.subject_name';
            case 'capacitation_name':
                return 'capacitations.capacitation_name';
            case 'professor_name':
                return 'users.name';
            default:
                return 'groups.group_name';
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function order($field)
    {
        if ($this->sort === $field) {
            $this->direction = ($this->direction === 'asc') ? 'desc' : 'asc';
        } else {
            $this->sort = $field;
            $this->direction = 'asc';
        }
    }

    public function edit(Group $group)
    {
        $this->group = $group;
        $this->group_id = $group->id;
        $this->group_name = $group->group_name;
        $this->capacitation = $group->subject->capacitation;
        $this->capacitation_id = $group->subject->capacitation->id;
        $this->capacitation_name = $group->subject->capacitation->capacitation_name;
        $this->subject = $group->subject;
        $this->subject_id = $group->subject->id;
        $this->subject_name = $group->subject->subject_name;
        $this->professor = $group->professor;
        $this->professor_id = $group->professor->id;
        $this->professor_name = $group->professor->user->name;
        $this->assignedSchedules = $this->group->schedules;
        $this->start_date = $this->group->start_date;
        $this->edition = $this->group->edition;
        $this->unassignedSchedules = collect();
        foreach ($this->schedules as $schedule) {
            if (!$this->assignedSchedules->contains($schedule->id)) {
                $this->unassignedSchedules->push($schedule);
            }
        }
        $this->open_edit = true;
               
    }

    public function update()
    {
        $this->validate();
        $this->group->update([
            'start_date' => $this->start_date,
            'edition' => $this->edition,
            'professor_id' => $this->professor_id,
        ]);
        $this->group->schedules()->sync($this->assignedSchedules);

        $this->resetForm();
        $this->dispatch('exito', 'Horarios actualizados en la base de datos');
    }


    public function addSchedule()
    {
        if ($this->assignedSchedules === null) {
            $this->assignedSchedules = collect();
        }
        $schedule = Schedule::find($this->selectedUnassignedSchedule);
        if ($schedule !== null) {
            $this->assignedSchedules->push($schedule);
            $key = $this->unassignedSchedules->search($schedule);
            $this->unassignedSchedules->pull($key);
            $this->reset(['selectedUnassignedSchedule', 'selectedAssignedSchedule']);
        }
    }

    public function removeSchedule()
    {
        $schedule = Schedule::find($this->selectedAssignedSchedule);
        if ($this->assignedSchedules->count() === 1) {
            $this->dispatch('error', 'El grupo debe tener al menos un horario asignado');
            return;
        }
        if ($schedule !== null) {
            $this->unassignedSchedules->push($schedule);
            $key = $this->assignedSchedules->search($schedule);
            $this->assignedSchedules->pull($key);
            $this->reset(['selectedUnassignedSchedule', 'selectedAssignedSchedule']);
        }
    }

    public function resetForm()
    {
        $this->reset([
            'capacitation',
            'assignedSchedules',
            'open_edit',
            'start_date',
            'edition',
        ]);
    }

    #[On('deleteGroup')]
    public function deleteGroup(Group $id)
    {
        $id->delete();
    }
}
