<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('Toko.index', $toko) }}">
        @csrf
        @method('GET')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Toko</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                value="{{ old('nama', $toko->nama) }}">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                name="alamat" value="{{ old('alamat', $toko->alamat) }}">
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pemilik" class="form-label">Pemilik</label>
            <input type="text" class="form-control @error('pemilik') is-invalid @enderror" id="pemilik"
                name="pemilik" value="{{ old('pemilik', $toko->pemilik) }}">
            @error('pemilik')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('Toko.index') }}">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</x-app>
