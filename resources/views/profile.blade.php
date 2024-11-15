<x-layout>

    <x-slot:heading>
        Student's Profile
    </x-slot:heading>

    <h1>
        {{ 
            $student['firstname']
        }}
    </h1>

</x-layout>