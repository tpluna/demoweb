<x-layout>

    <x-slot:heading>
        {{ $teacher['lastname'] }}, {{ $teacher['firstname'] }}
    </x-slot:heading>

    <img class="size-12 flex-none rounded-full bg-gray-50" src="{{ URL('img/payaglogo.png') }}" alt="">

</x-layout>