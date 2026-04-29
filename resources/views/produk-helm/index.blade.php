<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <a class="btn btn-primary mb-3" href="{{ route('produk-helm.create') }}">Create</a>

    <ul class="list-group">
        @forelse ($Helms as $Helm)
            <li class="list-group-item">
                {{ $loop->iteration }}.
                {{ $Helm->nama }} --
                {{ $Helm->ukuran }} --
                {{ $Helm->warna }} --
                {{ $Helm->harga }} --
                {{ $Helm->stok }} --
                <a class="btn btn-warning btn-sm" href="{{ route('produk-helm.edit', $Helm) }}" role="button">edit</a>
                <form action="/example" method="POST">
                    @method('PUT')
                    @csrf
                </form>



            </li>
        @empty
            <li class="list-group-item text-center">
                Data Helm belum tersedia
            </li>
        @endforelse
    </ul>

</x-app>
