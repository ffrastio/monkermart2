<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <td>{{ $item->name }}</td>
    </tr>
    <tr>

        <th>email</th>
        <td>{{ $item->email }}</td>
    </tr>
    <tr>

        <th>number</th>
        <td>{{ $item->number }}</td>
    </tr>
    <tr>

        <th>address</th>
        <td>{{ $item->address }}</td>
    </tr>
    <tr>

        <th>Total Transaksi</th>
        <td>{{ $item->transaction_total }}</td>
    </tr>
    <tr>
        <th>Transaksi Status</th>
        <td>
            @if ($item->transaction_status == 'PENDING')
                <span class="badge badge-info py-2 px-4">
                @elseif ($item->transaction_status == 'SUCCESS')
                    <span class="badge badge-success py-2 px-4">
                    @elseif ($item->transaction_status == 'FAILED')
                        <span class="badge badge-danger py-2 px-4">
                        @else
                            <span>
            @endif
            {{ $item->transaction_status }}
            </span>
        </td>
    </tr>
    <tr>
        <th>Pembelian Produk</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Nama</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                </tr>
                @foreach ($item->Details as $details)
                    <tr>
                        <td>{{ $details->Product->name }}</td>
                        <td>{{ $details->Product->type }}</td>
                        <td>@rupiah($details->Product->price)</td>
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
</table>
{{-- <div class="row">
    <div class="col-4">
        <a href="{{ route('transaction.status', $item->id) }}?status=SUCCESS" class="btn btn-success btn-block"><i
                class="fas fa-check"></i> Set Sukses</a>
    </div>
    <div class="col-4">
        <a href="{{ route('transaction.status', $item->id) }}?status=failed" class="btn btn-warning btn-block"><i
                class="fas fa-times"></i> Set Failed</a>
    </div>
    <div class="col-4">
        <a href="{{ route('transaction.status', $item->id) }}?status=PENDING" class="btn btn-info btn-block"><i
                class="fas fa-spinner"></i> Set Sukses</a>
    </div>
</div> --}}
