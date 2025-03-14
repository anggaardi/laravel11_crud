<x-layouts.app :title="__('Dashboard')">
    {{ $userId }}
    @livewire('chat',['userId' => $userId])
</x-layouts.app>
