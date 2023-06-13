@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Guide</h1>

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
            <form action="{{route('guide-package.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="Location" value="{{old('location')}}">
                </div>
                <div class="form-group">
                    <label for="days">Days</label>
                    <input type="number" name="days" placeholder="Days" class="form-control" value="{{old('days')}}">
                </div>
                <div class="form-group">
                    <label for="transportation">Transportation</label>
                    <input type="text" class="form-control" name="transportation" placeholder="Transportation" value="{{old('transportation')}}">
                </div>
                <div class="form-group">
                    <label for="travel_packages_id">Travel Destination</label>
                    <select name="travel_packages_id" required class="form-control">
                        <option value="">Select Travel Destination</option>
                        @foreach ($travel_packages as $travel_package)
                        <option value="{{$travel_package->id}}">
                            {{$travel_package->title}}
                        </option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Price" value="{{old('price')}}">
                </div>
                {{-- <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control">{{old('about')}}</textarea>
                </div> --}}
                <div class="form-group">
                    <label for="image">Image Foto</label>
                    <input type="file" name="image" placeholder="Image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection
