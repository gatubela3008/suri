<div>

    <x-label class="mb-1 px-3 mt-4">
        Buscar
    </x-label>
    <div class="mb-4 px-3 flex items-center">

        <x-input wire:model.live='search' class="flex-1 mr-4" placeholder="Escriba el valor que quiere buscar" />
        @livewire('admin.create-subject')

    </div>

    @if ($subjects->count())

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr scope="col" class="p-4">
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3">
                    <span>
                        Categoría
                    </span>
                </td>
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3">
                    <span>
                        Capacitación
                    </span>
                </td>
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3">
                    <span>
                        Materia
                    </span>
                </td>
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3">
                    <span>
                        Resumen
                    </span>
                </td>
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3">
                    <span>
                        Precio ₡
                    </span>
                </td>
                <td scope="col" class="justify-between items-center cursor-pointer px-6 py-3">
                    <span>
                        Semanas
                    </span>
                </td>
                <td scope="col" class="justify-between items-center px-6 py-3">
                    Acciones
                </td>
            </tr>
        </thead>
        <tbody class="text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            @foreach ($subjects as $subject)

            <tr wire:key='subject-{{ $subject->id }}'
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-3">
                    {{ $subject->capacitation->category->category_name }}
                </td>
                <td class="px-6 py-3">
                    {{ $subject->capacitation->capacitation_name }}
                </td>
                <td class="px-6 py-3">
                    {{ $subject->subject_name }}
                </td>
                <td class="px-6 py-3">
                    {{ $subject->summary }}
                </td>
                <td class="px-6 py-3">
                    {{ $subject->price }}
                </td>
                <td class="px-6 py-3">
                    {{ $subject->estimated_weeks }}
                </td>
                <td class="px-6 py-3">
                    <div>                        
                        <x-green-button wire:click="edit({{ $subject }})" title="Editar" class="">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4 -m-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>

                        </x-green-button>

                        <x-danger-button wire:click="$dispatch('seguroSubject',{{$subject->id}})"
                            title="Borrar">

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
        {{ $subjects->links() }}
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
            Formulario para editar una materia
        </x-slot>

        <x-slot name='content'>

            <form>

                <div class="form-subject">
                    <x-label value="Categoría" />
                    <x-input class="w-full form-control" wire:model='category_name' disabled />
                    <x-input-error for="category_id" />
                </div>

                <div class="form-subject">
                    <x-label value="Capacitación" />
                    <x-input class="w-full form-control" wire:model='capacitation_name' disabled />
                    <x-input-error for="category_id" />
                </div>

                <div class="mb-2">
                    <x-label value="Nombre" />
                    <x-input class="w-full form-control" required='required' wire:model.live='subject_name' />
                    <x-input-error for="subject_name" />
                </div>

                <div class="mb-2">
                    <x-label value="Resumen" />
                    <x-textarea class="w-full" wire:model.live='summary'>{{ $summary }}</x-textarea>
                    <x-input-error for="summary" />
                </div>

                <div class="mb-2">
                    <x-label value="Descripción" />
                    <x-textarea class="w-full" wire:model.live='description'>{{ $description }}</x-textarea>
                    <x-input-error for="description" />
                </div>

                <div class="mb-2">
                    <x-label value="Semanas de duración" />
                    <x-input class="w-full" type='number' required='required' wire:model.live='estimated_weeks' />
                    <x-input-error for="estimated_weeks" />
                </div>

                <div class="mb-2">
                    <x-label value="Precio ₡" />
                    <x-input class="w-full form-control" type='number' min='5000' max='250000' step='100'
                        required='required' wire:model.live='price' />
                    <x-input-error for="price" />
                </div>
                
            </form>

        </x-slot>

        <x-slot name='footer'>
            <x-secondary-button wire:click="resetForm" class="mr-4">
                Cancelar
            </x-secondary-button>

            <x-green-button wire:click="update()" class="" wire:loading.attr='disable' wire:loading.remove
                wire:target='update()'>
                Actualizar datos
            </x-green-button>

            <div class="p-2" wire:loading.delay wire:target='update()'>
                Procesando...
            </div>
        </x-slot>

    </x-dialog-modal>


    @push('js')

    <script>
        Livewire.on('seguroSubject', function(subjectId) {
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
                        Livewire.dispatch("deleteSubject", { "id": subjectId })
                        Swal.fire({
                            title: "¡Borrado!",
                            text: "El registro de la materia ha sido borrado",
                            icon: "success"
                        });
                    }
                })
            })
    </script>

    
    @endpush


</div>
