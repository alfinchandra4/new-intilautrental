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
        <span class="text">Navbar</span>
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
          <li class="nav-item">
            <a class="nav-link pl-2" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-2" href="about.php">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle pl-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <h2 class="main-navigation">PRODUK ALAT KONSTRUKSI DAN SIPIL</h2>
        <div class="font-weight-lighter child-navigation"><a href="index.php">Home</a> / Produk Alat Konstruksi Dan Sipil</a></div>
      </div>
    </div>

    <!-- Content -->
    <div class="container text-center mt-4 aboutus-side">
      <span class="font-weight-bold h2 products">Alat Konstruksi</span>
      <div class="mt-4">
        Kami Logam Abadi Multi Makmur - LAMM menyediakan jasa jual scaffolding / steger berkualitas dengan harga yang murah. Model scaffolding yang kami sediakan yaitu scaffolding frame, scaffolding pipa, scaffolding ringlock / kwikstage. Untuk scaffolding frame kami mempunyai spesifikasi tebal pipa 1,8mm dengan finishing cat anti karat. Lalu scaffolding pipa mempunyai tebal 2,5mm & 3,2mm standar jepang maupun british, serta scaffolding ringlock / kwikstge dengan tebal 3,2mm dengan bahan galvanis. Menerima pengiriman untuk daerah JABODETABEK dan sekitarnya. Langsung saja untuk menghubungi kami untuk pemesanan, tim kami siap untuk melayani anda.
      </div>
      <div class="row">
        <?php  for($i = 0 ; $i < 7 ; $i++) {
          ?>
        <div class="col-md-4 col-sm-12 mb-2 mt-2">
          <div class="card cardscaffolding border-0">
            <a class="example-image-link card-img-top" href="asset/image/alatkonstruksi/baby-roller.jpg" data-lightbox="scaffolding">
              <img src="asset/image/alatkonstruksi/baby-roller.jpg" class="card-img-top">
            </a>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <!-- End Content -->

        <!-- Content -->
        <div class="container text-center mt-4 scaffolding-side">
      <span class="font-weight-bold h2 products text-uppercase">PRICE LIST</span>
      <div class="mt-4">
        <table class="table table-striped table-hover">
          <thead class="bg-dark text-light">
            <tr>
              <th>#</th>
              <th>Barang</th>
              <th>Satuan</th>
              <th>Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Main Frame 190</td>
              <td>pcs</td>
              <td>40,000</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Main Frame 190</td>
              <td>pcs</td>
              <td>40,000</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Main Frame 190</td>
              <td>pcs</td>
              <td>40,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <?php include 'static/footer.php'; ?>
    <?php include 'static/script.php'; ?>

  </body>
</html>
