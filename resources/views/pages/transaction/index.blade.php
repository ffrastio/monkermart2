@extends('layouts.admin.app')

@section('title', 'Transactions Page')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex mt-4 align-items-center mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
        </div>
        <div class="orders">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Daftar Transaksi</h4>
                            {{-- <a href="{{ route('transaction.create') }}" class="btn btn-success btn-sm py-1 px-2 mt-2">+ Tambah
                                Transaksi</a> --}}
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table table-bordered table-hover table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Nomor Hp</th>
                                            <th class="text-center">Total Transaksi</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($items as $item)
                                            <tr>
                                                <td class="text-center">{{ $item->name }}</td>
                                                <td class="text-center">{{ $item->email }}</td>
                                                <td class="text-center">{{ $item->number }}</td>
                                                <td class="text-center">@rupiah($item->transaction_total)</td>
                                                <td class="text-center">
                                                    @if ($item->transaction_status == 'PENDING')
                                                        <span class="badge badge-info py-1 px-2">
                                                        @elseif ($item->transaction_status == 'SUCCESS')
                                                            <span class="badge badge-success py-1 px-2">
                                                            @elseif ($item->transaction_status == 'FAILED')
                                                                <span class="badge badge-danger py-1 px-2">
                                                                @else
                                                                    <span>
                                                    @endif
                                                    {{ $item->transaction_status }}
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    @if ($item->transaction_status == 'PENDING')
                                                        {{-- <a href="{{ route('transaction.status', $item->id) }}?status=SUCCESS"
                                                            class="btn btn-success btn-sm"><i
                                                                class="fas fa-check"></i></a>
                                                        <a href="{{ route('transaction.status', $item->id) }}?status=FAILED"
                                                            class="btn btn-warning btn-sm"><i class="fas fa-times"></i></a> --}}
                                                    @endif
                                                    <a href="#mymodal" data-target="#mymodal" data-toggle="modal"
                                                        data-remote="{{ route('transaction.show', $item->id) }}"
                                                        data-title="Detail Transaksi {{ $item->uuid }}"
                                                        class="btn btn-info btn-sm">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('transaction.edit', $item->id) }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <form action="{{ route('transaction.destroy', $item->id) }}"
                                                        method="post" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            @empty
                                                <td colspan="6" class="text-center">Data Barang tidak ada</td>
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
