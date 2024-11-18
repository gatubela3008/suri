<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;


class AlarmSuccess extends Component
{
    public $visible = false;
    public $mensaje;

    #[On('exito')]
    public function showAlarm($mensaje)
    {
        $this->mensaje = $mensaje;
        $this->visible = true;
    }

    public function hideAlarm ()
    {
        $this->reset();
        $this->dispatch('actualizar');
    }

    public function render()
    {
        return view('livewire.alarm-success');
    }
}
