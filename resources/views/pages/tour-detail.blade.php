@extends('layout.tour-guide')
@section('title', 'Tour Guide Detail')
@section('content')

    <section class="ftco-section">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0 bg-light">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('guide') }}">Pemandu</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $item->slug }}</li>
                        </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="https://ui-avatars.com/api/?name={{ $item->name }}"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ $item->name }}</h5>
                            <p class="text-muted mb-1">Senior Tour Guide</p>
                            <p class="text-muted mb-4">{{ $item->location }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-primary">Follow</button>
                                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <a type="button" href="{{ route('hire', $item->id) }}" class="btn btn-primary"
                            style="color: white">Sewa Saya</a>

                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fa fa-whatsapp fa-lg text-success"></i>
                                    <p class="mb-0">+6281946273</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fa fa-twitter fa-lg" style="color: #55acee;"></i>
                                    <p class="mb-0">@jadoo</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fa fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                    <p class="mb-0">Jadoo</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fa fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                    <p class="mb-0">Jadoo</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nama Lengkap</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $item->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tujuan Wisata</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $item->travel_package->title }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">No. Hp</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">(098) 765-4321</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Alamat</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $item->location }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5 class="py-3 mt-2">Rekomendasi Pemandu</h5>
                            @forelse ($recommendations as $guide)
                                <div class="card">
                                    <div class="card-body ml-3">
                                        <div class="container profile-page mt-3">
                                            <div class="row">
                                                <div class="profile-header">
                                                    <div class="row">
                                                        <div class="ml-4">
                                                            <div class="profile-image float-md-left"> <img
                                                                    style="max-width: 60px"
                                                                    src="{{ Storage::url($guide->image) }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-md-10 col-5">
                                                            <h6 class="m-t-0 m-b-0">{{ $guide->name }}</h6>
                                                            <span class="job_post">Profesional Tour Guide</span>
                                                            <p>Tujuan: {{ $guide->travel_package->title }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>Tidak ada rekomendasi</p>
                            @endforelse

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
