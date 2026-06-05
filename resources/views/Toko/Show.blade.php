<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('Toko.index') }}" role="button">Back</a>

    {{-- toko --}}
    <h6>Data Toko</h6>
    <ul class="list-group mb-3">
        <li class="list-group-item">Nama: {{ $toko->nama }}</li>
        <li class="list-group-item">Alamat: {{ $toko->alamat }}</li>
        <li class="list-group-item">Pemilik: {{ $toko->pemilik }}</li>
        <li class="list-group-item">
            Create At: {{ $toko->created_at?->format('d F Y H:i:s') ?? '-' }}</li>
        <li class="list-group-item">
            Last Update: {{ $toko->updated_at?->diffForHumans() ?? '-' }}</li>
    </ul>

    {{-- transaksi --}}
    <h6>Data Transaksi</h6>
    <ul class="list-group">
        @forelse ($toko->transaksis as $transaksi)
            <li class="list-group-item">{{ $transaksi->kode_transaksi }}</li>
        @empty
            <li class="list-group-item">Belum ada transaksi</li>
        @endforelse
    </ul>

</x-app>
