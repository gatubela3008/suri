<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Capacitation;
use App\Models\Admin\Category;
use App\Models\Admin\Subject;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use Illuminate\Validation\Rule as ValidationRule;


class ShowSubjects extends Component
{
    use WithPagination;

    public $search;
    public $sort = 'category_id';
    public $direction = 'asc';
    public $open_edit = false;
    public $open_list = false;

    public $categories;
    public $category;
    public $category_id;
    public $category_name;

    public $capacitations;
    public $capacitation;
    public $capacitation_id;
    public $capacitation_name;

    public $subject;
    public $subject_id;
    public $subject_name;
    public $summary;
    public $description;
    public $price;
    public $estimated_weeks; 
    
    protected $rules = [
        'capacitation_id' => 'required|exists:capacitation,id',
        'subject_name' => 'required|max:60',
        'summary' => 'max:500',
        'description' => 'max:2000',
        'price' => 'required|integer|min:5000|max:1200000',
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
        $subjects = Subject::with(['capacitation.category'])
            ->where(function($query) {
                $query->where('subject_name', 'like', '%' . $this->search . '%')
                      ->orWhere('summary', 'like', '%' . $this->search . '%')
                      ->orWhereHas('capacitation', function($q) {
                          $q->where('capacitation_name', 'like', '%' . $this->search . '%')
                            ->orWhereHas('category', function($qc) {
                                $qc->where('category_name', 'like', '%' . $this->search . '%');
                            });
                      });
            })
            ->orderBy('capacitation_id')
            ->orderBy('subject_name')
            ->paginate(15);
            
        return view('livewire.admin.show-subjects', compact('subjects'));
    }
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function edit(Subject $subject)
    {
        $this->resetValidation();
        $this->open_edit = true;
        $this->subject = $subject;
        $this->subject_id = $subject->id;

        $this->subject_name = $this->subject->subject_name;
        $this->summary = $this->subject->summary;
        $this->description = $this->subject->description;
        $this->price = $this->subject->price;
        $this->estimated_weeks = $this->subject->estimated_weeks;
        
        $this->capacitation = $this->subject->capacitation;
        $this->capacitation_id = $this->subject->capacitation->id;
        $this->capacitation_name = $this->subject->capacitation->capacitation_name;
        
        $this->category = $this->subject->capacitation->category;
        $this->category_id = $this->subject->capacitation->category->id;
        $this->category_name = $this->subject->capacitation->category->category_name;
    }

    public function update()
    {
        $this->validate(
            $this->rules,
            [],
            [
                'capacitation_id' => "capacitación",
                'subject_name' => "materia",
                'summary' => "resumen",
                'description' => "descripción",
                'price' => "precio ₡",
                'estimated_weeks' => "semanas",
            ]
        );
        
        $this->subject = Subject::find($this->subject_id);
        $this->subject->subject_name = $this->subject_name;
        $this->subject->summary = $this->summary;
        $this->subject->description = $this->description;
        $this->subject->price = $this->price;
        $this->subject->estimated_weeks = $this->estimated_weeks;
        $this->subject->save();

        $this->resetForm();
        $this->dispatch('exito', 'Materia actualizada en la base de datos');
    }

    public function resetForm()
    {

        $this->reset([
            'subject_id',
            'subject',
            'subject_name',
            'summary',
            'description',
            'price',
            'estimated_weeks',
            'open_edit',            
        ]);
    }

    #[On('deleteSubject')]
    public function deleteSubject(Subject $id)
    {
        $id->delete();
    }

}
