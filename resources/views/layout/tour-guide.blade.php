<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Jadoo | @yield('title')</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="manifest" href="{{url('frontend/assets/img/favicons/manifest.json')}}">

    @include('includes.frontend.favicon')

    <meta name="msapplication-TileImage" content="{{url('frontend/assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">

    @include('includes.frontend.style-tour')

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->

    @include('includes.frontend.navbar-alternate')
    <main class="main" id="top">


      @yield('content')


      <!-- ============================================-->
      @include('includes.frontend.footer')
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


  </body>

</html>
