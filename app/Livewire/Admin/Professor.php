<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Professor extends Component
{
    

    public $search = '';

    public function mount()
    {
        
    }
    
    public function render()
    {
        $professors = User::role('professor')->get();
        return view('livewire.admin.professor', compact('professors'));
    }
}
