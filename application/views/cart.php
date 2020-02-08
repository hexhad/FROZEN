<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FROZEN - Cart</title>
    <link rel="icon" href="src/frozenx700.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='jquery/jquery-3.4.1.min.js'></script>
    <script src='bootstrap/js/bootstrap.min.js'></script>


    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>

    <style>
      .card{
        border-radius:0%;
        /* border-bottom-right-radius: 25px; */
        border-top-left-radius: 25px;
        border: 1px solid #2e856e31;
      }
      .card-img-top{
        border-radius:0%;
        border-top-left-radius: 25px;
      }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light ">
      <a class="navbar-brand" href="">
        <img src="src/frozen.jpg" style="height: 30px;"><p class="navbar-text" style="padding-left:7px">FrozenStore</p>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link wht-blk" href="#" >Ice Cream Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link wht-blk" href="#">Store</a>
          </li>
          <li class="nav-item">
            <a class="nav-link wht-blk" href="#">About Us</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link wht-blk" href="#">Cart</a>
          </li>
        </ul>
      </div>
  </nav>
  <!-- end of navigation -->
  <!-- mid content -->
  <div class="container">
    <div class="row" >
    
          </div>
        </div>
      </div>
      
      <div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    Add to Cart
  </div>
 
  <!-- Product #1 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="src/p2.png" alt="" />
    </div>
 
    <div class="description">
      <span>CHOCO Butter</span>
      <span>chocolate </span>
      <span>Category1</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">Rs.350</div>
  </div>
 
  <!-- Product #2 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="src/p3.png" alt=""/>
    </div>
 
    <div class="description">
      <span>Peanut Butter</span>
      <span>Vanilla </span>
      <span>Category1</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">Rs.350</div>
  </div>
 
  <!-- Product #3 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="src/p1.png" alt="" />
    </div>
 
    <div class="description">
      <span>Kit Kat Butter </span>
      <span>Chocolate </span>
      <span>Category2</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">Rs.300</div>


  </div>
 <button class="button" style="vertical-align:middle"><span>CHECKOUT </span></button>
</div>
    
  </div>
</body>
</html>