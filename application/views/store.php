<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FROZEN - Store</title>
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

  <!-- navigation -->
  <nav class="navbar navbar-expand-lg navbar-light ">
      <a class="navbar-brand" href="<?= base_url('frozen');?>">
        <img src="src/frozen.jpg" style="height: 30px;"><p class="navbar-text" style="padding-left:7px">FrozenStore</p>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link wht-blk" href="<?= base_url('frozen');?>" >Ice Cream Home</a>
          </li>
          <li class="nav-item active">
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
    <div class="row" >
    <?php foreach ($results as $result):?>
		        	
      <div class="col-md-3" style="padding-top: 1rem;">
        <div class="card">
          <img class="card-img-top" src="src/frozen.jpg" style="height: 250px; width: 250px;">
          <div class="card-body">
            <h4 class="card-title"><?= $result->product_name; ?></h4>
            <p class="card-text"><?= $result->Price; ?></p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
      </div>
      <?php endforeach;?>
      
    
  </div>
</body>
</html>