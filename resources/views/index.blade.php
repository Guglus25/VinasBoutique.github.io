<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <main class="col-md-8 col-lg-8 ms-sm-auto px-md-4">
        <div class="row">
          <div class="col-md-8 col-lg-8">
            <div id="myCarousel" class="carousel slide " data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>

              <div class="carousel-inner">
                <div class="carousel-item carousel-item-banner active">
                  <img src="imagen/C1.jpg" class="d-block w-100 carousel-img" alt="...">
                </div>
                <div class="carousel-item carousel-item-banner">
                  <img src="imagen/C2.jpg" class="d-block w-100 carousel-img" alt="...">
                </div>
                <div class="carousel-item carousel-item-banner">
                  <img src="imagen/C3.jpg" class="d-block w-100 carousel-img" alt="...">
                </div>
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
          <div class="col-md-4 col-lg-4"></div>
        </div>
      </main>

      <div class="sidebar border border-right col-md-4 col-lg-4 p-0 bg-body-tertiary">
        <h1>paises y ciudades</h1>
      </div>
    </div>
  </div>

</body>

</html>