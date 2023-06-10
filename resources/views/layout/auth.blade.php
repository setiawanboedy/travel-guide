<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Login | Graindashboard UI Kit</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="auth/img/favicon.ico"> --}}

    <!-- Template -->
    @include('includes.auth.style')
  </head>

  <body class="">

    <main class="main">

      <div class="content">

			<div class="container-fluid pb-5">

				<div class="row justify-content-md-center">
					<div class="card-wrapper col-12 col-md-4 mt-5">
						<div class="brand text-center mb-3">
							<a href="/"><img src="{{url('frontend/assets/img/logo.svg')}}"></a>
						</div>
						@yield('content')
						@include('includes.auth.footer')
					</div>
				</div>

			</div>

      </div>
    </main>

    @include('includes.auth.script')
  </body>
</html>
