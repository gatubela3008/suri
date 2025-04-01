<div>
    <x-blue-button wire:click="$set('open',true)">
        Crear inscripción
    </x-blue-button>

    <form wire:submit="save">

        <x-dialog-modal wire:model='open'>
            <x-slot name='title'>
                Formulario para realizar una inscripción
            </x-slot>

            <x-slot name='content'>

                <form>

                    <div class="form-group mb-2">
                        <x-label value='Estudiante' />
                        <x-select wire:model.live="student_id" id="student" class="w-full form-control">
                            <option value=null selected='selected' disabled>
                                Seleccione una opción
                            </option>
                            @foreach($students as $student)
                            <option value="{{ $student->id }}">
                                {{ $student->user->name }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="student_id" />
                    </div>

                    <div class="form-group mb-2">
                        <x-label value='Capacitación' />
                        <x-select wire:model.live="capacitation_id" wire:change='selectSubjects' id="capacitation"
                            class="w-full form-control">
                            <option value=null selected='selected' disabled>
                                Seleccione una opción
                            </option>
                            @foreach($capacitations as $capacitation)
                            <option value="{{ $capacitation->id }}">
                                {{ $capacitation->capacitation_name }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="capacitation_id" />
                    </div>

                    <div class="form-group mb-2">
                        <x-label value='Materia' />
                        <x-select wire:model.live="subject_id" wire:change='selectGroups' id="subject"
                            class="w-full form-control">
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

                    <div class="form-group mb-2">
                        <x-label value='Sección' />
                        <x-select wire:model.live="group_id" wire:change='selectSchedules' id="group"
                            class="w-full form-control">
                            <option value=null selected='selected' disabled>
                                Seleccione una opción
                            </option>
                            @foreach($groups as $group)
                            <option value="{{ $group->id }}">
                                {{ $group->group_name }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="group_id" />
                    </div>

                    <div class="form-group mb-2">
                        <x-label value='Edición' />
                        <x-input wire:model="edition" id="edition" class="w-full form-control" disabled />
                    </div>

                    <div class="form-group mb-2">
                        <x-label value='Professor' />
                        <x-input wire:model="professor" id="professor" class="w-full form-control" disabled />
                    </div>

                    <div class="form-group mb-2">
                        <x-label value='Fecha de inicio' />
                        <x-input wire:model="start_date" type='date' id="start_date" class="w-full form-control" disabled />
                    </div>

                    <div class="form-group mb-2">
                        <x-label value='Horarios' />
                        <ul form-control >
                            @foreach($schedules as $schedule)
                            <option wire:model.key={{ "schedule_id" . $schedule->id }} value="{{ $schedule->id }}">
                                <li class='w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'>
                                    {{ $schedule->schedule }}
                                </li>
                            </option>
                            @endforeach
                        </ul>
                    </div>

                    <div class="form-group mb-2">
                        <x-label value='Fecho de Inscripción' />
                        <x-input wire:model="inscription_date" type='date' id="inscription_date" class="w-full form-control" required />
                        <x-input-error for="inscription_date" />
                    </div>

                    <div class="form-group mb-2">
                        <x-label value='Beca mensualidad (en porcentaje %)' />
                        <x-input wire:model="scholarship" type='number' min='0' max='100' step='1' id="scholarchip" class="w-full form-control" required />
                        <x-input-error for="scholarship" />
                    </div>

                </form>

            </x-slot>

            <x-slot name='footer'>
                <x-secondary-button wire:click="resetForm" class="mr-4">
                    Cancelar
                </x-secondary-button>

                <x-green-button wire:click="save()" class="" wire:loading.attr='disable' wire:loading.remove
                    wire:target='save'>
                    Registrar inscripción
                </x-green-button>

                <div class="p-2" wire:loading.delay wire:target='save'>
                    Procesando...
                </div>
            </x-slot>

        </x-dialog-modal>

    </form>

</div>