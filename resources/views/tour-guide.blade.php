@extends('layout.tour-guide')
@section('title', 'Tour Guide')
@section('content')
    <section class="ftco-section">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0 bg-light">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tour Guide</li>
                        </ol>
                </div>
            </div>



            @foreach ($items as $item)
                @if ($loop->first)
                    <!-- Design for the first iteration -->
                    <div class="row">
                        <div class="col-md-3 ftco-animate">
                            <div class="project-wrap">
                                <a href="{{ route('guide-detail') }}" class="img"
                                    style="background-image: url({{ Storage::url($item->image) }});">
                                    <span class="price">Rp {{ $item->price }}k/person</span>
                                </a>
                                <div class="text p-4">
                                    <span class="days">{{ $item->days }} Days Tour</span>
                                    <h3><a class="text-decoration-none" href="#">{{ $item->name }}</a></h3>
                                    <p class="location"><span class="fa fa-map-marker"></span> {{ $item->location }}</p>
                                    <ul>
                                        <li><span class="flaticon-vehicle"></span>{{ $item->transportation }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Design for the rest of the iterations -->
                        <div class="col-md-3 ftco-animate">
                            <div class="project-wrap">
                                <a href="#" class="img"
                                    style="background-image: url({{ url('frontend/assets/img-tour/destination-2.jpg') }});">
                                    <span class="price">Rp {{ $item->price }}k/person</span>
                                </a>
                                <div class="text p-4">
                                    <span class="days">{{ $item->days }} Days Tour</span>
                                    <h3><a class="text-decoration-none" href="#">{{ $item->name }}</a></h3>
                                    <p class="location"><span class="fa fa-map-marker"></span> {{ $item->location }}</p>
                                    <ul>
                                        <li><span class="flaticon-vehicle"></span>{{ $item->transportation }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                @endif
            @endforeach



        </div>
        </div>

        @if ($items->count() > 9)
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endif

        </div>
    </section>
@endsection
