<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top py-4 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand" href="{{route('home')}}"><img src="{{url('frontend/assets/img/logo.svg')}}" height="34" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
      <div class="collapse navbar-collapse border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
          <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="{{route("home")}}#service">Service</a></li>
          <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="{{route("home")}}#destination">Destination</a></li>
          <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="{{route("home")}}#booking">Booking</a></li>
          <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="{{route("home")}}#testimonial">Testimonial</a></li>
          @guest
          <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" type="submit" role="button" onclick="event.preventDefault(); location.href='{{url('login')}}'">Login</a></li>
          <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" type="submit" role="button" onclick="event.preventDefault(); location.href='{{url('login')}}'">Sign Up</a></li>
          @endguest

          @auth
          <form method="POST" action="{{url('logout')}}">
              @csrf
              <li class="nav-item px-3 px-xl-4"><button class="btn btn-outline-dark order-1 order-lg-0 fw-medium" role="button" type="submit">Logout</button></li>
          </form>
          @endauth
        </ul>
      </div>
    </div>
</nav>
