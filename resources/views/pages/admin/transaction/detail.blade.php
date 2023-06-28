@extends('layout.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Transaksi {{$item->user->name}}</h1>

        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>

                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{$item->id}}</td>
                    </tr>
                    <tr>
                        <th>Paket Perjalanan</th>
                        <td>{{$item->travel_package->title}}</td>
                    </tr>
                    <tr>
                        <th>Pembeli</th>
                        <td>{{$item->user->name}}</td>
                    </tr>
                    <tr>
                        <th>Total Transaksi</th>
                        <td>Rp {{$item->transaction_total}}k</td>
                    </tr>
                    <tr>
                        <th>Status Transaksi</th>
                        <td>{{$item->transaction_status}}</td>
                    </tr>
                    <tr>
                        <th>Pembayaran</th>
                        <td>
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Kebangsaan</th>

                                </tr>
                                @foreach ($item->transaction_details as $detail)
                                    <tr>
                                        <td>{{$detail->id}}</td>
                                        <td>{{$detail->username}}</td>
                                        <td>{{$detail->nationality}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
