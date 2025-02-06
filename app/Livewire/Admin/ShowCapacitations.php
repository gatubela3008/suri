<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Capacitation;
use App\Models\Admin\Category;
use App\Models\Admin\Group;
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
    public $sort = 'capacitation_name';
    public $direction = 'asc';
    public $open_edit = false;

    public $categories;
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
    public $groups;
    public $groups_array = [];
    public $new_group_id;
    public $new_group_name;
    public $new_group;

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
        $this->groups = collect();
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
        $this->new_group_name = "";
        $this->open_edit = true;
        $this->capacitation = $capacitation;
        $this->capacitation_id = $capacitation->id;

        $this->capacitation_name = $this->capacitation->capacitation_name;
        $this->summary = $this->capacitation->summary;
        $this->description = $this->capacitation->description;
        $this->price = $this->capacitation->price;
        $this->registration = $this->capacitation->registration;
        $this->parts = $this->capacitation->parts;
        $this->weeks_duration = $this->capacitation->weeks_duration;
        $this->requirements = $this->capacitation->requirements;
        $this->capacitation_id = $this->capacitation->id;
        $this->category = $this->capacitation->category;
        $this->category_id = $this->capacitation->category->id;
        $this->category_name = $this->capacitation->category->category_name;
        $this->groups = $this->capacitation->groups;
    }

    public function addGroup($group_name)
    {
        $this->capacitation->groups()->create(['group_name' => $group_name]);
        $this->groups = $this->capacitation->groups;
        $this->reset('new_group_name');
        $this->dispatch('exito', 'Grupo agregado en la base de datos');
    }

    public function deleteGroup($id)
    {
        if ($this->capacitation->groups->count() > 1) {
            $group = Group::find($id);
            $group->delete();
            $this->groups = $this->capacitation->groups;
        }
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
                'registration' => "matrícula",
                'parts' => "¿en dos partes?",
                'weeks_duration' => "semanas de duración",
                'requirements' => "requerimientos",
            ]
        );

        $this->capacitation = Capacitation::find($this->capacitation_id);
        $this->capacitation->capacitation_name = $this->capacitation_name;
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
            'registration',
            'parts',
            'weeks_duration',
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
