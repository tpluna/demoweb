<x-layout>

    <x-slot:heading>
        {{ $teacher['lastname'] }}, {{ $teacher['firstname'] }}
    </x-slot:heading>

    <h1>Email: {{ $teacher->email }}</h1>
    <h1>Position: {{ $teacher->position }}</h1>

    <div class="pt-5">
        <a href="/teacher/{{ $teacher['id'] }}/edit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
    </div>
</x-layout>
