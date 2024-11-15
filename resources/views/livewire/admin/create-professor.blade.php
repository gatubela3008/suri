<div>
    <x-danger-button wire:click="$set('open',true)">
        Crear Profesora
    </x-danger-button>

    <x-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Formulario para registrar a una profesora
        </x-slot>

        <x-slot name='content'>

            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif

            <form>
                <div class="mb-4">
                    <x-label value="Nombre" />
                    <x-input class="w-full" wire:model='name' />
                </div>
                
                <div class="mb-4">
                    <x-label value="email" />
                    <x-input class="w-full" wire:model='email' />
                </div>

                <div class="form-group mb-4">
                    <x-label for="province">
                        Tipo de identificación
                    </x-label>
                    <x-select wire:model="idType_id" id="idType" class="w-full form-control">
                        <option value=null selected='selected' disabled>
                            Seleccione una opción
                        </option>
                        @foreach($idTypes as $idType)
                        <option value="{{ $idType->id }}">
                            {{ $idType->name }}
                        </option>
                        @endforeach
                    </x-select>
                </div>

                <div class="mb-4">
                    <x-label value="Numero de identificación" />
                    <x-input class="w-full" wire:model='numberId' />
                </div>

                <div class="mb-4">
                    <x-label value="Teléfono" />
                    <x-input class="w-full" wire:model='phone' />
                </div>

                <div class="form-group">
                    <x-label for="province">
                        Provincia
                    </x-label>
                    <x-select wire:model="province_id" id="province" class="w-full form-control">
                        <option value=null selected='selected' disabled>
                            Seleccione una opción
                        </option>
                        @foreach($provinces as $province)
                        <option value="{{ $province->id }}">
                            {{ $province->name }}
                        </option>
                        @endforeach
                    </x-select>
                </div>
                
            </form>
        </x-slot>
        <x-slot name='footer'>

            <x-secondary-button wire:click="$set('open', false)" class="mr-4">
                Cancelar
            </x-secondary-button>

            <x-danger-button wire:click='save'>
                Crear profesora
            </x-danger-button>

        </x-slot>
    </x-dialog-modal>

</div>