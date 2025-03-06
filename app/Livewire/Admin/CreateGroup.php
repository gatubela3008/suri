<?php

namespace App\Livewire\Admin;

use App\Models\Capacitation;
use App\Models\Group;
use App\Models\Professor;
use App\Models\Schedule;
use App\Models\Subject;
use Livewire\Component;
use Livewire\WithPagination;

class CreateGroup extends Component
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

    public $schedules;
    public $assignedSchedules;
    public $unassignedSchedules;
    public $selectedUnassignedSchedule;
    public $selectedAssignedSchedule;
    
    public $start_date;
    public $edition;

    public $open = false;

    protected $rules = [
        'capacitation_id' => 'required|exists:capacitations,id',
        'subject_id' => 'required|exists:subjects,id',
        'professor_id' => 'required|exists:professors,id',
        'group_name' => 'required|string',
        'start_date' => 'required|date',
        'edition' => 'required|string',
        'unassignedSchedules' => 'required|array|min:0',
        'assignedSchedules' => 'required|array|min:1',
    ];

    public function mount()
    {
        $this->capacitations = Capacitation::all();
        $this->subjects = collect();
        $this->professors = Professor::all();
        $this->schedules = Schedule::all();
        $this->assignedSchedules = collect();
        $this->unassignedSchedules = Schedule::all();
    }

    public function selectSubject($capacitation_id)
    {
        $this->subjects = Subject::where('capacitation_id', $capacitation_id)->get();
        $this->subject_id = null;
    }

    public function render()
    {
        return view('livewire.admin.create-group');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addSchedule()
    {
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
        if ($this->assignedSchedules->count() <= 1) {
            $this->dispatch('selectedAssignedSchedule', 'El grupo debe tener al menos un horario asignado');
            return;
        }
        if ($schedule !== null) {
            $this->unassignedSchedules->push($schedule);
            $key = $this->assignedSchedules->search($schedule);
            $this->assignedSchedules->pull($key);
            $this->reset(['selectedUnassignedSchedule', 'selectedAssignedSchedule']);
        }
    }

    public function save()
    {
        $this->validate(
            $this->rules,
            [],
            [
                'capacitation_id' => "capacitación",
                'subject_id' => "materia",
                'professor_id' => "profesora",
                'group_name' => "sección",
                'start_date' => "fecha de inicio",
                'edition' => "edición",
                'assignedSchedules' => "horarios asignados",
                'unassignedSchedules' => "horarios no asignados",
            ]
        );

        $group = Group::create([
            'subject_id' => $this->subject_id,
            'professor_id' => $this->professor_id,
            'group_name' => $this->group_name,
            'start_date' => $this->start_date,
            'edition' => $this->edition,
        ]);
        $group->schedules()->sync($this->assignedSchedules);

        $this->resetForm();
        $this->dispatch('create-group');
        $this->dispatch('success', 'Grupo agregado a la base de datos');
    }

    public function resetForm()
    {
        $this->reset([
            'capacitation_id',
            'subject_id',
            'professor_id',            
            'group_name',
            'start_date',
            'edition',
            'assignedSchedules',
            'unassignedSchedules',            
            'open',
        ]);
        $this->subjects = collect();
    }
}
