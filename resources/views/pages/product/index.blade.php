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
                                <table class="table table-responsive">
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
                                            <td class="text-center">Gudang Garam Filter</td>
                                            <td class="text-center">Rokok</td>
                                            <td class="text-center">Rp. 20.000</td>
                                            <td class="text-center">10</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-info btn-sm">
                                                    <i class="fas fa-image"></i>
                                                </a>
                                                <a href="#" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline">
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
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
