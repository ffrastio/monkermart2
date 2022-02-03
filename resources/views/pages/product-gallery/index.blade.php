@extends('layouts.admin.app')

@section('title', 'Products Page')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex mt-4 align-items-center mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Produk</h1>
        </div>
        <div class="orders">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Daftar Gambar Produk</h4>
                            <a href="{{ route('product-gallery.create') }}" class="btn btn-success btn-sm py-1 px-2 mt-2">+
                                Tambah
                                Produk</a>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table table-bordered table-hover table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nama Barang</th>
                                            <th class="text-center">Foto</th>
                                            <th class="text-center">Default</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($items as $item)
                                            <tr>
                                                <td class="text-center">{{ $item->Product->name }}</td>
                                                <td class="align-center items-center"><img src="{{ url($item->photo) }}"
                                                        alt="" style="width: 80px; height: 80px;"></td>
                                                <td class="text-center text-capitalize">
                                                    {{ $item->is_default ? 'Ya' : 'Tidak' }}</td>
                                                <td class="text-center">
                                                    <form action="{{ route('product-gallery.destroy', $item->id) }}"
                                                        method="post" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            @empty
                                                <td colspan="5" class="text-center">Data Barang tidak ada</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
