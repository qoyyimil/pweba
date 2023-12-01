<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Carousel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-img-size img {
    height: 100vh;
  }

  .carousel-caption {
    position: absolute;
    left: 0;
    width: 50%;
    top: 10%;
    margin-left: 10%;
    text-align: left;
  }

  .carousel-caption h5 {
    font-size: 5em;
    line-height: 85px;
  }
  </style>
</head>
<body>

  <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner carousel-img-size">
        <div class="carousel-item active" >
          <img class="d-block w-100 img-fluid" src="foto1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>UNDERSTAND THE WHOLE OF LIFE</h5>
            <p>You must understand the whole of life, not just one part of it. That is why you must read, that is why you must look at the skies, why you must sing, dance and write poems, and suffer, and understand, for all that is life.</p>
            <p1>- Krishnamurti, Think on These Things -</p1>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 img-fluid" src="foto2.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>WHEN ONE LOSES RELATIONSHIP WITH NATURE</h5>
            <p>When one loses the deep intimate relationship with nature, then temples, mosques and churches become important.</p>
            <p1>- Krishnamurti, Beginnings of Learning -</p1>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 img-fluid" src="foto3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>REVOLUTION BEGINS WITH YOU AND ME</h5>
            <p>All great things start on a small scale, all great movements begin with individuals; and if we wait for collective action, such action, if it takes place at all, is destructive and conducive to further misery. So revolution must begin with you and me.</p>
            <p1>- Krishnamurti in Madras 1950, Talk 3 -</p1>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

</body>
</html>
