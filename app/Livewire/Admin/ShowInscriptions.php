<?php

namespace App\Livewire\Admin;

use App\Models\Capacitation;
use App\Models\Inscription;
use App\Models\Student;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ShowInscriptions extends Component
{
    use WithPagination;

    public $search;
    public $sort = 'student_name';
    public $direction = 'asc';
    public $open_edit = false;
    public $inscription;
    public $inscription_id;

    public $students;
    public $student_id;
    public $student_name;
    public $capacitations;
    public $capacitation_id;
    public $capacitation_name;
    public $subjects;
    public $subject_id;
    public $subject_name;
    public $groups;
    public $group_id;
    public $group_name;
    public $group;
    public $start_date;
    public $edition;
    public $schedules;
    public $inscription_date;
    public $scholarship;
    public $professor;

    protected $rules = [
        'student_id' => 'required|unique:students,id,:id',
        'capacitation_id' => 'required',
        'subject_id' => 'required',
        'group_id' => 'required',
        'inscription_date' => 'required|date',
        'scholarship' => 'required|numeric',
    ];

    public function mount()
    {
        $this->students = Student::all();
        $this->capacitations = Capacitation::all();
        $this->schedules = collect();
        $this->subjects = collect();
        $this->groups = collect();
    }

    public function render()
    {
        $inscriptions = Inscription::query()
            ->join('students', 'students.id', '=', 'inscriptions.student_id')
            ->join('users as students_users', 'students_users.id', '=', 'students.user_id')
            ->join('groups', 'groups.id', '=', 'inscriptions.group_id')
            ->join('subjects', 'subjects.id', '=', 'groups.subject_id')
            ->join('capacitations', 'capacitations.id', '=', 'subjects.capacitation_id')
            ->join('professors', 'professors.id', '=', 'groups.professor_id')
            ->join('users as professors_users', 'professors_users.id', '=', 'professors.user_id')
            ->select(
                'students_users.name as student_name',
                'capacitations.capacitation_name',
                'subjects.subject_name',
                'professors_users.name as professor_name',
                'inscriptions.inscription_date',
                'inscriptions.id'
            )
            ->when($this->search, function ($query) {
                $query->where(function ($subQuery) {
                    $subQuery->where('students_users.name', 'like', '%' . $this->search . '%')
                        ->orWhere('capacitations.capacitation_name', 'like', '%' . $this->search . '%')
                        ->orWhere('subjects.subject_name', 'like', '%' . $this->search . '%')
                        ->orWhere('professors_users.name', 'like', '%' . $this->search . '%')
                        ->orWhere('inscriptions.inscription_date', 'like', '%' . $this->search . '%');
                });
            })
            ->orderBy($this->sort, $this->direction)
            ->paginate(15);

        return view('livewire.admin.show-inscriptions', [
            'inscriptions' => $inscriptions
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function edit(Inscription $inscription)
    {

        $this->resetValidation();
        $this->open_edit = true;
        $this->inscription = $inscription;
        $this->student_id = $inscription->student_id;
        $this->student_name = $inscription->student->user->name;
        $this->group_id = $inscription->group_id;
        $this->group_name = $inscription->group->group_name;
        $this->subject_id = $inscription->group->subject_id;
        $this->subject_name = $inscription->group->subject->subject_name;
        
        $this->capacitation_id = $inscription->group->subject->capacitation_id;
        
        $this->inscription_date = $inscription->inscription_date;
        $this->scholarship = $inscription->scholarship * 100;
        $this->selectSubjects();
        $this->selectGroups();
        $this->selectSchedules();
        
    }

    public function selectSubjects()
    {
        $this->subjects = $this->capacitations->find($this->capacitation_id)->subjects;
    }

    public function selectGroups()
    {
        $this->groups = $this->subjects->find($this->subject_id)->groups->where('active', true);
    }

    public function selectSchedules()
    {
        $this->schedules = $this->groups->find($this->group_id)->schedules;
        $this->start_date = $this->groups->find($this->group_id)->start_date;
        $this->edition = $this->groups->find($this->group_id)->edition;
        $this->professor = $this->groups->find($this->group_id)->professor->user->name;
    }

    public function resetForm()
    {
        $this->reset([
            'open_edit',
            'student_id',
            'capacitation_id',
            'subject_id',
            'group_id',
            'group',
            'start_date',
            'edition',
            'inscription_date',
            'scholarship',
            'professor',
        ]);
        $this->subjects = collect();
        $this->groups = collect();
        $this->schedules = collect();
    }

    #[On('deleteInscription')]
    public function deleteInscription(Inscription $id)
    {
        $id->delete();
    }
}
