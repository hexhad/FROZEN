<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FROZEN - Join with Us</title>
    <link rel="icon" href="src/frozenx700.png">
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
        <a class="navbar-brand" href="<?= base_url('frozen');?>">
          <img src="src/frozen.jpg" style="height: 30px;"><p class="navbar-text" style="padding-left:7px">Frozen</p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link wht-blk" href="<?= base_url('frozen');?>" >Ice Cream Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link wht-blk" href="<?= base_url('frozen/load_store');?>">Store</a>
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

        <div class="col-md-6 rect-curv-sign" >
            <!-- <div class="rect-curv" style="border-bottom-left-radius: 0%;border-top-left-radius: 25px; right: 0px;"></div>  -->
            <div class="" style="padding-top: 4rem;padding-bottom: 3rem;padding-left: 20%;">
                <table>
                  <td>
                    <tr>
                        <h3>Join with Us</h3>
                    </tr>
                </td>
                    <td>
                        <tr>
                            <div class="btn-row-sign">            
                                <input type="text" class="input-text" placeholder="User Name">
                            </div>
                        </tr>
                    </td>
                    <td>
                        <tr>
                            <div class="btn-row-sign" style="margin-top: 0.5rem;">            
                                <input type="text" class="input-text" placeholder="email" >
                            </div>
                        </tr>
                    </td>
                    <td>
                        <tr>
                            <div class="btn-row-sign" style="margin-top: 0.5rem;">            
                                <input type="password" class="input-text" placeholder="Password" >
                            </div>
                        </tr>
                    </td>                    
                    <td>
                        <tr>
                            <div class="btn-row-sign" style="margin-top: 0.5rem;">            
                                <input type="password" class="input-text" placeholder="Re enter Password" >
                            </div>
                        </tr>
                    </td>
                    <td>
                        <tr>
                            <div class="btn-row" style="margin-top: 0.5rem;">
                                <a href="<?= base_url('frozen');?>" class="btn">Login<span class="btn-span to-right"></span></a>
                            </div>
                        </tr>
                    </td>

                </table>  
            </div>
        </div>
        <div class="col-md-6">
        
        </div>
 
  </div>
  <div>
    <br>
    <br>
  </div>

</body>
</html>