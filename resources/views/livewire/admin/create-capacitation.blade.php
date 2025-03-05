<div>
    <x-blue-button wire:click="$set('open',true)">
        Crear capacitación
    </x-blue-button>

    <form wire:submit="save" >

        <x-dialog-modal wire:model='open'>
            <x-slot name='title'>
                Formulario para agregar una capacitación
            </x-slot>
    
            <x-slot name='content'>
    
                <form>
    
                    <div class="form-group mb-2">
                        <x-label value='Categoría' />
                        <x-select wire:model.live="category_id"
                            id="category" class="w-full form-control">
                            <option value=null selected='selected' disabled>
                                Seleccione una opción
                            </option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->category_name }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="category_id" />
                    </div>
    
                    <div class="mb-2">
                        <x-label value="Nombre" />
                        <x-input class="w-full form-control" required='required' wire:model.live='capacitation_name' />
                        <x-input-error for="capacitation_name" />
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
                        <x-input class="w-full" type='number' required='required' wire:model.live='weeks_duration' />
                        <x-input-error for="weeks_duration" />
                    </div>
    
                    <div class="mb-2">
                        <x-label value="Precio ₡" />
                        <x-input class="w-full form-control" type='number' min='5000' max='1200000' step='100'
                            required='required' wire:model.live='price' />
                        <x-input-error for="price" />
                    </div>
    
                    <div class="mb-4">
                        <x-label value="Requerimientos" />
                        <x-input class="w-full form-control" wire:model.live='requirements' />
                        <x-input-error for="requirements" />
                    </div>
    
                </form>
    
            </x-slot>
    
            <x-slot name='footer'>
                <x-secondary-button wire:click="resetForm" class="mr-4">
                    Cancelar
                </x-secondary-button>
    
                <x-green-button wire:click="save()" class="" wire:loading.attr='disable' wire:loading.remove
                    wire:target='save'>
                    Crear capacitación
                </x-green-button>
    
                <div class="p-2" wire:loading.delay wire:target='save'>
                    Procesando...
                </div>
            </x-slot>
    
        </x-dialog-modal>

    </form>

</div>
