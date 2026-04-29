<x-app>

    <x-slot:title>{{ $title }}</x-slot>


    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <a class="btn btn-primary mb-3" href="{{ route('produk-helm.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($Helms as $Helm)
            <li class="list-group-item fs-7">
                {{ $loop->iteration }}.
                {{ $Helm->nama }} --
                {{ $Helm->ukuran }} --
                {{ $Helm->warna }} --
                {{ $Helm->harga }} --
                {{ $Helm->stok }}
                <a href="{{ route('produk-helm.edit', $Helm) }}" class="btn btn-warning">
                    Edit
                </a>
                <form action="{{ route('produk-helm.destroy', $Helm) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('ANDA YAKIN?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

</x-app>
