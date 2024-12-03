<x-layout>

    <x-slot:heading>
        Store
    </x-slot:heading>

    @foreach ($products as $product)
        <ul>
            <li>
                <a href="/product/{{ $product['id'] }}"
                    class="text-blue-500 hover:underline">{{ $product['product_name'] }},
                    {{ $product['product_price'] }}</a>
            </li>
        </ul>
    @endforeach


    {{-- @foreach ($students as $student)
        <ul>
            <li> {{ $student['lastname'], $student['firstname'] }} </li>
        </ul>
    @endforeach --}}

</x-layout>
