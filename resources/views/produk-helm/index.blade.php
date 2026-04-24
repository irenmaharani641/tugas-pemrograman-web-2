<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <ul class="list-group">
        @foreach ($helm as $helm)
            <li class="list-group-item">{{ $loop->iteration }}. {{ $helm->nama }}. {{ $helm->ukuran }}.
                {{ $helm->warna }}. {{ $helm->harga }}. {{ $helm->stok }}</li>
        @endforeach
    </ul>
</x-app>
