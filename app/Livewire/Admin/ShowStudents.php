<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Address;
use App\Models\Admin\Canton;
use App\Models\Admin\Identification;
use App\Models\Admin\IdType;
use App\Models\Admin\Phone;
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

class ShowStudents extends Component
{
    use WithPagination;

    public $search;
    public $sort = 'name';
    public $direction = 'asc';
    public $open_edit = false;

    public $user;
    public $student;
    public $student_id;
    public $name;
    public $email;
    public $idType_id;
    public $idTypes;
    public $identification_id;
    public $numberId;
    public $phone_id;
    public $phone;
    public $address_id;
    public $province_id;
    public $provinces;
    public $canton_id;
    public $cantons;
    public $district;
    public $street;
    public $residence;

    protected $rules = [
        'name' => 'required|max:255',
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
        $students = User::role('student')
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

        return view('livewire.admin.show-students', compact('students'));
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

    public function edit(User $student)
    {
        $this->resetValidation();
        $this->open_edit = true;
        $this->student = $student;

        $this->name = $this->student->name;
        $this->email = $this->student->email;
        $this->student_id = $student->id;

        $this->idType_id = $this->student->identification->idType->id;
        $this->numberId = $this->student->identification->number;
        $this->identification_id = $this->student->identification->id;

        $this->phone = $this->student->phone->number;
        $this->phone_id = $this->student->phone->id;

        $this->province_id = $this->student->address->canton->province->id;
        $this->selectCanton($this->province_id);
        $this->canton_id = $this->student->address->canton->id;
        $this->district = $this->student->address->district;
        $this->street = $this->student->address->street;
        $this->residence = $this->student->address->residence;
        $this->address_id = $this->student->address->id;
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

        $this->user = User::find($this->student_id);
        $this->user->name = $this->name;
        $this->user->save();

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
        $this->dispatch('exito', 'Estudiante actualizada en la base de datos');
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

    #[On('deleteStudent')]
    public function deleteStudent(User $id)
    {
        $id->delete();
    }
}
