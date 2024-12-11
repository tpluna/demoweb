<x-layout>

    <x-slot:heading>
        Update Profile
    </x-slot:heading>

    <form method="POST" action="/teacher/{{ $teacher->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Personal Information</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="firstname" class="block text-sm/6 font-medium text-gray-900">First name</label>
                        <div class="mt-2">
                            <input type="text" name="firstname" id="firstname" autocomplete="given-name"
                                value="{{ $teacher['firstname'] }}"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                required>
                        </div>
                        @error('firstname')
                            <p class="text-xs text-red-500 font-semibold mt-1"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="lastname" class="block text-sm/6 font-medium text-gray-900">Last name</label>
                        <div class="mt-2">
                            <input type="text" name="lastname" id="lastname" autocomplete="family-name"
                                value="{{ $teacher['lastname'] }}"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                required>
                        </div>
                        @error('lastname')
                            <p class="text-xs text-red-500 font-semibold mt-1"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                        <div class="mt-2">
                            <input type="text" name="email" id="email" autocomplete="family-name"
                                value="{{ $teacher['email'] }}"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                required>
                        </div>
                        @error('email')
                            <p class="text-xs text-red-500 font-semibold mt-1"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="position" class="block text-sm/6 font-medium text-gray-900">Position</label>
                        <div class="mt-2">
                            <input type="text" name="position" id="position" autocomplete="family-name"
                                value="{{ $teacher->position }}"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                required>
                        </div>
                        @error('position')
                            <p class="text-xs text-red-500 font-semibold mt-1"> {{ $message }} </p>
                        @enderror
                    </div>


                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/teacher/{{ $teacher->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>

            <button type="submit" form="delete-form"
                class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">Delete</button>

            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>

        </div>

    </form>

    <form method="POST" id="delete-form" action="/teacher/{{ $teacher->id }}">
        @csrf
        @method('DELETE')

    </form>



</x-layout>
