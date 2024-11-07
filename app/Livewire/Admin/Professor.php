<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Professor extends Component
{
    public $professors=null;

    public function mount()
    {
        $this->professors = User::role('professor')->get();
    }
    
    public function render()
    {
        return view('livewire.admin.professor');
    }
}
