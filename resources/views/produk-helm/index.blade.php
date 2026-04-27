<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-primary mb-3" href="{{ route('produk-helm.create') }}">Create</a>

    <ul class="list-group">
        @forelse ($Helms as $Helm)
            <li class="list-group-item d-flex justify-content-between align-items-center">

                <div>
                    <strong>{{ $loop->iteration }}.</strong>
                    Nama : {{ $Helm->nama }} |
                    Ukuran: {{ $Helm->ukuran }} |
                    Warna: {{ $Helm->warna }} |
                    Harga: Rp {{ number_format($Helm->harga, 0, ',', '.') }} |
                    Stok: {{ $Helm->stok }}
                </div>

            </li>
        @empty
            <li class="list-group-item text-center">
                Data helm belum tersedia
            </li>
        @endforelse
    </ul>

</x-app>
