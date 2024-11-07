<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Student extends Component
{

    public $students=null;

    public function mount()
    {
        $this->students = User::role('student')->get();
    }
    
    public function render()
    {
        return view('livewire.admin.student');
    }
}
