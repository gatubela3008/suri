<div>
    
    <div class="mb-4 p-3">
        <x-label>
            Buscar
        </x-label>
        <x-input wire:model='search' class="w-full" />
    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr scope="col" class="p-4">
                <td scope="col" class="px-6 py-3">Nombre</td>
                <td scope="col" class="px-6 py-3">email</td>
                <td scope="col" class="px-6 py-3">Identificación</td>
                <td scope="col" class="px-6 py-3">Teléfono</td>
                <td scope="col" class="px-6 py-3">Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($professors as $professor)
                <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td  class="px-6 py-3">
                        {{ $professor->name }}
                    </td>
                    <td class="px-6 py-3">
                        {{ $professor->email }}
                    </td>
                    <td class="px-6 py-3">
                        {{ $professor->identification->idType->name.'-'.$professor->identification->number }}
                    </td>
                    <td class="px-6 py-3">
                        {{ $professor->phone->number }}
                    </td>
                    <td class="px-6 py-3">
                        <div>
                            <span>Editar</span>

                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
