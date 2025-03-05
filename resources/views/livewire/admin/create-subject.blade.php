<div>

    <x-blue-button wire:click="$set('open',true)">
        Crear Materia
    </x-blue-button>

    <form wire:submit="save" >

        <x-dialog-modal wire:model='open'>
            <x-slot name='title'>
                Formulario para agregar una capacitación
            </x-slot>
    
            <x-slot name='content'>
    
                <form>
    
                    <div class="form-group mb-2">
                        <x-label value='Capacitación' />
                        <x-select wire:model.live="capacitation_id"
                            id="capacitation" class="w-full form-control">
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
    
                    <div class="mb-2">
                        <x-label value="Materia" />
                        <x-input class="w-full form-control" required='required' wire:model.live='subject_name' />
                        <x-input-error for="subject_name" />
                    </div>
    
                    <div class="mb-2">
                        <x-label value="Resumen" />
                        <x-textarea class="w-full form-control" wire:model.live='summary'>{{ $summary }}</x-textarea>
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
                        <x-input class="w-full form-control" type='number' min='5000' max='1200000' step='100'
                            required='required' wire:model.live='price' />
                        <x-input-error for="price" />
                    </div>
    
                </form>
    
            </x-slot>
    
            <x-slot name='footer'>
                <x-secondary-button wire:click="resetForm()" class="mr-4">
                    Cancelar
                </x-secondary-button>
    
                <x-green-button wire:click="save()" class="" wire:loading.attr='disable' wire:loading.remove
                    wire:target='save'>
                    Crear materia
                </x-green-button>
    
                <div class="p-2" wire:loading.delay wire:target='save'>
                    Procesando...
                </div>
            </x-slot>
    
        </x-dialog-modal>

    </form>

</div>
