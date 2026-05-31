<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <!-- Tombol Create -->
    <a href="{{ route('Transaksi.create') }}" class="btn btn-primary mb-3">Create</a>

    <!-- Form Search + Filter -->
    <form method="GET" action="{{ route('Transaksi.index') }}" class="mb-3 d-flex">
        <input type="text" name="keyword" value="{{ $keyword }}" class="form-control me-2"
            placeholder="Cari kode/metode pembayaran...">
        <select name="status" class="form-select me-2">

            <option value="pending" {{ $status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="success" {{ $status == 'success' ? 'selected' : '' }}>Success</option>
            <option value="failed" {{ $status == 'failed' ? 'selected' : '' }}>Failed</option>
        </select>
        <button type="submit" class="btn btn-outline-primary">Filter</button>
    </form>

    <!-- List Transaksi -->
    <ul class="list-group">
        @foreach ($transaksis as $transaksi)
            <li class="list-group-item">
                {{ $transaksis->firstItem() + $loop->index }}.
                {{ $transaksi->kode_transaksi }} - {{ $transaksi->tanggal }}
                - Rp{{ number_format($transaksi->total_harga, 0, ',', '.') }}
                <br>
                <small>Toko: {{ $transaksi->toko->nama }}</small>

                <!-- Tombol Edit -->
                <a href="{{ route('Transaksi.edit', $transaksi->id) }}" class="btn btn-warning btn-sm">Edit</a>
            </li>
        @endforeach
    </ul>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $transaksis->links() }}
    </div>
</x-app>
