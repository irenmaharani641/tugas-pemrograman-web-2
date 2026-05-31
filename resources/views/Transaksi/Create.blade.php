<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form action="{{ route('Transaksi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kode_transaksi" class="form-label">Kode Transaksi</label>
            <input type="text" name="kode_transaksi" id="kode_transaksi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="total_harga" class="form-label">Total Harga</label>
            <input type="number" name="total_harga" id="total_harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" id="metode_pembayaran" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="pending">Pending</option>
                <option value="success">Success</option>
                <option value="failed">Failed</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="toko_id" class="form-label">Toko</label>
            <select name="toko_id" id="toko_id" class="form-select" required>
                @foreach ($tokos as $toko)
                    <option value="{{ $toko->id }}">{{ $toko->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-app>
