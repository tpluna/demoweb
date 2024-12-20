<x-layout>

    <x-slot:heading>
        Meet the Teachers
    </x-slot:heading>

    <ul role="list" class="divide-y divide-gray-100">

        @foreach ($teachers as $teacher)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <img class="size-12 flex-none rounded-full bg-gray-50" src="{{ URL('img/payaglogo.png') }}"
                        alt="">
                    <a href="/teachers/{{ $teacher->id }}">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm/6 font-semibold text-gray-900">{{ $teacher['lastname'] }},
                                {{ $teacher['firstname'] }}</p>
                            <p class="mt-1 truncate text-xs/5 text-gray-500">{{ $teacher['email'] }}</p>
                        </div>
                    </a>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm/6 text-gray-900">{{ $teacher['position'] }}</p>
                </div>
            </li>
        @endforeach

        {{ $teachers->links() }}

    </ul>

    <br>

    <a href="/teachers/create"
        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register
        a teacher</a>


</x-layout>
