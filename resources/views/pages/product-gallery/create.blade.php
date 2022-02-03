@extends('layouts.admin.app')

@section('title', 'Products Gallery Page')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex mt-4 align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Gambar Produk</h1>
        </div>
        <div class="card">
            <div class="card-header">
                <strong>Tambah Gambar Barang</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{ route('product-gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-control-label">Nama Barang</label>
                        <select name="product_id" class="form-control @error('product_id') is-invalid @enderror">
                            @foreach ($product as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                        @error('product_id') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="photo" class="form-control-label">Foto atau gambar</label>
                        <input type="file" name="photo" value="{{ old('photo') }}" accept="image/*"
                            class="form-control @error('photo') is-invalid @enderror">
                        @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="is_default" class="form-control-label">Jadikan Default ?</label>
                        <br>
                        <label>
                            <input type="radio" name="is_default" value="1"
                                class="form-control @error('is_default') is-invalid @enderror"> Ya
                        </label>
                        &nbsp;
                        <label>
                            <input type="radio" name="is_default" value="0"
                                class="form-control @error('is_default') is-invalid @enderror"> Tidak
                        </label>
                        @error('is_default') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
