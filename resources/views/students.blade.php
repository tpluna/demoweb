<x-layout>

    <x-slot:heading>
        Students
    </x-slot:heading>

    <h1> {{ $greetings }} </h1>

    @foreach ($students as $student)

        <ul>
            <li>
                <a href="" class="text-blue-500 hover:underline">{{ $student['lastname'] }}, {{ $student['firstname']}}</a>
            </li>
        </ul>
        
    @endforeach


    {{-- @foreach ($students as $student)
        <ul>
            <li> {{ $student['lastname'], $student['firstname'] }} </li>
        </ul>
    @endforeach --}}

</x-layout>