<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Movie Trailers</title>

  </head>

  <body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light border border-primary rounded-pill mt-3 ml-3 mr-3">

      <div class="container">

        <a class="navbar-brand text-primary" href="{{ url('/') }}"><strong>LOL TRAILERS</strong></a>

          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

          <ul class="nav justify-content-left">
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('/trailers') }}">Movies Trailers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
              </li>
          </ul>

          </div>

            @if (Route::has('login'))
                <div class="float-right">
                    @auth
                        <a class="nav-link text-primary" href="{{ url('/movieAdmin') }}">Administrator</a>
                    @else
                        <a class="nav-link text-primary" href="{{ route('login') }}">Administrator</a>
                    @endauth
                </div>
            @endif
  
      </div>

    </nav>

    <div class="container">
      @yield('seccion')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>