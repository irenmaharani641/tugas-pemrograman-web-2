<x-app>

    <x-slot:title> {{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('Transaksi.index') }}" role="button">Back</a>

    {{-- Transaksi --}}
    <h6>Data Transaksi</h6>
    <ul class="list-group mb-3">
        <li class="list-group-item">Kode Transaksi: {{ $transaksi->kode_transaksi }}</li>
        <li class="list-group-item">Tanggal: {{ $transaksi->tanggal }}</li>
        <li class="list-group-item">Total Harga: Rp. {{ number_format($transaksi->total_harga) }}
        </li>
        <li class="list-group-item">Metode Pembayaran: {{ $transaksi->metode_pembayaran }}</li>
        <li class="list-group-item">Status: {{ $transaksi->status }}</li>
        <li class="list-group-item">
            Created At: {{ optional($transaksi->created_at)->format('d F Y H:i:s') }}
        </li>
        <li class="list-group-item">
            Last Update: {{ optional($transaksi->updated_at)->diffForHumans() }}
        </li>
    </ul>

    {{-- Toko --}}
    <h6>Data Toko</h6>
    <ul class="list-group">
        <li class="list-group-item">Nama: {{ optional($transaksi->toko)->nama }}</li>
        <li class="list-group-item">Alamat: {{ optional($transaksi->toko)->alamat }}</li>
        <li class="list-group-item">Pemilik: {{ optional($transaksi->toko)->pemilik }}</li>
        <li class="list-group-item">Created At:
            {{ optional(optional($transaksi->toko)->created_at)->format('d F Y H:i:s') }}</li>
        <li class="list-group-item">Last Update:
            {{ optional(optional($transaksi->toko)->updated_at)->diffForHumans() }}</li>
    </ul>

</x-app>
