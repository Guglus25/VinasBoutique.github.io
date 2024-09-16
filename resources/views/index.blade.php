<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- 
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" /> -->

  <link rel="stylesheet" href="{{ URL::asset('build/assets/css/styles.css') }} ">
  <link rel="stylesheet" href="{{ URL::asset('build/assets/css/vinas.css') }} ">
</head>

<body class="">
  <!-- <div class="container-fluid">
    <div class="row">
      <main class="col-md-8 col-lg-8 ms-sm-auto px-md-4">
        <div class="row">
          <div class="col-md-8 col-lg-8">
            
          </div>
          <div class="col-md-4 col-lg-4"></div>
        </div>
      </main>

      <div class="sidebar border border-right col-md-4 col-lg-4 p-0 bg-body-tertiary position-relative">
        <h1>paises y ciudades</h1>
        <a href="{{ route('login') }}"
          class=" position-absolute bottom-0 end-0 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
          Log in
        </a>
      </div>
    </div>
  </div> -->

  <div id="layoutSidenav">

    <div id="layoutSidenav_contentindex">
      <main>
        <div class="container-fluid px-4 my-4">
          <div id="myCarousel" class="carousel carousel-dark slide " data-bs-ride="carousel">
            <div class="carousel-indicators">



              @foreach ($images as $image)
          @if ($loop->index == 0)
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{$loop->index}}" class="active"
        aria-current="true" aria-label="Slide {{$loop->index}}"></button>
      @else
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{$loop->index}}" aria-current="true"
      aria-label="Slide {{$loop->index}}"></button>
    @endif

        @endforeach

              <!-- <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
            </div>

            <div class="carousel-inner">
              @foreach ($images as $image)
          @if ($loop->index == 0)
        <div class="carousel-item carousel-item-banner active">
        <img src="{{$image->FilePath}}" class="d-block w-100 carousel-img" alt="...">
        </div>
      @else
      <div class="carousel-item carousel-item-banner ">
      <img src="{{$image->FilePath}}" class="d-block w-100 carousel-img" alt="...">
      </div>
    @endif
        @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </main>
    </div>
    <div id="layoutSidenav_nav1">
      <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu px-4">
          @foreach ($paises as $pais)
        <p>
        <h4>{{$pais->Name}}</h4>
        <ul class="list-unstyled">
          @foreach ($pais->location as $locati )
          <li>{{$locati->Name}}</li>
          @endforeach
       
        </ul>
        </p>

      @endforeach
      
        </div>

      </nav>
      <!-- <a href="{{ route('login') }}" style="font-size: 30px;"
        class=" position-absolute bottom-0 end-0 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
        <i class="fa-regular fa-circle-user"></i>
      </a> -->
    </div>
  </div>


  <!-- <div class="parent">
    <div class="div1">hola mundo  </div>
    <div class="div2">hola </div>
  </div> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <script src="{{ URL::asset('build/assets/js/dashboard.js') }} "> </script>
</body>

</html>