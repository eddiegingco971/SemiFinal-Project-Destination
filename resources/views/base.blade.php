<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT-Destination</title>
  
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>


</head>
<body>

<!--Navigation Bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Destination</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= url('/') ?>">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= url('/destinations') ?>">Destination</a>
          </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container main-container">
    @yield('content')
</div>

</body>

<footer class="bg-primary text-white">
  Copyright &copy; 2021. Destination, IPT. <br>
  All rights reversed.
</footer>

</html>