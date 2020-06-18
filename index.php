<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <?php include 'static/header.php'; ?>

    <title>Inti Laut Rental</title>
  </head>

  <body>
    <div class="line-head"></div>
    <nav class="navbar navbar-expand-lg navbar-light container text-uppercase">
      <a class="navbar-brand" href="#">
        <span class="text font-weight-lighter">INTI LAUT RENTAL</span>
        <span class="icon"><img src="asset/image/intilaut.png" width="100" height="100" class="d-inline-block align-top" alt="" loading="lazy"/></span>
      </a>
      <button class="navbar-toggler" type="button" 
              data-toggle="collapse" 
              data-target="#navbarNav" 
              aria-controls="navbarNav" 
              aria-expanded="false" 
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link pl-2" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-2" href="about.php">About US</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle pl-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="alat.php">Alat Konstruksi</a>
              <a class="dropdown-item" href="scaffolding.php">Scaffolding</a>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link pl-2" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="path">
      <div class="container content">
        <h2 class="main-navigation">HOME</h2>
        <div class="font-weight-lighter child-navigation">Home</div>
      </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Selamat datang di Inti Laut Rental</h1>
        <p class="lead">
          Perusahaan penyedia alat berat siap pakai dengan harga terjangkau
        </p>
      </div>
    </div>
    <div class="container text-center">
      <div class="text mt-4">
        <div class="row">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit iure corporis harum, quam ullam aspernatur voluptate excepturi error, amet aliquid sequi perspiciatis iusto dignissimos autem consequatur veniam? Delectus, quisquam aliquid!
        </div>
      </div>
    </div>
    <div class="text-center service-side mt-5">
      <div class="container">
        <span class="font-weight-bold h2 home-service text-uppercase">Our Services</span>
        <div class="text mt-4">
          <div class="home-service-header mb-3">
            Kami menyediakan jasa rental alat berat dengan harga yang kompetitif namun berkualitas 
          </div>
          <div class="row">
            <div class="offset-md-2 col-md-4">
              <div class="card shadow card-our-service p-3 mb-5 bg-white rounded">
                <img src="asset/image/construction.svg" class="card-img-top img-fluid pt-5 pl-5 pr-5">
                <div class="card-body">
                  <p class="card-text">
                    <p><span class="font-weight-bold h4">Rental Alat Konstruksi</span></p>
                    Baby Roller, Moln Aduk, Jack Hammer, Vibrator, Cutting, Stamper, Combind Roller, Tendem Roller, Pompa Air, Takel, Scaffolding dll
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card shadow card-our-service p-3 mb-5 bg-white rounded">
                <img src="asset/image/hammer.svg" class="card-img-top img-fluid pt-5 pl-5 pr-5">
                <div class="card-body">
                  <p class="card-text">
                    <p><span class="font-weight-bold h4">Menerima servis alat</span></p>
                    Baby Roller, Moln Aduk, Jack Hammer, Vibrator, Cutting, Stamper dll
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center mt-4 product-side">
      <span class="font-weight-bold h2 products text-uppercase">Pesanan terbanyak</span>
      <div class="text mt-4 col-md-8 offset-md-2">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" >
            <div class="carousel-item active">
              <img src="asset/image/advantages/babyroller1.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="asset/image/advantages/jackhammer.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="asset/image/advantages/genset.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="get-our-service-side mt-4">
      <div class="container">
        <span class="font-weight-bold h2 get-our-service">Get Our Service</span>
        <div class="row mt-2">
          <div class="col-md-10 col-sm-12">
            <p>Kami senantiasa terus meningkatkan kualitas dalam produk dan pelayanan demi terjaganya kepuasan konsumen. <br/>Hubungi kami, karena kami mempunyai penawaran terbaik untuk Anda </p>
          </div>
          <div class="col-md-2 col-sm-12 text-center" style="text-decoration: none;">
            <p><a href="#" class="font-weight-bold btn-contact-us btn-block" style="text-decoration: none;">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>

    <?php include 'static/footer.php'; ?>
    <?php include 'static/script.php'; ?>

    <script>
      $('.carousel').carousel({
        interval: 3000
      });
    </script>
  </body>
</html>
