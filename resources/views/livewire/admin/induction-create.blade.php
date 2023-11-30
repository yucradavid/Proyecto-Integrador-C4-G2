<x-modal.card wire:model.defer="isOpen">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Registro nueva inducción
        </h2>
    </x-slot>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Fecha de la Inducción" placeholder="Ejemplo: 20/09/2023" wire:model="form.date"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Lugar de la Inducción" placeholder="Ejemplo: Aula Magna" wire:model="form.location"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Responsable de la Inducción" placeholder="Ejemplo: Ing. Juan Pérez" wire:model="form.responsible"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Hora" placeholder="Ejemplo: 10:00 AM" wire:model="form.time"/>
    </div>



    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Duración (en horas)" placeholder="Seleccione la duración" wire:model="form.duration"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Material de Inducción" placeholder="Ejemplo: Presentación, PDF, etc." wire:model="form.material_id"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Participante" placeholder="Ejemplo juan jimanes" wire:model="form.competitor_id"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Enlace de Zoom o Meet" placeholder="Ejemplo: https://www.zoom.com" wire:model="form.link"/>
    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
