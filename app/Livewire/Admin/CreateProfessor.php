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
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Livewire;

class CreateProfessor extends Component
{
    public $open = false;

    public $user;

    public $name;
    public $email;
    public $idType_id;
    public $idTypes;
    public $numberId;
    public $phone;
    public $province_id;
    public $provinces;
    public $canton_id;
    public $cantons;
    public $district;
    public $street;
    public $residence;
    public $isStudent = false;

    protected $rules = [
        'name' => 'required|max:255',
        'email' => 'required|max:255|email|unique:users',
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

    public function selectCanton($province_id)
    {
        $this->cantons = Canton::where('province_id', $province_id)->get();
        $this->canton_id = null;
    }

    public function render()
    {
        return view('livewire.admin.create-professor');
    }

    public function save()
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

        $this->user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
        ]);

        Professor::create([
            'user_id' => $this->user->id,
        ]);

        $this->user->assignRole('professor');
        if ($this->isStudent) {
            $this->user->assignRole('student');
        }

        Identification::create([
            'number' => $this->numberId,
            'id_type_id' => $this->idType_id,
            'user_id' => $this->user->id,
        ]);

        Phone::create([
            'number' => $this->phone,
            'user_id' => $this->user->id,
        ]);

        Address::create([
            'district' => $this->district,
            'street' => $this->street,
            'residence' => $this->residence,
            'canton_id' => $this->canton_id,
            'user_id' => $this->user->id,
        ]);

        $this->resetForm();
        $this->dispatch('create-professor');
        $this->dispatch('exito', 'Profesora agregada a la base de datos');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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
            'open',
        ]);
        $this->cantons = collect();
    }
}
