<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Capacitation;
use App\Models\Admin\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class CreateCapacitation extends Component
{
    use WithPagination;

    public $search;
    public $sort = 'category_id';
    public $direction = 'asc';
    public $open = false;


    public $categories;
    public $subjects;
    public $capacitation;
    public $capacitation_id;

    public $category;
    public $category_id;
    public $category_name;
    public $capacitation_name;
    public $summary;
    public $description;
    public $price;
    public $registration = 15000;
    public $parts = true;
    public $weeks_duration;
    public $requirements;

    protected $rules = [
        'category_id' => 'required|exists:categories,id',
        'capacitation_name' => 'required|max:60',
        'summary' => 'max:500',
        'description' => 'max:2000',
        'price' => 'required|integer|min:5000|max:250000',
        'registration' => 'required|integer|min:5000|max:50000',
        'parts' => 'required|numeric|min:1',
        'weeks_duration' => 'required|integer|min:1|max:160',
        'requirements' => 'max:255',
    ];

    public function mount()
    {
        $this->categories = Category::all();
        $this->subjects = collect();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.create-capacitation');
    }

    public function save()
    {

        $this->validate(
            $this->rules,
            [],
            [
                'category_id' => "categoría",
                'capacitation_name' => "nombre",
                'summary' => "resumen",
                'description' => "descripción",
                'price' => "precio ₡",
                'registration' => "matrícula ₡",
                'parts' => "¿en dos partes?",
                'weeks_duration' => "semanas de duración",
                'requirements' => "requerimientos",
            ]
        );

        $this->capacitation = Capacitation::create([
            'category_id' => $this->category_id,
            'capacitation_name' => $this->capacitation_name,
            'summary' => $this->summary,
            'description' => $this->description,
            'price' => $this->price,
            'registration' => $this->registration,
            'parts' => $this->parts,
            'weeks_duration' => $this->weeks_duration,
            'requirements' => $this->requirements,
        ]);

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
            'category_id',
            'capacitation_name',
            'summary',
            'description',
            'price',
            'registration',
            'parts',
            'weeks_duration',
            'requirements',
            'open',
        ]);
        $this->subjects = collect();
    }
}
