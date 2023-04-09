<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <ul class="nav nav-underline">
            <li class="nav-item">
              <a class="nav-link {{ ($title === 'Home')?'active' : '' }}" aria-current="page" href="Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === 'OneToOne')?'active' : '' }}" href="121">One-to-one</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === 'OneToMany')?'active' : '' }}" href="12many">One-to-Many</a>
            </li>
          </ul>
      </nav>
    <div>
        @yield('test')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>