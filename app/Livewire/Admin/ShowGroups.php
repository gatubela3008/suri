<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Capacitation;
use App\Models\Admin\Category;
use App\Models\Admin\Group;
use App\Models\Admin\Schedule;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule as ValidationRule;
use Illuminate\Validation\Rules\Unique;
use Livewire\Attributes\On;

class ShowGroups extends Component
{
    use WithPagination;

    public $search = '';

    public $categories;
    public $capacitations;

    public $category;
    public $category_id;
    public $category_name;
    public $capacitation;
    public $capacitation_id;
    public $capacitation_name;
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
    public $startdate_;
    public $edition_;

    public $open_edit = false;
    public $sort = 'category_name';
    public $direction = 'asc';

    protected $rules = [
        'startdate_' => 'required|date',
        'edition_' => 'required|string',
        'unassignedSchedules' => 'required|array|min:0',
        'assignedSchedules' => 'required|array|min:1',
    ];

    public function mount()
    {
        $this->schedules = Schedule::all();
    }

    public function render()
    {
        $groups = Group::query()
            ->join('capacitations', 'groups.capacitation_id', '=', 'capacitations.id')
            ->join('categories', 'capacitations.category_id', '=', 'categories.id')
            ->select('groups.*', 'capacitations.capacitation_name', 'categories.category_name')
            ->when($this->search, function ($query) {
                return $query->where('group_name', 'like', "%{$this->search}%")
                    ->orWhere('capacitation_name', 'like', "%{$this->search}%")
                    ->orWhere('category_name', 'like', "%{$this->search}%");
            })
            ->orderBy($this->sort, $this->direction)->paginate(15);

        return view('livewire.admin.show-groups', compact('groups'));
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'asc') {
                $this->direction = 'desc';
            } else {
                $this->direction = 'asc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
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

    public function edit(Group $group)
    {
        $this->group = $group;
        $this->group_id = $group->id;
        $this->group_name = $group->group_name;
        $this->capacitation = $group->capacitation;
        $this->capacitation_id = $group->capacitation->id;
        $this->capacitation_name = $group->capacitation->capacitation_name;
        $this->category = $group->capacitation->category;
        $this->category_name = $group->capacitation->category->category_name;
        $this->category_id = $group->capacitation->category->id;
        $this->assignedSchedules = $this->group->schedules;
        $this->startdate_ = $this->group->schedules()->first()->pivot->start_date;
        $this->edition_ = $this->group->schedules()->first()->pivot->edition;
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
        /* dd($this->group, $this->assignedSchedules, $this->startdate_, $this->edition_);
         */
        $this->validate();
        $this->group->schedules()->syncWithPivotValues($this->assignedSchedules, ['start_date' => $this->startdate_, 'edition' => $this->edition_]);

        $this->resetForm();
        $this->dispatch('exito', 'Horarios actualizados en la base de datos');
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
            'startdate_',
            'edition_',
        ]);
    }
}
