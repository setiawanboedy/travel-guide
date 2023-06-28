@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Pemandu {{$item->name}}</h1>
        <a href="{{ route('guide-package.index') }}" class="btn btn-sm btn-danger shadow-sm">
            <i class="fa-sm text-white-50"></i> Batal Edit
        </a>
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
            <form action="{{route('guide-package.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$item->name}}">
                </div>
                <div class="form-group">
                    <label for="location">Alamat</label>
                    <input type="text" class="form-control" name="location" placeholder="Location" value="{{$item->location}}">
                </div>
                <div class="form-group">
                    <label for="days">Hari</label>
                    <input type="number" name="days" placeholder="Days" class="form-control" value="{{$item->days}}">
                </div>
                <div class="form-group">
                    <label for="transportation">Transportasi</label>
                    <input type="text" class="form-control" name="transportation" placeholder="Transportation" value="{{$item->transportation}}">
                </div>
                <div class="form-group">
                    <label for="travel_packages_id">Tujuan Wisata</label>
                    <select name="travel_packages_id" required class="form-control">
                        <option value="{{$item->travel_packages_id}}">Don't Change</option>
                        @foreach ($travel_packages as $travel_package)
                        <option value="{{$travel_package->id}}">
                            {{$travel_package->title}}
                        </option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" class="form-control" name="price" placeholder="Price" value="{{$item->price}}">
                </div>
                {{-- <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control">{{old('about')}}</textarea>
                </div> --}}
                <div class="form-group">
                    <label for="image">Foto</label>
                    <input type="file" name="image" placeholder="Image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection
