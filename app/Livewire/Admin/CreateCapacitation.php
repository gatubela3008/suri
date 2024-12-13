<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Capacitation;
use App\Models\Admin\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Livewire;

class CreateCapacitation extends Component
{
    public $open = false;

    public $categories;
    public $capacitation;
    public $capacitation_id;

    public $category;
    public $category_id;
    public $name;
    public $summary;
    public $description;
    public $prize;
    public $registration = 15000;
    public $parts = 2;
    public $weeks_duration;
    public $number_of_month;
    public $month_payment;
    public $requirements;

    protected $rules = [
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|max:60',
        'summary' => 'max:500',
        'description' => 'max:2000',
        'prize' => 'required|min:0|max:250000|numeric',
        'registration' => 'required|min:0|max:30000|numeric',
        'parts' => 'required|numeric|min:1',
        'weeks_duration' => 'required|min:1|max:160|numeric',
        'number_of_month' => 'required|min:1|max:37|numeric',
        'month_payment' => 'required|min:0|numeric',
        'requirements' => 'max:250',
    ];

    public function mount()
    {
        $this->categories = Category::all();
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
                'name' => "nombre",
                'summary' => "resumen",
                'description' => "descripción",
                'prize' => "costo",
                'registration' => "matrícula",
                'parts' => "¿en cuántas partes?",
                'weeks_duration' => "semanas de duración",
                'number_of_month' => "número de meses",
                'month_payment' => "pago mensual",
                'requirements' => "requerimientos",
            ]
        );

        

        $this->capacitation = Capacitation::create([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'summary' => $this->summary,
            'description' => $this->description,
            'prize' => $this->prize,
            'registration' => $this->registration,
            'parts' => $this->parts,
            'weeks_duration' => $this->weeks_duration,
            'number_of_month' => $this->number_of_month,
            'month_payment' => $this->month_payment,
            'requirements' => $this->requirements,
        ]);

        dd($this->capacitation);

        $this->resetForm();
        $this->dispatch('create-student');
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
            'name',
            'summary',
            'description',
            'prize',
            'registration',
            'parts',
            'weeks_duration',
            'number_of_month',
            'month_payment',
            'requirements',
            'open',
        ]);
    }
}
