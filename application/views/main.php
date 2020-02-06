<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FROZEN</title>
    <link rel="icon" href="src/frozen.jpg">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='jquery/jquery-3.4.1.min.js'></script>
    <script src='bootstrap/js/bootstrap.min.js'></script>

    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>
<body>
  <div class="rect-curv"></div>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">
          <!-- <img src="src/frozen.jpg" style="height: 30px;"> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link wht-blk" href="temp.html" >Ice Cream Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link wht-blk" href="#">Store</a>
            </li>
            <li class="nav-item">
              <a class="nav-link wht-blk" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link wht-blk" href="#">Hashan</a>
            </li>
          </ul>
        </div>
    </nav>
    <!-- end of navigation -->
    <!-- mid content -->
    
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="src/frozen.jpg" style="height: 120px;margin-top: 60px;">
            <p class="cov-title">FROZEN</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum praesentium in 
            nobis optio labore repellendus dicta voluptatum corrupti aliquid
            itaque magni animi, temporibus a consequuntur doloribus delectus sunt! Voluptate, ratione!
            </p>
            <br>
            <div class="btn-row">
              <a href="#" class="btn">LogIn<span class="btn-span to-right"></span></a>
              <a href="#" class="btn" style="background-color:#8abaae">SignUp<span class="btn-span to-right"></span></a>
            </div>
        </div>
        <div class="col-md-6">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="src/latest_product/slide1.png" alt="First slide">
                <div class="carousel-caption">
                  <h3 class="slider-cap">&#9733 &#9733 &#9733 &#9733 &#9733 &#9733 </h3>
                  <p class="slider-cap">Best Ice Cream in the Valley,, Perfect</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="src/latest_product/slide1.png" alt="Second slide">
                <div class="carousel-caption">
                  <h3 class="slider-cap">&#9733 &#9733 &#9733 &#9733 &#9733 &#9733 </h3>
                  <p class="slider-cap">Best Ice Cream in the Valley,, Perfect</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="src/latest_product/slide1.png" alt="Third slide">
                <div class="carousel-caption">
                  <h3 class="slider-cap">&#9733 &#9733 &#9733 &#9733 &#9733 &#9733 </h3>
                  <p class="slider-cap">Best Ice Cream in the Valley,, Perfect</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>
  </div>
  <div>
    <br>
    <br>
  </div>

</body>
</html>