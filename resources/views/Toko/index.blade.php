<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Form Search -->
    <form method="GET" action="{{ route('Toko.index') }}" class="mb-3 d-flex">
        <input type="text" name="keyword" value="{{ request('keyword') }}" class="form-control me-2"
            placeholder="Cari nama/alamat/pemilik...">
        <button type="submit" class="btn btn-outline-primary">Search</button>
    </form>


    <!-- Tombol Create -->
    <a class="btn btn-primary mb-3" href="{{ route('Toko.create') }}" role="button">Create</a>

    <!-- List Toko -->
    <ul class="list-group">
        @foreach ($tokos as $toko)
            <li class="list-group-item fs-7">
                {{ $tokos->firstItem() + $loop->index }}.
                {{ $toko->nama }} --
                {{ $toko->alamat }} --
                {{ $toko->pemilik }}
                <a href="{{ route('Toko.show', $toko) }}" class="btn btn-info">Detail</a>

                <a href="{{ route('Toko.edit', $toko) }}" class="btn btn-warning">Edit</a>

                <form action="{{ route('Toko.destroy', $toko) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('ANDA YAKIN?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $tokos->links() }}
    </div>
</x-app>
