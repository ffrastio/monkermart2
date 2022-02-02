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
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" >
                    </div>
                    <div class="form-group">
                        <label for="type" class="form-control-label">Kategori</label>
                        <select name="type" value="{{ old('type')}}" class="form-control text-capitalize">
                        <option value="rokok" class="text-capitalize" >Rokok</option>
                        <option value="makanan" class="text-capitalize" >jajanan dan makanan ringan</option>
                        <option value="minuman" class="text-capitalize" >minuman</option>
                        <option value="bumbu-dapur" class="text-capitalize" >bumbu dan masakan instan</option>
                        <option value="perlengkapan-mandi" class="text-capitalize" >perlengkapan mandi dan mencuci</option>
                        <option value="obat" class="text-capitalize" >obat-obatan</option>
                        <option value="sembako" class="text-capitalize" selected>sembako</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-control-label">Nama Barang</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
