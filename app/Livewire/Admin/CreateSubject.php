<?php

namespace App\Livewire\Admin;

use App\Models\Capacitation;
use App\Models\Group;
use App\Models\Subject;
use Livewire\Component;

class CreateSubject extends Component
{
    public $open = false;
    public $capacitations;
    public $capacitation_id;
    public $capacitation;
    public $summary;
    public $description;
    public $price;
    public $estimated_weeks;
    public $subject_name;
    
    protected $rules = [
        'capacitation_id' => 'required|exists:capacitations,id',
        'subject_name' => 'required|max:200',
        'summary' => 'max:500',
        'description' => 'max:2000',
        'price' => 'required|integer|min:5000|max:1200000',
        'estimated_weeks' => 'required|integer|min:1|max:160',
    ];

    public function mount()
    {
        $this->capacitations = Capacitation::all();
    }

    public function render()
    {
        return view('livewire.admin.create-subject');
    }

    public function save()
    {
        
        $this->validate(
            $this->rules,
            [],
            [
                'capacitation_id' => 'capacitación',
                'subject_name' => 'materia',
                'summary' => "resumen",
                'description' => "descripción",
                'price' => "precio ₡",
                'estimated_weeks' => 'semanas de duración',
            ]
        );
        
        $subject = Subject::create([
            'capacitation_id' => $this->capacitation_id,
            'subject_name' => $this->subject_name,
            'summary' => $this->summary,
            'description' => $this->description,
            'price' => $this->price,
            'estimated_weeks' => $this->estimated_weeks,
        ]);

        Group::create(['subject_id' => $subject->id]);

        $this->resetForm();
        $this->dispatch('create-capacitation');
        $this->dispatch('exito', 'Capacitación agregada a la base de datos');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function resetForm()
    {
        $this->reset([
            'capacitation_id',
            'subject_name',
            'summary',
            'description',
            'price',
            'estimated_weeks',
            'open',
        ]);
    }
}
