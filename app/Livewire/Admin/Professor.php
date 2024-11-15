<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Professor extends Component
{
    use WithPagination;

    public $search;
    public $sort = 'name';
    public $direction = 'asc';
    
    public function render()
    {           
        $professors = User::role('professor')
            ->where(function($query) { 
                $query->where('name', 'like', '%' . $this->search . '%') 
                        ->orWhere('email', 'like', '%' . $this->search . '%') 
                        ->orWhereHas('identification', function($query) { 
                            $query->where('number', 'like', '%' . $this->search . '%'); 
                        }) 
                        ->orWhereHas('phone', function($query) { 
                            $query->where('number', 'like', '%' . $this->search . '%'); 
                        }); 
                    })
            ->orderBy($this->sort, $this->direction)
            ->paginate(15);

        return view('livewire.admin.professor', compact('professors'));
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
}
