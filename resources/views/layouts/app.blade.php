<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Jadoo | Travel Agency</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    @include('includes.frontend.favicon')
    <link rel="manifest" href="{{url('frontend/assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{url('frontend/assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">


    @include('includes.frontend.style')

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      @include('includes.frontend.navbar')


      @yield('content')


      <!-- ============================================-->
      @include('includes.frontend.footer')
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    @include('includes.frontend.script')


  </body>

</html>
