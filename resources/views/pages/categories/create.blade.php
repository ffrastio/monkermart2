<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Kategori Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Kategori</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror">
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="photo" class="form-control-label">Foto atau gambar</label>
                    <input type="file" name="photo" value="{{ old('photo') }}" accept="image/*"
                        class="form-control @error('photo') is-invalid @enderror">
                    @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
