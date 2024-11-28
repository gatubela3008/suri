<div>

    <x-label class="mb-1 px-3 mt-4">
        Buscar
    </x-label>
    <div class="mb-4 px-3 flex items-center">

        <x-input wire:model.live='search' class="flex-1 mr-4" placeholder="Escriba el valor que quiere buscar" />

        @livewire('admin.create-student')

    </div>

    @if ($students->count())

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr scope="col" class="p-4">
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3"
                    wire:click="order('name')">
                    <span>
                        Nombre
                    </span>

                    @if ($sort == 'name')

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
                    wire:click="order('email')">
                    <span>
                        email
                    </span>

                    @if ($sort == 'email')

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
                <td scope="col" class="justify-between items-center  px-6 py-3"
                    wire:click="order('identification.number')">
                    Identificación
                </td>
                <td scope="col" class="justify-between items-center px-6 py-3" wire:click="order('phone.number')">
                    Teléfono
                </td>
                <td scope="col" class="justify-between items-center px-6 py-3">Acciones</td>
            </tr>
        </thead>
        <tbody>

            @foreach ($students as $student)

            <tr wire:key='student-{{ $student->id }}'
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-3">
                    {{ $student->name }}
                </td>
                <td class="px-6 py-3">
                    {{ $student->email }}
                </td>
                <td class="px-6 py-3">
                    {{ $student->identification->idType->name.'-'.$student->identification->number }}
                </td>
                <td class="px-6 py-3">
                    {{ $student->phone->number }}
                </td>
                <td class="px-6 py-3">
                    <div>

                        <x-green-button wire:click="edit({{ $student }})" title="Editar" class="">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4 -m-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>

                        </x-green-button>

                        <x-danger-button wire:click="$dispatch('seguroEstudiante',{{$student->id}})">

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
        {{ $students->links() }}
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
            Formulario para actualizar los datos de una estudiantea
        </x-slot>

        <x-slot name='content'>

            <form>

                <div class="mb-2">
                    <x-label value="Nombre" />
                    <x-input class="w-full form-control" required max='255' wire:model.live='name' />
                    <x-input-error for="name" />
                </div>

                <div class="mb-2">
                    <x-label value="email" />
                    <x-input class="w-full" type='email' disabled='disabled' max='255' wire:model.live='email' />
                    <x-input-error for="email" />
                </div>

                <div class="form-group mb-2">
                    <x-label value="Tipo de identificación" />
                    <x-select wire:model.live="idType_id" id="idType_id" required class="w-full form-control">
                        <option value=null selected='selected' disabled>
                            Seleccione una opción
                        </option>
                        @foreach($idTypes as $idType)
                        <option value="{{ $idType->id }}">
                            {{ $idType->name }}
                        </option>
                        @endforeach
                    </x-select>
                    <x-input-error for="idType_id" />
                </div>

                <div class="mb-2">
                    <x-label value="Numero de identificación" />
                    <x-input class="w-full" max='15' required wire:model.live='numberId' />
                    <x-input-error for="numberId" />
                </div>

                <div class="mb-2">
                    <x-label value="Teléfono" />
                    <x-input class="w-full" max='20' required wire:model.live='phone' />
                    <x-input-error for="phone" />
                </div>

                <div class="form-group mb-2">
                    <x-label value='Provincia' />
                    <x-select required wire:change='selectCanton($event.target.value)' wire:model.live="province_id"
                        id="province" class="w-full form-control">
                        <option value=null selected='selected' disabled>
                            Seleccione una opción
                        </option>
                        @foreach($provinces as $province)
                        <option value="{{ $province->id }}">
                            {{ $province->name }}
                        </option>
                        @endforeach
                    </x-select>
                    <x-input-error for="province_id" />
                </div>

                <div class="form-group">
                    <x-label value="Canton" />
                    <x-select required wire:model.live="canton_id" id="canton" class="w-full mb-2 form-control">
                        <option value=null disabled>
                            Seleccione una opción
                        </option>
                        @foreach($cantons as $canton)
                        <option value="{{ $canton->id }}" {{ $canton->id == $canton_id ? "selected='selected'" : '' }} >
                            {{ $canton->name }}
                        </option>
                        @endforeach
                    </x-select>
                    <x-input-error for="canton_id" />
                </div>

                <div class="mb-2">
                    <x-label value="Distrito" />
                    <x-input class="w-full" max='45' required wire:model.live='district' />
                    <x-input-error for="district" />
                </div>

                <div class="mb-2">
                    <x-label value="Calle" />
                    <x-input class="w-full" max='45' wire:model.live='street' />
                    <x-input-error for="street" />
                </div>

                <div class="mb-2">
                    <x-label value="Residencia" />
                    <x-input class="w-full" max='45' wire:model.live='residence' />
                </div>
                <x-input-error for="residence" />

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
        Livewire.on('seguroEstudiante', function(studentId) {
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
                        Livewire.dispatch("deleteStudent", { "id": studentId })
                        Swal.fire({
                            title: "¡Borrado!",
                            text: "El registro de la estudiante ha sido borrado",
                            icon: "success"
                        });
                    }
                })
            })
    </script>
    @endpush

</div>
