@extends('layouts.app')

@section('content')
<section style="padding-top: 7rem;">
    <div class="bg-holder" style="background-image:url(frontend/assets/img/hero/hero-bg.svg);">
    </div>
    <!--/.bg-holder-->

    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img" src="{{url('frontend/assets/img/hero/hero-img.png')}}" alt="hero-header" /></div>
        <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
          <h4 class="fw-bold text-danger mb-3">Pemandu wisata terbaik</h4>
          <h1 class="hero-title">Perjalanan wisata penuh tantangan</h1>
          <p class="mb-4 fw-medium">Perjalanan tak terbatas dan mencoba untuk melampauinya.<br class="d-none d-xl-block" /></p>
          <div class="text-center text-md-start"> <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="{{route('guide')}}" role="button">Pemandu Wisata</a>
            <div class="w-100 d-block d-md-none"></div><a href="#!" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo"><span class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"> <img src="{{url('frontend/assets/img/hero/play.svg')}}" width="15" alt="paly"/></span></a><span class="fw-medium">Play Video</span>
            <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                  <iframe class="rounded" style="width:100%;max-height:500px;" height="500px" src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section class="pt-5 pt-md-9" id="service">

    <div class="container">
      <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img src="{{url('frontend/assets/img/category/shape.svg')}}" style="max-width: 200px" alt="service" /></div>
      <div class="mb-7 text-center">
        <h5 class="text-secondary">KATEGORI </h5>
        <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Layanan terbaik</h3>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-sm-6 mb-6">
          <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
            <div class="card-body p-xxl-5 p-4"> <img src="{{url('frontend/assets/img/category/icon1.png')}}" width="75" alt="Service" />
              <h4 class="mb-3">Perhitungan Cuaca</h4>
              <p class="mb-0 fw-medium">Memantau cuaca sebelum pergi.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 mb-6">
          <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
            <div class="card-body p-xxl-5 p-4"> <img src="{{url('frontend/assets/img/category/icon3.png')}}" width="75" alt="Service" />
              <h4 class="mb-3">Even Lokal</h4>
              <p class="mb-0 fw-medium">Menawarkan even lokal terbaik.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-6">
          <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
            <div class="card-body p-xxl-5 p-4"> <img src="{{url('frontend/assets/img/category/icon4.png')}}" width="75" alt="Service" />
              <h4 class="mb-3">Bebas</h4>
              <p class="mb-0 fw-medium">Memilih tour perjalnan sesuai keinginanmu.</p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- end of .container-->

  </section>
  <!-- <section> close ============================-->
  <!-- ============================================-->

  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section class="pt-5" id="destination">

    <div class="container">
      <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img src="{{url('frontend/assets/img/dest/shape.svg')}}" alt="destination" /></div>
      <div class="mb-7 text-center">
        <h5 class="text-secondary">Tujuan Terbaik</h5>
        <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Paket Perjalanan</h3>
      </div>
      <div class="row">
        @foreach ($items->take(3) as $item)
        <div class="col-md-4 mb-4">
            <div class="card overflow-hidden shadow"> <img class="card-img-top img-package" src="{{$item->travel_galleries->count() ? Storage::url($item->travel_galleries->first()->image) : ''}}" style="max-height: 510px" alt="{{$item->title}}" />
              <div class="card-body py-4 px-3">
                <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                  <h4 class="text-secondary fw-medium"><a class="link-900 text-decoration-none stretched-link" href="{{route('destination-detail', $item->slug)}}">{{$item->title}}</a></h4><span class="fs-1 fw-medium">{{ 'Rp ' . number_format($item->price, 0, ',', '.') }}</span>
                </div>
                <div class="d-flex align-items-center"> <img src="{{url('frontend/assets/img/dest/navigation.svg')}}" style="margin-right: 14px" width="20" alt="navigation" /><span class="fs-0 fw-medium">{{$item->duration}} Days Trip</span></div>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div><!-- end of .container-->

  </section>
  <!-- <section> close ============================-->
  <!-- ============================================-->

  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section id="booking">

    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="mb-4 text-start">
            <h5 class="text-secondary">Gampang dan Cepat </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Booking perjalananmu dengan 3 langkah mudah</h3>
          </div>
          <div class="d-flex align-items-start mb-5">
            <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="{{url('frontend/assets/img/steps/taxi.svg')}}" width="22" alt="steps" /></div>
            <div class="flex-1">
              <h5 class="text-secondary fw-bold fs-0">Pemandu Wisata</h5>
              <p>Pilih pemandu wisata terbaikmu <br class="d-none d-sm-block"> dengan pengalaman profesional.</p>
            </div>
          </div>
          <div class="d-flex align-items-start mb-5">
            <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="{{url('frontend/assets/img/steps/selection.svg')}}" width="22" alt="steps" /></div>
            <div class="flex-1">
              <h5 class="text-secondary fw-bold fs-0">Tujuan Wisata</h5>
              <p>Pilih tujuan wisata favoritmu. Tidak masalah <br class="d-none d-sm-block"> kemana kamu akan menelusuri dunia.</p>
            </div>
          </div>
          <div class="d-flex align-items-start mb-5">
            <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="{{url('frontend/assets/img/steps/water-sport.svg')}}" width="22" alt="steps" /></div>
            <div class="flex-1">
              <h5 class="text-secondary fw-bold fs-0">Pembayaran</h5>
              <p>Setelah memilih tujuan, lakukan <br class="d-none d-sm-block"> pembayaran dan siap berpetualang.</p>
            </div>
          </div>

        </div>
        <div class="col-lg-6 d-flex justify-content-center align-items-start">
          <div class="card position-relative shadow" style="max-width: 370px;">
            <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;"> <img src="{{url('frontend/assets/img/steps/bg.png')}}" style="max-width:550px;" alt="shape" /></div>
            <div class="card-body p-3"> <img class="mb-4 mt-2 rounded-2 w-100" src="{{url('frontend/assets/img/steps/booking-img.jpg')}}" alt="booking" />
              <div>
                <h5 class="fw-medium">Wisata Benang Kelambu</h5>
                <p class="fs--1 mb-3 fw-medium">14-29 Juni | oleh Elli Zakiyah</p>
                <div class="icon-group mb-4"> <span class="btn icon-item"> <img src="{{url('frontend/assets/img/steps/leaf.svg')}}" alt=""/></span><span class="btn icon-item"> <img src="{{url('frontend/assets/img/steps/map.svg')}}" alt=""/></span><span class="btn icon-item"> <img src="{{url('frontend/assets/img/steps/send.svg')}}" alt=""/></span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center mt-n1"><img class="me-3" src="{{url('frontend/assets/img/steps/building.svg')}}" width="18" alt="building" /><span class="fs--1 fw-medium">2 sedang pergi</span></div>
                  <div class="show-onhover position-relative">
                    <div class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3" style="width: 260px;border-radius:18px;">
                      <div class="card-body py-3">
                        <div class="d-flex">
                          <div style="margin-right: 10px"> <img class="rounded-circle" src="{{url('frontend/assets/img/steps/favorite-placeholder.png')}}" width="50" alt="favorite" /></div>

                        </div>
                      </div>
                    </div>
                    <button class="btn"> <img src="{{url('frontend/assets/img/steps/heart.svg')}}" width="20" alt="step" /></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div><!-- end of .container-->

  </section>
  <!-- <section> close ============================-->
  <!-- ============================================-->


@endsection
