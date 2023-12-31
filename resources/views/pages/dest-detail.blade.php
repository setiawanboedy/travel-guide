@extends('layout.tour-guide')
@section('title', 'Benang kelambu')
@section('content')
    <section class="ftco-section section-detail-content ">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0 bg-light">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $item->slug }}</li>
                        </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-detail">
                        <h1>{{ $item->title }}</h1>
                        <p>{{ $item->location }}</p>
                        @if ($item->travel_galleries->count())
                            <div class="gallery">
                                <div class="portrait-crop">
                                    <img src="{{ Storage::url($item->travel_galleries->first()->image) }}"
                                        alt="main image" />
                                </div>
                            </div>
                        @endif
                        <h2>Tentang Wisata</h2>
                        <p><span class="fa fa-map-marker mr-2"></span>Lombok utara</p>
                        <p>
                            {!! $item->about !!}
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <img src="{{ url('frontend/assets/img/dest/ic_event.png') }}" alt="event"
                                    class="features-image" />
                                <div class="description">
                                    <h3>Even Lokal</h3>
                                    <p>{{ $item->featured_event }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-start">
                                <img src="{{ url('frontend/assets/img/dest/ic_bahasa.png') }}" alt="event"
                                    class="features-image" />
                                <div class="description">
                                    <h3>Bahasa</h3>
                                    <p>{{ $item->language }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-start">
                                <img src="{{ url('frontend/assets/img/dest/ic_foods.png') }}" alt="event"
                                    class="features-image" />
                                <div class="description">
                                    <h3>Makanan</h3>
                                    <p>{{ $item->foods }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-detail card-right">
                        <h2>Informasi Perjalanan</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Tanggal Berangkat</th>
                                <td width="50%" class="text-right">
                                    {{ \Carbon\Carbon::create($item->date_of_departure)->format('F n, Y') }}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Jumlah Hari</th>
                                <td width="50%" class="text-right">{{ $item->duration }} day/s</td>
                            </tr>
                            <tr>
                                <th width="50%">Jenis Perjalanan</th>
                                <td width="50%" class="text-right">{{ $item->type }}</td>
                            </tr>
                            <tr>
                                <th width="50%">Harga</th>
                                <td width="50%" class="text-right">Rp {{ $item->price }}k / person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        @auth
                            <form action="{{ route('checkout-process', $item->id) }}" method="post">
                                @csrf
                                <div class="d-grid">
                                    <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                        Ikut Sekarang
                                    </button>
                                </div>
                            </form>
                        @endauth
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Masuk atau Daftar untuk ikut
                            </a>
                        @endguest
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <div class="card">

                                <h5 class="px-5 py-3 mt-2">Pemandu Profesional</h5>

                                @forelse ($guides as $guide)
                                <div class="container profile-page mt-3">
                                    <div class="row">
                                        <div class="profile-header">
                                            <div class="row">
                                                <div class="ml-4">
                                                    <div class="profile-image float-md-left"> <img style="max-width: 60px"
                                                            src="{{Storage::url($guide->image)}}"
                                                            alt=""> </div>
                                                </div>
                                                <div class="col-lg-9 col-md-10 col-5">
                                                    <h6 class="m-t-0 m-b-0">{{$guide->name}}</h6>
                                                    <span class="job_post">Profesional Tour Guide</span>
                                                    <p>Tujuan: {{$guide->travel_package->title}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @empty
                                <p>Tidak ada data</p>
                                @endforelse
                            </div>

                        </div>
                    </div>
                </div>
    </section>

@endsection
