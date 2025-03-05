<div>

    <x-label class="mb-1 px-3 mt-4">
        Buscar
    </x-label>
    <div class="mb-4 px-3 flex items-center">
        <x-input wire:model.live='search' class="flex-1 mr-4" placeholder="Escriba el valor que quiere buscar" />
        @livewire('admin.create-group')
    </div>

    @if ($groups->count())

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr scope="col" class="p-4">
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
                    wire:click="order('subject_name')">
                    <span>
                        Materia
                    </span>

                    @if ($sort == 'subject_name')

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
                    wire:click="order('group_name')">
                    <span>
                        Sección
                    </span>

                    @if ($sort == 'group_name')

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
                    wire:click="order('name')">
                    <span>
                        Profesora
                    </span>

                    @if ($sort == 'name')

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

                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3">
                    <span>
                        Inicio
                    </span>
                </td>
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3">
                    <span>
                        Edición
                    </span>
                </td>
                <td scope="col" class="justify-between items-center px-6 py-3">
                    Horarios
                </td>

            </tr>
        </thead>
        <tbody>

            @foreach ($groups as $group)

            <tr wire:key='group-{{ $group->id }}'
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-3">
                    {{ $group->subject->capacitation->capacitation_name }}
                </td>
                <td class="px-6 py-3">
                    {{ $group->subject->subject_name }}
                </td>
                <td class="px-6 py-3">
                    {{ $group->group_name }}
                </td>
                <td class="px-6 py-3">
                    {{ $group->professor->user->name }}
                </td>
                <td class="flex-1 px-6 py-3 w-16">
                    {{ $group->start_date }}
                </td>
                <td class="px-6 py-3">
                    {{ $group->edition }}
                </td>
                <td class="px-6 py-3">
                    <div>

                        <x-green-button wire:click="edit({{ $group }})" title="Editar horarios" class="">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4 -m-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>


                        </x-green-button>

                        <x-danger-button wire:click="$dispatch('segurogrupo',{{$group->id}})" title="Borrar">

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
        {{ $groups->links() }}
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

    <x-dialog-modal wire:model='open_edit'>
        <x-slot name='title'>
            Formulario para asignar horario(s) a una sección
        </x-slot>

        <x-slot name='content'>

            <form>

                <div class="mb-2">
                    <x-label value="Capacitación" />
                    <x-input class="w-full form-control" wire:model='capacitation_name' disabled />
                </div>

                <div class="mb-2">
                    <x-label value="Materia" />
                    <x-input class="w-full form-control" wire:model='subject_name' required/>
                </div>

                <div class="mb-2">
                    <x-label value="Sección" />
                    <x-input class="w-full form-control" wire:model='group_name' required />
                </div>

                <div class="form-group mb-2">
                    <x-label value="Profesora" />
                    <x-select wire:model.live="professor_id" id="professor_id" required class="w-full form-control">
                        <option value=null selected='selected' disabled>
                            Seleccione una opción
                        </option>
                        @foreach($professors as $professor)
                        <option value="{{ $professor->id }}" {{ $professor_id == $professor->id ? 'selected' : '' }}>
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
                    <x-input-error for='star_tdate' />
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
                        </div>

                        <div class="flex items-center">
                            <x-danger-button wire:click='removeSchedule' class="w-full">
                                Quitar
                            </x-danger-button>
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

            <x-green-button wire:click="update()" wire:loading.attr='disable' wire:loading.remove wire:target='update'>
                Actualizar datos
            </x-green-button>

            <div class="p-2" wire:loading.delay wire:target='update'>
                Procesando...
            </div>

        </x-slot>
    </x-dialog-modal>


    @push('js')
    <script>
        Livewire.on('segurogrupo', function(groupId) {
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
                        Livewire.dispatch("deleteGroup", { "id": groupId })
                        Swal.fire({
                            title: "¡Borrado!",
                            text: "El registro de la capacitación ha sido borrado",
                            icon: "success"
                        });
                    }
                })
            })
    </script>

    <script>
        Livewire.on('segurogroup', function(groupId) {
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "Debe haber por lo menos un grupo",
                showConfirmButton: false,
                timer: 3000
            }));
    </script>

    @endpush


</div>