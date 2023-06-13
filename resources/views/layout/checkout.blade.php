<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @include('includes.frontend.favicon')
  <title>Jadoo | @yield('title')</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  @include('includes.frontend.style-tour')
</head>

<body>
  <!-- navbar -->
  @include('includes.frontend.navbar-checkout')

  <main>
    @yield('content')
  </main>

  @include('includes.frontend.footer')

  @include('includes.frontend.script')

  <script type="text/javascript">
      $(".datepicker").datepicker({
    uiLibrary: "bootstrap4",
    icons: {
      rightIcon: '<img src="{{url('frontend/assets/img/dest/ic_doe.png')}}"/>',
    },
  });

  $("input[type='radio']").click(function(){
            var sim =  $("input[type='radio']:checked").val();
            $(".myratings").text(sim);

         });
  </script>
</body>

</html>
