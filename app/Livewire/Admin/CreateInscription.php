<?php

namespace App\Livewire\Admin;

use App\Models\Capacitation;
use App\Models\Inscription;
use App\Models\Student;
use Livewire\Component;

class CreateInscription extends Component
{
    public $open = false;
    public $students;
    public $student_id;
    public $capacitations;
    public $capacitation_id;
    public $subjects;
    public $subject_id;
    public $groups;
    public $group_id;
    public $group;
    public $start_date;
    public $edition;
    public $schedules;
    public $inscription_date;
    public $scholarship = 75;
    public $professor;

    public function mount()
    {
        $this->students = Student::all();
        $this->capacitations = Capacitation::all();
        $this->schedules = collect();
        $this->subjects = collect();
        $this->groups = collect();
    }

    public function render()
    {
        return view('livewire.admin.create-inscription');
    }

    public function save()
    {
        $this->validate([
            'student_id' => 'required|unique:students,id',
            'capacitation_id' => 'required|unique:capacitations,id',
            'subject_id' => 'required|unique:subjects,id',
            'group_id' => 'required|unique:groups,id',
            'inscription_date' => 'required|date',
            'scholarship' => 'required|numeric',
        ],
        [

        ],
        [
            'student_id' => 'estudiante',
            'capacitation_id' => 'capacitación',
            'subject_id' => 'materia',
            'group_id' => 'grupo',
            'inscription_date' => 'fecha de inscripción',
            'scholarship' => 'beca',
        ]);

        Inscription::create([
            'student_id' => $this->student_id,
            'group_id' => $this->group_id,
            'inscription_date' => $this->inscription_date,
            'scholarship' => $this->scholarship,
        ]);

        $this->resetForm();
        
    }

    public function resetForm()
    {
        $this->reset([
            'open',
            'student_id',
            'capacitation_id',      
            'subject_id',
            'group_id',
            'group',
            'start_date',
            'edition',
            'inscription_date',
            'scholarship',
            'professor',
        ]);
        $this->subjects = collect();
        $this->groups = collect();    
        $this->schedules = collect();    
    }

    public function selectSubjects()
    {
        $this->subjects = $this->capacitations->find($this->capacitation_id)->subjects;
    }

    public function selectGroups()
    {
        $this->groups = $this->subjects->find($this->subject_id)->groups->where('active', true);
    }

    public function selectSchedules()
    {
        $this->schedules = $this->groups->find($this->group_id)->schedules;
        $this->start_date = $this->groups->find($this->group_id)->start_date;
        $this->edition = $this->groups->find($this->group_id)->edition;
        $this->professor = $this->groups->find($this->group_id)->professor->user->name;
    }
    
}
