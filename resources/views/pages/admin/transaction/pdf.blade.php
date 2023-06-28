<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        p{
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <center>
            <h4>Laporan Transaksi</h4>
        </center>
        <br/>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tujuan</th>
                    <th>Pembeli</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Bukti Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td><p>{{ $item->id }}</p></td>
                        <td><p>{{ $item->travel_package->title }}</p></td>
                        <td><p>{{ $item->user->name }}</p></td>
                        <td><p>{{ "Rp " . number_format($item->transaction_total,2,',','.') }}</p></td>
                        <td><p>{{ $item->transaction_status }}</p></td>
                        <td>
                            <img src="{{ public_path('storage/'.$item->image) }}" alt="" style="width: 100px"
                                class="img-thumbnail">
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
</body>
</html>
