@extends('layouts.admin.app')

@section('title', 'Edit Products Page')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex mt-4 align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Produk</h1>
    </div>
    <div class="card">
        <div class="card-header">
            <strong>Ubah Barang</strong>
            <small>{{ $items->name }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('product.update', $items->id) }}" method="POST">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <input type="text" name="name" value="{{ old('name') ? old('name') : $items->name }}" class="form-control @error('name') is-invalid @enderror">
                    @error('name') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="type" class="form-control-label">Kategori</label>
                    <select name="type" value="{{ old('type') ? old('type') : $items->type}}" class="form-control text-capitalize">
                        <option value="rokok" class="text-capitalize">Rokok</option>
                        <option value="jajanan dan makanan ringan" class="text-capitalize">jajanan dan makanan ringan</option>
                        <option value="minuman" class="text-capitalize">minuman</option>
                        <option value="bumbu-dapur" class="text-capitalize">bumbu dan masakan instan</option>
                        <option value="perlengkapan-mandi" class="text-capitalize">perlengkapan mandi dan mencuci</option>
                        <option value="obat" class="text-capitalize">obat-obatan</option>
                        <option value="sembako" class="text-capitalize" selected>sembako</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description" class="form-control-label">Deskripsi</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror ckeditor">{{ old('description') ? old('description') : $items->description}}</textarea>
                    @error('description') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-control-label">Harga</label>
                    <input type="number" name="price" value="{{ old('price') ? old('price') : $items->price }}" class="form-control @error('price') is-invalid @enderror">
                    @error('price') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="quantity" class="form-control-label">Stok Barang</label>
                    <input type="number" name="quantity" value="{{ old('quantity') ? old('quantity') : $items->quantity }}" class="form-control @error('quantity') is-invalid @enderror">
                    @error('quantity') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection