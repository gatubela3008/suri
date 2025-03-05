<div>
    <x-blue-button wire:click="$set('open',true)">
        Crear sección
    </x-blue-button>

    <form wire:submit="save">

        <x-dialog-modal wire:model='open'>
            <x-slot name='title'>
                Formulario para crear una materia y asignar su(s) horario(s)
            </x-slot>

            <x-slot name='content'>

                <form>

                    <div class="form-group mb-2">
                        <x-label value="Capacitación" />
                        <x-select wire:change='selectSubject($event.target.value)' wire:model.live="capacitation_id"
                            id="capacitation_id" required class="w-full form-control">
                            <option value=null selected='selected' disabled>
                                Seleccione una opción
                            </option>
                            @foreach($capacitations as $capacitation)
                            <option value="{{ $capacitation->id }}" {{ $capacitation_id==$capacitation->id ? 'selected'
                                : '' }}>
                                {{ $capacitation->capacitation_name }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="capacitation_id" />
                    </div>

                    <div class="form-group">
                        <x-label value="Materia" />
                        <x-select wire:model.live="subject_id" id="subject" class="w-full mb-2 form-control">
                            <option value=null selected='selected' disabled>
                                Seleccione una opción
                            </option>
                            @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">
                                {{ $subject->subject_name }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="subject_id" />
                    </div>

                    <div class="mb-2">
                        <x-label value="Sección" />
                        <x-input class="w-full form-control" wire:model='group_name' required />
                        <x-input-error for='group_name' />
                    </div>

                    <div class="form-group mb-2">
                        <x-label value="Profesora" />
                        <x-select wire:model.live="professor_id" id="professor_id" required class="w-full form-control">
                            <option value=null selected='selected' disabled>
                                Seleccione una opción
                            </option>
                            @foreach($professors as $professor)
                            <option value="{{ $professor->id }}" {{ $professor_id==$professor->id ? 'selected' : '' }}>
                                {{ $professor->user->name }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="professor_id" />
                    </div>

                    <div class="mb-2">
                        <x-label value="Edición" />
                        <x-input class="w-full form-control" wire:model.live='edition' requiered='required' />
                        <x-input-error for='edition' />
                    </div>

                    <div class="mb-2">
                        <x-label value="Fecha de inicio" />
                        <x-input class="w-full form-control" type='date' wire:model='start_date' requiered />
                        <x-input-error for='start_date' />
                    </div>

                    <div class="form-group mb-4">
                        <x-label value="Horarios disponibles" />
                        <div class="grid grid-cols-2 gap-4">
                            @if ($unassignedSchedules == null)
                            <div class="flex items-center">
                                <h1>No hay opciones</h1>
                            </div>
                            @else
                            <div class="flex items-center">
                                <x-select wire:model='selectedUnassignedSchedule' class="w-full form-control">
                                    <option value=''>Seleccione un horario</option>
                                    @if ($unassignedSchedules !== null)
                                    @foreach($unassignedSchedules as $schedule)
                                    <option class="ml-2 text-gray-700" value='{{ $schedule->id }}'
                                        wire:key='unassignedSchedule{{ $schedule->id }}'>
                                        {{ $schedule->schedule }}
                                    </option>
                                    @endforeach
                                    @endif
                                </x-select>
                                <x-input-error for='selectedUnassignedSchedule' />
                            </div>

                            <div class="flex items-center">
                                <x-blue-button wire:click='addSchedule' class="w-full justify-center">
                                    Agregar
                                </x-blue-button>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <x-label value="Horarios asignados" />
                        <div class="grid grid-cols-2 gap-4">
                            @if ($assignedSchedules == null)
                            <div class="flex items-center">
                                <h1>No hay opciones</h1>
                            </div>
                            @else
                            <div class="flex items-center">
                                <x-select wire:model.live='selectedAssignedSchedule' class="w-full form-control">
                                    <option value=''>Seleccione un horario</option>
                                    @if ($assignedSchedules !== null)
                                    @foreach($assignedSchedules as $schedule)
                                    <option class="ml-2 text-gray-700" value='{{ $schedule->id }}'
                                        wire:key='assignedSchedule{{ $schedule->id }}'>
                                        {{ $schedule->schedule }}
                                    </option>
                                    @endforeach
                                    @endif
                                </x-select>
                                <x-input-error for='selectedAssignedSchedule' />
                            </div>

                            <div class="flex items-center">
                                <x-danger-button wire:click='removeSchedule' class="w-full">
                                    Quitar
                                </x-danger-button>
                                <span class="ml-2 text-red-500 text-xs italic">
                                    Debe haber al menos un horario asignado
                                </span>
                            </div>
                            @endif
                        </div>
                    </div>


                </form>
            </x-slot>

            <x-slot name='footer'>

                <x-secondary-button wire:click="resetForm" class="mr-4">
                    Cancelar
                </x-secondary-button>

                <x-green-button wire:click="save()" wire:loading.attr='disable' wire:loading.remove
                    wire:target='update'>
                    Crear sección
                </x-green-button>

                <div class="p-2" wire:loading.delay wire:target='update'>
                    Procesando...
                </div>

            </x-slot>
        </x-dialog-modal>

    </form>


</div>