<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Capacitation;
use App\Models\Admin\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ShowSubjects extends Component
{
    use WithPagination;

    public $search;
    public $sort = 'category_id';
    public $direction = 'asc';
    public $open_edit = false;
    public $open_list = false;

    public $capacitations;
    public $subjects;
    public $subject;
    public $subject_id;

    public $capacitation;
    public $capacitation_id;
    public $capacitation_name;
    public $subject_name;
    public $summary;
    public $description;
    public $price;
    public $weeks_duration; 
    
    protected $rules = [
        'capacitation_id' => 'required|exists:capacitation,id',
        'subject_name' => 'required|max:60',
        'summary' => 'max:500',
        'description' => 'max:2000',
        'price' => 'required|integer|min:5000|max:250000',
        'estimated_weeks' => 'required|integer|min:1|max:160',
    ];

    public function mount()
    {
        $this->capacitations = Capacitation::all();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.show-subjects');
    }
}
