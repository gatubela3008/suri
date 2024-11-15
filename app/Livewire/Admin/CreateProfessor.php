<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Canton;
use App\Models\Admin\IdType;
use App\Models\Admin\Province;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateProfessor extends Component
{
    public $open = false;

    public $user;
    public $name;
    public $email;
    public $idType_id = null;
    public $idTypes;
    public $numberId;
    public $phone;
    public $province_id = null;
    public $provinces;
    public $canton_id = null;
    public $cantons;
    public $district;
    public $street;
    public $residence;
    public $isStudent = false;

    public function mount()
    {
        $this->reset();
        $this->idTypes = IdType::all();
        $this->provinces = Province::all();
        $this->cantons = collect();
    }

    public function updatedProvinceId($value)
    {
        $this->cantons = Canton::where('provincia_id', $value)->get(); 
        $this->canton_id = null;
    }

    public function render()
    {
        
        return view('livewire.admin.create-professor');
    }

    public function save()
    {
        $this->user = User:: create([
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
        $this->user->assignRole('professor');
        if ($this->isStudent) {
            $this->user->assignRole('student');
        }
    }
}
