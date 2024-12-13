<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Capacitation;
use App\Models\Admin\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule as ValidationRule;
use Illuminate\Validation\Rules\Unique;
use Livewire\Attributes\On;

class ShowCapacitations extends Component
{
    use WithPagination;

    public $search;
    public $sort = 'name';
    public $direction = 'asc';
    public $open_edit = false;

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
    public $parts = true;
    public $weeks_duration;
    public $number_of_month;
    public $month_payment;
    public $requirements;

    protected $rules = [
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|max:60',
        'summary' => 'max:500',
        'description' => 'max:2000',
        'prize' => 'required|integer|min:5000|max:250000',
        'registration' => 'required|integer|min:5000|max:30000',
        'parts' => 'required|numeric|min:1',
        'weeks_duration' => 'required|integer|min:1|max:160',
        'number_of_month' => 'required|integer|min:1|max:37',
        'month_payment' => 'required|integer',
        'requirements' => 'max:255',        
    ];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $capacitations = Capacitation::
            where('name', 'like', '%' . $this->search . '%')            
            ->orWhere('summary', 'like', '%' . $this->search . '%')
            ->orWhere('requirements', 'like', '%' . $this->search . '%')            
            ->orderBy($this->sort, $this->direction)
            ->paginate(10);

        return view('livewire.admin.show-capacitations', compact('capacitations'));
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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function edit(Capacitation $capacitation)
    {
        $this->resetValidation();
        $this->open_edit = true;
        $this->capacitation = $capacitation;

        $this->name = $this->capacitation->name;
        $this->summary = $this->capacitation->summary;
        $this->description = $this->capacitation->description;
        $this->prize = $this->capacitation->prize;
        $this->registration = $this->capacitation->registration;
        $this->parts = $this->capacitation->parts;
        $this->weeks_duration = $this->capacitation->weeks_duration;
        $this->number_of_month = $this->capacitation->number_of_month;
        $this->month_payment = $this->capacitation->month_payment;
        $this->requirements = $this->capacitation->requirements;
        $this->capacitation_id = $this->capacitation->id;
        $this->category = $this->capacitation->category;
        $this->category_id = $this->capacitation->category->id;
        
    }

    public function update()
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
                'parts' => "¿en dos partes?",
                'weeks_duration' => "semanas de duración",
                'number_of_month' => "número de meses",
                'month_payment' => "pago mensual",
                'requirements' => "requerimientos",
            ]
        );

        $this->capacitation = Capacitation::find($this->capacitation_id);
        $this->capacitation->name = $this->name;
        $this->capacitation->save();

        $this->resetForm();
        $this->dispatch('exito', 'Capacitación actualizada en la base de datos');
    }

    public function resetForm()
    {

        $this->reset([
            'capacitation_id',
            'category',
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
            'open_edit',
        ]);
        
    }

    #[On('deletecapacitation')]
    public function deleteCapacitation(Capacitation $id)
    {
        $id->delete();
    }

}
