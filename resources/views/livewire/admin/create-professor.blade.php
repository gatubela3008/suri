<div>
    <x-danger-button wire:click="$set('open',true)">
        Crear Profesora
    </x-danger-button>

    <x-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Formulario para registrar a una profesora
        </x-slot>

        <x-slot name='content'>

            <form >

                <div class="mb-2">
                    <x-label value="Nombre" />
                    <x-input class="w-full form-control" required max='255' wire:model='name' />
                    @error('name') 
                    <span class="text-red-700 text-sm">
                        {{ $message }}
                    </span> 
                    @enderror
                </div>

                <div class="mb-2">
                    <x-label value="email" />
                    <x-input class="w-full" type='email' required max='255' wire:model='email' />
                    @error('email') 
                    <span class="text-red-700 text-sm">
                        {{ $message }}
                    </span> 
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <x-label for="province">
                        Tipo de identificación
                    </x-label>
                    <x-select wire:model="idType_id" id="idType_id" required class="w-full form-control">
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
                    <x-input class="w-full" max='15' required wire:model='numberId' />
                    <x-input-error for="numberId" />                    
                </div>

                <div class="mb-2">
                    <x-label value="Teléfono" />
                    <x-input class="w-full" max='20' required wire:model='phone' />
                    <x-input-error for="phone" />
                </div>

                <div class="form-group mb-2">
                    <x-label for="province">
                        Provincia
                    </x-label>
                    <x-select required  wire:change='selectCanton($event.target.value)' wire:model="province_id" id="province" class="w-full form-control">
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
                    <x-label for="canton">
                        Cantón 
                    </x-label>
                    <x-select required wire:model="canton_id" id="canton" class="w-full mb-2 form-control">
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
                    <x-input class="w-full" max='45' required wire:model='district' />
                    <x-input-error for="district" />
                </div>
                
                <div class="mb-2">
                    <x-label value="Calle" />
                    <x-input class="w-full" max='45' wire:model='street' />
                    <x-input-error for="street" />
                </div>

                <div class="mb-2">
                    <x-label value="Residencia" />
                    <x-input class="w-full" max='45' wire:model='residence' />
                </div>
                <x-input-error for="residence" />

                <div class="mb-2">
                    <x-label value="¿Es estudiante?" />
                    <x-checkbox  wire:model='isStudent' />
                </div>

            </form>
        </x-slot>

        <x-slot name='footer'>

            <x-secondary-button wire:click="resetForm" class="mr-4">
                Cancelar
            </x-secondary-button>

            <x-button wire:click="save()" wire:loading.attr='disable' wire:target='save'>
                Crear profesora
            </x-button>
            

        </x-slot>
    </x-dialog-modal>

      

</div>