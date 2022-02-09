@extends('layouts.admin.app')

@section('title', 'Products Page')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex mt-4 align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
        </div>
        <div class="card">
            <div class="card-header">
                <strong>Tambah Barang</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-control-label">Nama Barang</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="type" class="form-control-label">Kategori</label>
                        <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-control-label">Deskripsi</label>
                        <textarea name="description"
                            class="form-control @error('description') is-invalid @enderror ckeditor">{{ old('description') }}</textarea>
                        @error('description') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-control-label">Harga</label>
                        <input type="number" name="price" value="{{ old('price') }}"
                            class="form-control @error('price') is-invalid @enderror">
                        @error('price') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="form-control-label">Stok Barang</label>
                        <input type="number" name="quantity" value="{{ old('quantity') }}"
                            class="form-control @error('quantity') is-invalid @enderror">
                        @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
