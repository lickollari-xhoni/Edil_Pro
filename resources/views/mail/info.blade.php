<x-layout>
    <x-slot name="title">
        mail message
    </x-slot>
    <h1>Hai ricevuto un nuovo messaggio</h1>
    <p>Da: {{ $data['email'] }}</p>
    <p>Messaggio: {{ $data['message'] }}</p>
    <x-slot name="extrajs">
    </x-slot>
</x-layout>
