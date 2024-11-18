<div class="">
    @if($visible)
    <div x-data="{ open: true }" x-init="$watch('open', value => { if (!value) @this.hideAlarma(); })">
        <x-dialog-modal wire:model='open'>

            <x-slot name='title' class="bg-green-300 text-green-950 text-2xl items-center">
                Éxito
            </x-slot>

            <x-slot name='content' class="p-4">
                Operación realizada corretamente
            </x-slot>

            <x-slot name='footer' class="items-center">

                <x-button wire:click="$set('visible', false)">
                    Cerrar ventana
                </x-button>

            </x-slot>

        </x-dialog-modal>
    </div>
    @endIf
</div>