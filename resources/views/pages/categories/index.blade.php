@extends('layouts.admin.app')

@section('title', 'Products Page')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex mt-4 align-items-center mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Kategori Produk</h1>
        </div>
        <div class="orders">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Daftar Kategori Produk</h4>
                            <a href="#crudCategory" data-remote="{{ route('categories.create') }}"
                                data-target="#crudCategory" data-toggle="modal" data-title="Tambah Produk"
                                class="btn btn-success btn-sm py-1 px-2 mt-2">+ Tambah Kategori
                                Produk</a>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table table-bordered table-hover table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Foto</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($items as $item)
                                            <tr class="justify-content-center align-center items-center">
                                                <td class="text-center">{{ $item->name }}</td>
                                                <td class="text-center"><img src="{{ url($item->photo) }}" alt=""
                                                        style="width: 80px; height: 80px;"></td>
                                                <td class="text-center">
                                                    <form action="{{ route('categories.destroy', $item->id) }}"
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
