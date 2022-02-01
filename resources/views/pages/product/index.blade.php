@extends('layouts.admin.app')

@section('title', 'Products Page')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex mt-4 align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Produk</h1>
    </div>
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Produk</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table table-bordered table-hover table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Type</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @forelse($items as $item)
                                        <td class="text-center">{{ $item->name}}</td>
                                        <td class="text-center text-capitalize">{{ $item->type}}</td>
                                        <td class="text-center">@rupiah($item->price)</td>
                                        <td class="text-center">{{ $item->quantity}}</td>
                                        <td class="text-center">
                                            {{-- <a href="{{route('product.gallery'. $item->id)}}" class="btn btn-info btn-sm">
                                            <i class="fas fa-image"></i>
                                            </a> --}}
                                            <a href="{{route('product.edit', $item->id)}}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{route('product.destroy', $item->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                        @empty
                                        <td colspan="5" class="text-center">Data Barang tidak ada</td>
                                        @endforelse
                                    </tr>
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