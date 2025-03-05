<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Address;
use App\Models\Admin\Canton;
use App\Models\Admin\Identification;
use App\Models\Admin\IdType;
use App\Models\Admin\Phone;
use App\Models\Admin\Professor;
use App\Models\Admin\Province;
use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule as ValidationRule;
use Illuminate\Validation\Rules\Unique;
use Livewire\Attributes\On;

class ShowProfessors extends Component
{

    use WithPagination;

    public $search;
    public $sort = 'name';
    public $direction = 'asc';
    public $open_edit = false;
    public $idTypes;
    public $provinces;
    public $cantons;
    
    public $user;
    public $professor;
    public $professor_id;
    public $name;
    public $email;
    public $idType_id;
    public $identification_id;
    public $numberId;
    public $phone_id;
    public $phone;
    public $address_id;
    public $province_id;
    public $canton_id;
    public $district;
    public $street;
    public $residence;
    public $isStudent;

    protected $rules = [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'idType_id' => 'required|exists:id_types,id',
        'numberId' => 'required|max:15',
        'phone' => 'required|max:20',
        'province_id' => 'required|exists:provinces,id',
        'canton_id' => 'required|exists:cantons,id',
        'district' => 'required|max:45',
        'street' => 'max:45',
        'residence' => 'max:45',
    ];

    public function mount()
    {
        $this->idTypes = IdType::all();
        $this->provinces = Province::all();
        $this->cantons = collect();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $professors = User::role('professor')
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%')
                    ->orWhereHas('identification', function ($query) {
                        $query->where('number', 'like', '%' . $this->search . '%');
                    })
                    ->orWhereHas('phone', function ($query) {
                        $query->where('number', 'like', '%' . $this->search . '%');
                    });
            })
            ->orderBy($this->sort, $this->direction)
            ->paginate(15);

        return view('livewire.admin.show-professors', compact(['professors']));
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

    public function selectCanton($province_id)
    {
        $this->cantons = Canton::where('province_id', $province_id)->get();
        $this->canton_id = null;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function edit(User $professor)
    {
        $this->resetValidation();
        $this->open_edit = true;
        $this->professor = $professor;
        
        $this->name = $this->professor->name;
        $this->email = $this->professor->email;
        $this->professor_id = $professor->id;

        $this->idType_id = $this->professor->identification->idType->id;
        $this->numberId = $this->professor->identification->number;
        $this->identification_id = $this->professor->identification->id;

        $this->phone = $this->professor->phone->number;
        $this->phone_id = $this->professor->phone->id;

        $this->province_id = $this->professor->address->canton->province->id;
        $this->selectCanton($this->province_id);
        $this->canton_id = $this->professor->address->canton->id;
        $this->district = $this->professor->address->district;
        $this->street = $this->professor->address->street;
        $this->residence = $this->professor->address->residence;
        $this->address_id = $this->professor->address->id;

        $this->user = User::find($this->professor->id);
        $this->isStudent = $this->user->hasRole('student');
    }

    public function update()
    {
        $this->validate(
            $this->rules,
            [],
            [
                'province_id' => "provincia",
                'idType_id' => " tipo de identificación",
                'canton_id' => "cantón",
                'numberId' => 'número de identificación',
            ]
        );

        $this->user = User::find($this->professor_id);
        $this->user->name = $this->name;
        $this->user->save();

        if ($this->isStudent) {
            $this->user->assignRole('student');
        } else {
            $this->user->removeRole('student');
        }

        $identification = Identification::find($this->identification_id);
        $identification->number = $this->numberId;
        $identification->id_type_id = $this->idType_id;
        $identification->user_id = $this->user->id;
        $identification->save();

        $phone = Phone::find($this->phone_id);
        $phone->number = $this->phone;
        $phone->user_id = $this->user->id;
        $phone->save();

        $address = Address::find($this->address_id);
        $address->district = $this->district;
        $address->street = $this->street;
        $address->residence = $this->residence;
        $address->canton_id = $this->canton_id;
        $address->user_id = $this->user->id;
        $address->save();

        $this->resetForm();
        $this->dispatch('edit-professor'); 
        $this->dispatch('exito', 'Profesora actualizada en la base de datos');
    }

    public function resetForm()
    {

        $this->reset([
            'name',
            'email',
            'idType_id',
            'numberId',
            'phone',
            'province_id',
            'canton_id',
            'district',
            'street',
            'residence',
            'open_edit',
        ]);
        $this->cantons = collect();
    }

    #[On('deleteProfessor')]
    public function deleteProfessor(User $id)
    {
        $id->delete();
    }
    
}
