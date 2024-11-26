<div>
    <x-blue-button wire:click="$set('open',true)">
        Crear Profesora
    </x-blue-button>

    <form wire:submit="save" >

        <x-dialog-modal wire:model='open'>
            <x-slot name='title'>
                Formulario para registrar a una profesora
            </x-slot>

            <x-slot name='content'>

                <div class="mb-2">
                    <x-label value="Nombre" />
                    <x-input class="w-full form-control"  max='255' wire:model.live='name' />
                    <x-input-error for="name" />
                </div>

                <div class="mb-2">
                    <x-label value="email" />
                    <x-input class="w-full" type='email'  max='255' wire:model.live='email' />
                    <x-input-error for="email" />
                </div>

                <div class="form-group mb-2">
                    <x-label value="Tipo de identificación" />
                    <x-select wire:model.live="idType_id" id="idType_id"  class="w-full form-control">
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
                    <x-input class="w-full" max='15'  wire:model.live='numberId' />
                    <x-input-error for="numberId" />
                </div>

                <div class="mb-2">
                    <x-label value="Teléfono" />
                    <x-input class="w-full" max='20'  wire:model.live='phone' />
                    <x-input-error for="phone" />
                </div>

                <div class="form-group mb-2">
                    <x-label value='Provincia' />
                    <x-select  wire:change='selectCanton($event.target.value)' wire:model.live="province_id"
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
                    <x-select  wire:model.live="canton_id" id="canton" class="w-full mb-2 form-control">
                        <option value=null selected='selected' disabled>
                            Seleccione una opción
                        </option>
                        @foreach($cantons as $canton)
                        <option value="{{ $canton->id }}">
                            {{ $canton->name }}
                        </option>
                        @endforeach
                    </x-select>
                    <x-input-error for="canton_id" />
                </div>

                <div class="mb-2">
                    <x-label value="Distrito" />
                    <x-input class="w-full" max='45'  wire:model.live='district' />
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

                <div class="mb-2">
                    <x-label value="¿Es estudiante?" />
                    <x-checkbox wire:model.live='isStudent' />
                </div>


            </x-slot>

            <x-slot name='footer'>

                <x-secondary-button wire:click="resetForm" class="mr-4">
                    Cancelar
                </x-secondary-button>

                <x-green-button wire:loading.attr='disable' wire:loading.remove wire:target='save'>
                    Crear profesora
                </x-green-button>

                <div class="p-2" wire:loading.delay wire:target='save'>
                    Procesando...
                </div>

            </x-slot>
        </x-dialog-modal>

    </form>


</div>