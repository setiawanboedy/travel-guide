@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tour Guide Package</h1>
        <a href="{{route('guide-package.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add Guide Package</a>
    </div>

    <!-- Content Row -->
    <div class="card shadow">
        <div class="card card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Hari</th>
                        <th>Tujuan Wisata</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <img src="{{Storage::url($item->image)}}" alt="" style="width: 150px" class="img-thumbnail">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ $item->days }}</td>
                            <td>{{ $item->travel_package->title }}</td>
                            <td>{{"Rp " . number_format($item->price,2,',','.') }}</td>
                            <td>
                                <a href="{{route('guide-package.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{route('guide-package.destroy', $item->id)}}" method="post" class="d-inline">
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
