<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Capacitation;
use App\Models\Admin\Category;
use App\Models\Admin\Schedule;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowScheduleCapacitations extends Component
{
    use WithPagination;

    public $search = '';

    public $categories;
    public $capacitation;
    public $capacitation_id;

    public $category;
    public $category_id;
    public $name;
    public $summary;

    public $selectedCapacitation;
    public $selectedCapacitationId;
    public $schedules;
    public $assignedSchedules;
    public $unassignedSchedules;
    public $selectedUnassignedSchedule;
    public $selectedAssignedSchedule;
    public $start_date;
    public $edition;

    public $isModalOpen = false;
    public $sort = 'id';
    public $direction = 'asc';

    protected $rules = [
        'start_date' => 'required|date',
        'edition' => 'required|string',
        'unassignedSchedules' => 'required|array|min:0',
        'assignedSchedules' => 'required|array|min:1',
    ];

    public function mount()
    {
        $this->schedules = Schedule::all();
    }

    public function render()
    {
        $capacitations = Capacitation::with('category')
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('summary', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate(15);

        return view('livewire.admin.show-schedule-capacitations', compact('capacitations'));
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

    public function edit(Capacitation $capacitation)
    {
        $this->capacitation = $capacitation;
        $this->capacitation_id = $capacitation->id;
        $this->category = $capacitation->category->name;
        $this->category_id = $capacitation->category->id;
        $this->name = $capacitation->name;
        $this->summary = $capacitation->summary;
        $this->assignedSchedules = $this->capacitation->schedules;
        $this->unassignedSchedules = collect();
        foreach ($this->schedules as $schedule) {
            if (!$this->assignedSchedules->contains($schedule->id)) {
                $this->unassignedSchedules->push($schedule);
            }
        }
        $this->isModalOpen = true;
    }

    public function update(Capacitation $capacitation)
    {
        $this->validate();
        $this->capacitation->schedules()->syncWithPivotValues($this->assignedSchedules, ['start_date' => $this->start_date, 'edition' => $this->edition]);

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
            'isModalOpen',
            'start_date',
            'edition',
        ]);
    }
}
