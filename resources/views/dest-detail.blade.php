@extends('layout.tour-guide')
@section('title','Benang kelambu')
@section('content')
<section class="ftco-section section-detail-content ">
    <div class="container py-5">
        <div class="row">
            <div class="col">
              <nav class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0 bg-light">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Destination Detail</li>
                </ol>
            </div>
          </div>
        <div class="row">
            <div class="col-lg-8 pl-lg-0">
                <div class="card card-detail">
                    <h1>Nusa Peninda</h1>
                    <p>Republic of Indonesia</p>
                    <div class="gallery">
                        <div class="xzoom-container">
                            <img src="{{url('frontend/assets/img/dest/pic_featured.jpg')}}" alt="main image" class="xzoom"
                                id="xzoom-default" xoriginal="{{url('frontend/imag/dest/pic_featured.jpg')}}" />
                        </div>
                    </div>
                    <h2>Tentang Wisata</h2>
                    <p><span class="fa fa-map-marker mr-2"></span>Lombok utara</p>
                    <p>
                        Nusa Penida is an island southeast of Indonesia’s island Bali
                        and a district of Klungkung Regency that includes the
                        neighbouring small island of Nusa Lembongan. The Badung Strait
                        separates the island and Bali. The interior of Nusa Penida is
                        hilly with a maximum altitude of 524 metres. It is drier than
                        the nearby island of Bali.
                    </p>
                    <p>
                        Bali and a district of Klungkung Regency that includes the
                        neighbouring small island of Nusa Lembongan. The Badung Strait
                        separates the island and Bali.
                    </p>
                    <div class="features row">
                        <div class="col-md-4">
                            <img src="{{url('frontend/assets/img/dest/ic_event.png')}}" alt="event" class="features-image" />
                            <div class="description">
                                <h3>Featured Event</h3>
                                <p>Tari Kecak</p>
                            </div>
                        </div>
                        <div class="col-md-4 border-start">
                            <img src="{{url('frontend/assets/img/dest/ic_bahasa.png')}}" alt="event" class="features-image" />
                            <div class="description">
                                <h3>Language</h3>
                                <p>Bahasa Indonesia</p>
                            </div>
                        </div>
                        <div class="col-md-4 border-start">
                            <img src="{{url('frontend/assets/img/dest/ic_foods.png')}}" alt="event" class="features-image" />
                            <div class="description">
                                <h3>Foods</h3>
                                <p>Local Foods</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card card-detail card-right">
                    <h2>Trip Informations</h2>
                    <table class="trip-informations">
                        <tr>
                            <th width="50%">Date of Departure</th>
                            <td width="50%" class="text-right">22 Aug, 2019</td>
                        </tr>
                        <tr>
                            <th width="50%">Duration</th>
                            <td width="50%" class="text-right">4D 3N</td>
                        </tr>
                        <tr>
                            <th width="50%">Type</th>
                            <td width="50%" class="text-right">Open Trip</td>
                        </tr>
                        <tr>
                            <th width="50%">Price</th>
                            <td width="50%" class="text-right">$80,00 / person</td>
                        </tr>
                    </table>
                </div>
                <div class="join-container">
                    <a href="{{route('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
                        Join Now
                    </a>
                </div>

                <div class="row mt-5">
                    <div class="col">
                      <div class="card">
                        <h5 class="px-5 py-3 mt-2">Tour Guide Recommendation</h5>

                        <hr class="sidebar-divider d-none d-md-block">
                        <div class="card-body ml-3">
                            <div class="row">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="ml-2 rounded-circle img-fluid" style="width: 50px; height:50px">
                                <div class="col ml-4">
                                    <p class="fw-bold" style="color: #55acee">Sinaga</p>
                                    <p style="margin-top: -10px; color:#333333">10/06/2023</p>
                                </div>
                                <div class="justify-content-end">
                                    <p>5.0 <span class="fa fa-star mr-3 checked" style="color:orange"></span></p>
                                </div>
                            </div>
                          <p>Keren sekali</p>
                        </div>
                                   <!-- Divider -->
                        <hr class="sidebar-divider d-none d-md-block">

                        <div class="card-body ml-3">
                            <div class="row">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="ml-2 rounded-circle img-fluid" style="width: 50px; height:50px">
                                <div class="col ml-4">
                                    <p class="fw-bold" style="color: #55acee">Sinaga</p>
                                    <p style="margin-top: -10px; color:#333333">10/06/2023</p>
                                </div>
                                <div class="justify-content-end">
                                    <p>5.0 <span class="fa fa-star mr-3 checked" style="color:orange"></span></p>
                                </div>
                            </div>
                          <p>Keren sekali</p>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block">

                        <div class="card-body ml-3">
                            <div class="row">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="ml-2 rounded-circle img-fluid" style="width: 50px; height:50px">
                                <div class="col ml-4">
                                    <p class="fw-bold" style="color: #55acee">Sinaga</p>
                                    <p style="margin-top: -10px; color:#333333">10/06/2023</p>
                                </div>
                                <div class="justify-content-end">
                                    <p>5.0 <span class="fa fa-star mr-3 checked" style="color:orange"></span></p>
                                </div>
                            </div>
                          <p>Keren sekali</p>
                        </div>
                      </div>
                    </div>

                  </div>
        </div>
    </div>
</section>

@endsection
