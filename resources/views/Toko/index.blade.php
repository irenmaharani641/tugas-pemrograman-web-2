<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Tombol Create -->
    <a class="btn btn-primary mb-3" href="{{ route('Toko.create') }}" role="button">CREATE</a>

    <!-- Form Pencarian -->
    <form method="GET" action="{{ route('Toko.index') }}">
        <div class="row g-3 mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control" id="keyword" name="keyword"
                    placeholder="Search toko name ..." value="{{ request('keyword') }}">
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
    </form>

    <!-- List Toko -->
    <ul class="list-group">
        @foreach ($tokos as $toko)
            <li class="list-group-item">
                {{ $tokos->firstItem() + $loop->index }}.
                {{ $toko->nama }} -- {{ $toko->alamat }} -- {{ $toko->pemilik }}
            </li>
        @endforeach
    </ul>

    <!-- Info jumlah data -->
    <p class="mt-3">
        Showing {{ $tokos->firstItem() }} to {{ $tokos->lastItem() }} of {{ $tokos->total() }} results
    </p>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $tokos->links() }}
    </div>
</x-app>
