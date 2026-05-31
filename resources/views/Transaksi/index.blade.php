<x-app>
    <x-slot:title>{{ $title }}</x-slot>


    <form method="GET" action="{{ route('Transaksi.index') }}" class="mb-3 d-flex">
        <input type="text" name="keyword" value="{{ $keyword }}" class="form-control me-2"
            placeholder="Cari kode/metode pembayaran...">
        <select name="status" class="form-select me-2">
            <option value="">-- Semua Status --</option>
            <option value="pending" {{ $status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="success" {{ $status == 'success' ? 'selected' : '' }}>Success</option>
            <option value="failed" {{ $status == 'failed' ? 'selected' : '' }}>Failed</option>
        </select>
        <button type="submit" class="btn btn-outline-primary">Filter</button>
    </form>


    <ul class="list-group">
        @foreach ($Transaksis as $Transaksi)
            <li class="list-group-item">
                {{ $transaksis->firstItem() + $loop->index }}.
                {{ $transaksi->kode_transaksi }} - {{ $transaksi->tanggal }}
                - Rp{{ number_format($transaksi->total_harga, 0, ',', '.') }}
                <br>
                <small>Toko: {{ $transaksi->toko->nama }}</small>
            </li>
        @endforeach
    </ul>

    <div class="mt-3">
        {{ $ransaksis->links() }}
    </div>
</x-app>
