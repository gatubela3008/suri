<?php

namespace App\Livewire\Admin;

use App\Models\Capacitation;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ShowCapacitations extends Component
{
    use WithPagination;

    public $search;
    public $sort = 'category_id';
    public $direction = 'asc';
    public $open_edit = false;
    public $open_list = false;
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
    public $weeks_duration;
    public $requirements;
 
    protected $rules = [
        'category_id' => 'required|exists:categories,id',
        'capacitation_name' => 'required|max:60',
        'summary' => 'max:500',
        'description' => 'max:2000',
        'price' => 'required|integer|min:5000|max:1200000',
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
        $capacitations = Capacitation::where('capacitation_name', 'like', '%' . $this->search . '%')
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
        $this->capacitation_id = $capacitation->id;
        $this->capacitation_name = $capacitation->capacitation_name;
        $this->summary = $capacitation->summary;
        $this->description = $capacitation->description;
        $this->price = $capacitation->price;
        $this->weeks_duration = $capacitation->weeks_duration;
        $this->requirements = $capacitation->requirements;
        $this->category = $capacitation->category;
        $this->category_id = $capacitation->category->id;
        $this->category_name = $capacitation->category->category_name;
    }

    public function listSubjects(Capacitation $capacitation)
    {
        $this->subjects= $capacitation->subjects;
        $this->open_list = true;
    }
    
    public function update()
    {
        $this->validate(
            $this->rules,
            [],
            [
                'category_id' => "categoría",
                'capacitation_name' => "nombre",
                'summary' => "resumen",
                'description' => "descripción",
                'price' => "costo",
                'weeks_duration' => "semanas de duración",
                'requirements' => "requerimientos",
            ]
        );

        $this->capacitation = Capacitation::find($this->capacitation_id);
        $this->capacitation->capacitation_name = $this->capacitation_name;
        $this->capacitation->summary = $this->summary;
        $this->capacitation->description = $this->description;
        $this->capacitation->price = $this->price;
        $this->capacitation->week_duration = $this->week_duration;
        $this->capacitation->requirements = $this->requirements;
        $this->capacitation->save();

        $this->resetForm();
        $this->dispatch('exito', 'Capacitación actualizada en la base de datos');
    }

    public function resetForm()
    {

        $this->reset([
            'capacitation_id',
            'category',
            'capacitation_name',
            'summary',
            'description',
            'price',
            'weeks_duration',
            'requirements',
            'open_edit',
            'open_list',
        ]);
    }

    #[On('deleteCapacitation')]
    public function deleteCapacitation(Capacitation $id)
    {
        $id->delete();
    }
}
