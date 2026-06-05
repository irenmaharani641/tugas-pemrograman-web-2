<x-app>

    <x-slot:title> {{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <form action="{{ route('Transaksi.index') }}" method="GET">

        <div class="row g-3 mb-3">
            <div class="col-md-4">
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Seacrh seat name ..."
                    value="{{ request('keyword') }}">
            </div>
            <div class="col-md-4">
                <select class="form-select" id="toko_id" name="toko_id">
                    <option value="">All Toko</option>
                    @foreach ($tokos as $toko)
                        <option value="{{ $toko->id }}" {{ request('toko_id') == $toko->id ? 'selected' : '' }}>
                            {{ $toko->nama }}
                        </option>
                    @endforeach

                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>

    </form>

    <a class="btn btn-primary mb-3" href="{{ route('Transaksi.create') }}" role="button">Create</a>
    <ul class="list-group">
        @foreach ($transaksis as $transaksi)
            <li class="list-group-item" style="font-size: 14px;">{{ $transaksis->firstItem() + $loop->index }}.
                {{ $transaksi->kode_transaksi }} -
                {{ $transaksi->tanggal }} -
                {{ $transaksi->total_harga }} -
                {{ $transaksi->metode_pembayaran }} -
                {{ $transaksi->status }} -
                {{ $transaksi->toko->nama }}
                <a class="btn btn-info btn-sm" href="{{ route('Transaksi.show', $transaksi) }}"
                    role="button">Detail</a>
                <a class="btn btn-warning btn-sm" href="{{ route('Transaksi.edit', $transaksi) }}"
                    role="button">Edit</a>
                <form action="{{ route('Transaksi.destroy', $transaksi) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda yakin')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{ $transaksis->links() }}

</x-app>
