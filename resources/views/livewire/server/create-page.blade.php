<div>
    <x-slot:title>
        {{ $title }} | InstaHost
    </x-slot>

    <livewire:server.create :selected-type="$type" :selected-token-uuid="$token_uuid" />
</div>
