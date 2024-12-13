<div>
    <x-blue-button wire:click="$set('open',true)">
        Crear capacitación
    </x-blue-button>

    <form wire:submit="save" >

        <x-dialog-modal wire:model='open'>

            <x-slot name='title'>
                Formulario para crear los datos de una capacitación
            </x-slot>
    
            <x-slot name='content'>
    
                <form>
    
                    <div class="form-group">
                        <x-label value="Categoría" />
                        <x-select required wire:model.live="category_id" id="category_id" class="w-full mb-2 form-control">
                            <option value=null disabled>
                                Seleccione una opción
                            </option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $category_id ? "selected='selected'" : '' }} >
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="category_id" />
                    </div>
    
                    <div class="mb-2">
                        <x-label value="Nombre" />
                        <x-input class="w-full form-control" required max='255' wire:model.live='name' />
                        <x-input-error for="name" />
                    </div>
    
                    <div class="mb-2">
                        <x-label value="Resumen" />
                        <x-textarea class="w-full"  max='500' wire:model.live='summary'>{{ $summary }}</x-textarea>
                        <x-input-error for="summary" />
                    </div>                
    
                    <div class="mb-2">
                        <x-label value="Descripción" />
                        <x-textarea class="w-full" wire:model.live='description'>{{ $description }}</x-textarea>
                        <x-input-error for="description" />
                    </div>                
    
                    <div class="mb-2">
                        <x-label value="Precio" />
                        <x-input class="w-full" type='number' min='0' step='1' max='250000' required wire:model.live='prize' />
                        <x-input-error for="prize" />
                    </div>
    
                    <div class="mb-2">
                        <x-label value="Matrícula" />
                        <x-input class="w-full" type='number' min='0' step='1' max='30000' required wire:model.live='registration' />
                        <x-input-error for="registration" />
                    </div>
    
                    <div class="mb-2">
                        <x-label value="¿En cuántas partes?" />
                        <x-input class="w-full" min='1' type='number' step='1' required wire:model.live='parts' />
                        <x-input-error for="parts" />
                    </div>
    
                    <div class="mb-2">
                        <x-label value="Semanas de duración" />
                        <x-input class="w-full" type='number' step='1' min='1' max='160' wire:model.live='weeks_duration' />
                        <x-input-error for="weeks_duration" />
                    </div>
    
                    <div class="mb-2">
                        <x-label value="Meses de duración" />
                        <x-input class="w-full" type='number' step='1' min='1' max='37' wire:model.live='number_of_month' />
                        <x-input-error for="number_of_month" />
                    </div>
    
                    <div class="mb-2">
                        <x-label value="Pago mensual" />
                        <x-input class="w-full" type='number' step='1' min='1' max='37' wire:model.live='month_payment' />
                        <x-input-error for="month_payment" />
                    </div>
    
                    <div class="mb-2">
                        <x-label value="Requisitos" />
                        <x-input class="w-full" max='255' wire:model.live='requirements' />
                        <x-input-error for="requirements" />
                    </div>
                    
    
                </form>
            </x-slot>

            <x-slot name='footer'>

                <x-secondary-button wire:click="resetForm" class="mr-4">
                    Cancelar
                </x-secondary-button>

                <x-green-button wire:click='save' wire:loading.attr='disable' wire:loading.remove wire:target='save'>
                    Crear capacitación
                </x-green-button>

                <div class="p-2" wire:loading.delay wire:target='save'>
                    Procesando...
                </div>

            </x-slot>
        </x-dialog-modal>

    </form>


</div>
