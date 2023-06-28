@extends('layout.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>

        </div>

        <div class="d-flex pb-2 mr-2">
            <div class="mr-auto py-2">
                <form action="{{route('pdf-trans')}}" method="post">
                    @csrf
                    <input type="hidden" id="dateFrom" name="filterFrom" value="{{$filterFrom}}"/>
                    <input type="hidden" id="dateTo" name="filterTo" value="{{$filterTo}}"/>
                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Unduh laporan</button>
                </form>

            </div>
            <form action="{{route('filter-trans')}}" method="post">
                @csrf
                <div class="row">
                    <div class="py-2">
                        <p class="text-center">Dari</p>
                    </div>

                    <div class="col-sm">
                        <input type="text" class="datepickerFrom form-control" id="filterFrom" name="filterFrom" value="{{$filterFrom}}" placeholder="Filter by Date" />


                    </div>
                    <div class="py-2">
                        <p class="text-center">sampai</p>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="datepickerTo form-control" id="filterTo" name="filterTo" value="{{$filterTo}}" placeholder="Filter by Date" />

                    </div>
                    <div class="col-sm-0">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="card shadow">
            <div class="card card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tujuan</th>
                            <th>Pembeli</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Bukti Pembayaran</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->travel_package->title }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ "Rp " . number_format($item->transaction_total,2,',','.') }}</td>
                                <td>{{ $item->transaction_status }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->image) }}" alt="" style="width: 100px"
                                        class="img-thumbnail">
                                </td>
                                <td>
                                    <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('transaction.destroy', $item->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
