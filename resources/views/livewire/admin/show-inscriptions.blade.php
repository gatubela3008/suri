<div>
    <x-label class="mb-1 px-3 mt-4">
        Buscar
    </x-label>
    <div class="mb-4 px-3 flex items-center">

        <x-input wire:model.live='search' class="flex-1 mr-4" placeholder="Escriba el valor que quiere buscar" />

        @livewire('admin.create-inscription')

    </div>

    @if ($inscriptions->count())

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr scope="col" class="p-4">
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3"
                    wire:click="order('student_name')">
                    <span>
                        Estudiante
                    </span>

                    @if ($sort == 'student_name')

                    @if ($direction == 'asc')

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="float-right size-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                    </svg>

                    @else

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-3 float-right">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                    </svg>

                    @endif

                    @else

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-3 float-right">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                    </svg>

                    @endif
                </td>
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3"
                    wire:click="order('capacitation_name')">
                    <span>
                        Capacitación
                    </span>

                    @if ($sort == 'capacitation_name')

                    @if ($direction == 'asc')

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="float-right size-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                    </svg>

                    @else

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="float-right size-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                    </svg>

                    @endif

                    @else

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-3 float-right">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                    </svg>

                    @endif

                </td>
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3"
                    wire:click="order('professor_name')">
                    <span>
                        Profesor
                    </span>

                    @if ($sort == 'professor_name')

                    @if ($direction == 'asc')

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="float-right size-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                    </svg>

                    @else

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="float-right size-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                    </svg>

                    @endif

                    @else

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-3 float-right">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                    </svg>

                    @endif

                </td>
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3"
                    wire:click="order('subject_name')">
                    <span>
                        Materia
                    </span>

                    @if ($sort == 'subject_name')">

                    @if ($direction == 'asc')

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="float-right size-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                    </svg>

                    @else

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="float-right size-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                    </svg>

                    @endif

                    @else

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-3 float-right">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                    </svg>

                    @endif

                </td>
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3"
                    wire:click="order('inscription_date')">
                    <span>
                        Fecha de inscripción
                    </span>

                    @if ($sort == 'inscription_date')">

                    @if ($direction == 'asc')

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="float-right size-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                    </svg>

                    @else

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="float-right size-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                    </svg>

                    @endif

                    @else

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-3 float-right">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                    </svg>

                    @endif

                </td>
                <td scope="col" class="justify-between items-center px-6 py-3">
                    Acciones
                </td>
            </tr>
        </thead>
        <tbody>

            @foreach ($inscriptions as $inscription)

            <tr wire:key='inscription-{{ $inscription->id }}'
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-3">
                    {{ $inscription->student_name }}
                </td>
                <td class="px-6 py-3">
                    {{ $inscription->capacitation_name }}
                </td>
                <td class="px-6 py-3">
                    {{ $inscription->professor_name }}
                </td>
                <td class="px-6 py-3">
                    {{ $inscription->subject_name }}
                </td>
                <td class="px-6 py-3">
                    {{ $inscription->inscription_date }}
                </td>
                <td class="px-6 py-3">
                    <div>                        

                        <x-danger-button wire:click="$dispatch('seguroInscription',{{$inscription->id}})" title="Borrar">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4 -m-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>

                        </x-danger-button>

                    </div>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

    <div class="px-6 py-4">
        {{ $inscriptions->links() }}
    </div>

    @else

    <div class=" rounded overflow-hidden shadow-lg w-full bg-gray-200">
        <div class="px-6 py-4">
            <p class="text-gray-700 text-base">
                No hay resultado del valor buscado
            </p>
        </div>
    </div>

    @endif

    <x-dialog-modal wire:model="open_edit">
        <form wire:submit="update">


            <x-slot name='title'>
                Formulario para modificar una inscripción
            </x-slot>

            <x-slot name='content'>

                <form>

                    <div class="form-group mb-2">
                        <x-label value='Estudiante' />
                        <x-select wire:model.live="student_id" id="student_id" disabled class="w-full form-control">
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
                        <x-label value='Fecho de inicio' />
                        <x-input wire:model="start_date" type='date' id="start_date" class="w-full form-control"
                            disabled />
                    </div>

                    <div class="form-group mb-2">
                        <x-label value='Horarios' />
                        <ul form-control>
                            @foreach($schedules as $schedule)
                            <option wire:model.key={{ "schedule_id" . $schedule->id }} value="{{ $schedule->id }}">
                                <li
                                    class='w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'>
                                    {{ $schedule->schedule }}
                                </li>
                            </option>
                            @endforeach
                        </ul>
                    </div>

                    <div class="form-group mb-2">
                        <x-label value='Fecha de Inscripción' />
                        <x-input wire:model="inscription_date" type='date' id="inscription_date"
                            class="w-full form-control" required />
                        <x-input-error for="inscription_date" />
                    </div>

                    <div class="form-group mb-2">
                        <x-label value='Beca mensualidad (en porcentaje %)' />
                        <div class="flex items-center">
                        <x-input wire:model="scholarship" type='number' min='0' max='100' step='1' id="scholarchip"
                            class="w-full form-control" required />
                            <span class="text-black dark:text-gray-400 ml-4 mr-4">%</span>
                        </div>
                        <x-input-error for="scholarship" />
                    </div>
                    
                </form>

            </x-slot>

            <x-slot name='footer'>
                <x-secondary-button wire:click="resetForm" class="mr-4">
                    Cancelar
                </x-secondary-button>

                <x-green-button wire:click="update()" class="" wire:loading.attr='disable' wire:loading.remove
                    wire:target='update'>
                    Actualizar inscripción
                </x-green-button>

                <div class="p-2" wire:loading.delay wire:target='update'>
                    Procesando...
                </div>
            </x-slot>



        </form>

    </x-dialog-modal>

    @push('js')
    <script>
        Livewire.on('seguroInscription', function(inscriptionId) {
            Swal.fire({
                    title: "¿Está seguro?",
                    text: "¡Esta acción no se puede revertir!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "SÍ, ¡Bórralo!",
                    cancelButtonText: "Cancelar",
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch("deleteInscription", { "id": inscriptionId })
                        Swal.fire({
                            title: "¡Borrado!",
                            text: "El registro de la inscripción ha sido borrado",
                            icon: "success"
                        });
                    }
                })
            })
    </script>

    @endpush

</div>