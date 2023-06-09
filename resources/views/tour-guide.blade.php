@extends('layout.tour-guide')

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
     <div class="row">
        <div class="col-md-3 ftco-animate">
           <div class="project-wrap">
              <a href="{{route('guide-detail')}}" class="img" style="background-image: url({{url('frontend/assets/img-tour/destination-1.jpg')}});">
                 <span class="price">Rp 500rb/person</span>
             </a>
             <div class="text p-4">
                 <span class="days">8 Days Tour</span>
                 <h3><a class="text-decoration-none" href="#">Budi Setiawan</a></h3>
                 <p class="location"><span class="fa fa-map-marker"></span> Praya, Lombok Tengah</p>
                 <ul>
                    <li><span class="flaticon-mountains"></span>Near Mountain</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3 ftco-animate">
       <div class="project-wrap">
          <a href="#" class="img" style="background-image: url({{url('frontend/assets/img-tour/destination-2.jpg')}});">
             <span class="price">Rp 500rb/person</span>
         </a>
         <div class="text p-4">
            <span class="days">8 Days Tour</span>
            <h3><a class="text-decoration-none" href="#">Budi Setiawan</a></h3>
            <p class="location"><span class="fa fa-map-marker"></span> Praya, Lombok Tengah</p>
            <ul>
               <li><span class="flaticon-mountains"></span>Near Mountain</li>
           </ul>
       </div>
    </div>
 </div>
 <div class="col-md-3 ftco-animate">
   <div class="project-wrap">
      <a href="#" class="img" style="background-image: url({{url('frontend/assets/img-tour/destination-3.jpg')}});">
         <span class="price">$550/person</span>
     </a>
     <div class="text p-4">
        <span class="days">8 Days Tour</span>
        <h3><a class="text-decoration-none" href="#">Budi Setiawan</a></h3>
        <p class="location"><span class="fa fa-map-marker"></span> Praya, Lombok Tengah</p>
        <ul>
           <li><span class="flaticon-mountains"></span>Near Mountain</li>
       </ul>
   </div>
 </div>
 </div>

 <div class="col-md-3 ftco-animate">
   <div class="project-wrap">
      <a href="#" class="img" style="background-image: url({{url('frontend/assets/img-tour/destination-4.jpg')}});">
         <span class="price">$550/person</span>
     </a>
     <div class="text p-4">
        <span class="days">8 Days Tour</span>
        <h3><a class="text-decoration-none" href="#">Budi Setiawan</a></h3>
        <p class="location"><span class="fa fa-map-marker"></span> Praya, Lombok Tengah</p>
        <ul>
           <li><span class="flaticon-mountains"></span>Near Mountain</li>
       </ul>
   </div>
 </div>
 </div>
 <div class="col-md-3 ftco-animate">
   <div class="project-wrap">
      <a href="#" class="img" style="background-image: url({{url('frontend/assets/img-tour/destination-5.jpg')}});">
         <span class="price">$550/person</span>
     </a>
     <div class="text p-4">
        <span class="days">8 Days Tour</span>
        <h3><a class="text-decoration-none" href="#">Budi Setiawan</a></h3>
        <p class="location"><span class="fa fa-map-marker"></span> Praya, Lombok Tengah</p>
        <ul>
           <li><span class="flaticon-mountains"></span>Near Mountain</li>
       </ul>
   </div>
 </div>
 </div>
 <div class="col-md-3 ftco-animate">
   <div class="project-wrap">
      <a href="#" class="img" style="background-image: url({{url('frontend/assets/img-tour/destination-6.jpg')}});">
         <span class="price">$550/person</span>
     </a>
     <div class="text p-4">
        <span class="days">8 Days Tour</span>
        <h3><a class="text-decoration-none" href="#">Budi Setiawan</a></h3>
        <p class="location"><span class="fa fa-map-marker"></span> Praya, Lombok Tengah</p>
        <ul>
           <li><span class="flaticon-mountains"></span>Near Mountain</li>
       </ul>
   </div>
 </div>
 </div>
 <div class="col-md-3 ftco-animate">
   <div class="project-wrap">
      <a href="#" class="img" style="background-image: url({{url('frontend/assets/img-tour/destination-7.jpg')}});">
         <span class="price">$550/person</span>
     </a>
     <div class="text p-4">
        <span class="days">8 Days Tour</span>
        <h3><a class="text-decoration-none" href="#">Budi Setiawan</a></h3>
        <p class="location"><span class="fa fa-map-marker"></span> Praya, Lombok Tengah</p>
        <ul>
           <li><span class="flaticon-mountains"></span>Near Mountain</li>
       </ul>
   </div>
 </div>
 </div>
 <div class="col-md-3 ftco-animate">
   <div class="project-wrap">
      <a href="#" class="img" style="background-image: url({{url('frontend/assets/img-tour/destination-8.jpg')}});">
         <span class="price">$550/person</span>
     </a>
     <div class="text p-4">
        <span class="days">8 Days Tour</span>
        <h3><a class="text-decoration-none" href="#">Budi Setiawan</a></h3>
        <p class="location"><span class="fa fa-map-marker"></span> Praya, Lombok Tengah</p>
        <ul>
           <li><span class="flaticon-mountains"></span>Near Mountain</li>
       </ul>
   </div>
 </div>
 </div>
 {{-- <div class="col-md-3 ftco-animate">
   <div class="project-wrap">
      <a href="#" class="img" style="background-image: url({{url('frontend/assets/img-tour/destination-9.jpg')}});">
         <span class="price">$550/person</span>
     </a>
     <div class="text p-4">
        <span class="days">8 Days Tour</span>
        <h3><a class="text-decoration-none" href="#">Budi Setiawan</a></h3>
        <p class="location"><span class="fa fa-map-marker"></span> Praya, Lombok Tengah</p>
        <ul>
           <li><span class="flaticon-mountains"></span>Near Mountain</li>
       </ul>
   </div>
 </div> --}}
 </div>
 </div>
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
 </div>
 </section>

@endsection
