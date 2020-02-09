<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FROZEN - Admin</title>
    <link rel="icon" href="src/frozenx700.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='jquery/jquery-3.4.1.min.js'></script>
    <script src='bootstrap/js/bootstrap.min.js'></script>
    

    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>
<body>

  <!-- navigation -->
  <nav class="navbar navbar-expand-lg navbar-light ">
      <a class="navbar-brand" href="<?= base_url('frozen');?>">
        <img src="src/frozen.jpg" style="height: 30px;"> <p class="navbar-text">Frozen Admin</p>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link wht-blk" href="#" >Task</a>
          </li>
          <li class="nav-item">
            <a class="nav-link wht-blk" href="#">Task</a>
          </li>
          <li class="nav-item">
            <a class="nav-link wht-blk" href="#">Task</a>
          </li>
          <li class="nav-item">
            <a class="nav-link wht-blk" href="#">Task</a>
          </li>
        </ul>
      </div>
  </nav>
  <!-- end of navigation -->
  <!-- mid content -->
  <div class="container">
    <div class="row" >
      <div class="col-md-3 " style="padding-top: 1rem;background-color: ">
        <div class="row">
          <table>
            <tr>
              <td>
                <div class="btn-row" style="margin-top: 0.5rem;">
                  <a href="#" class="btn">Task<span class="btn-span to-right"></span></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="btn-row" style="margin-top: 0.5rem;">
                  <a href="#" class="btn">Task<span class="btn-span to-right"></span></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="btn-row" style="margin-top: 0.5rem;">
                  <a href="#" class="btn">Task<span class="btn-span to-right"></span></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="btn-row" style="margin-top: 0.5rem;">
                  <a href="#" class="btn">Task<span class="btn-span to-right"></span></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="btn-row" style="margin-top: 0.5rem;">
                  <a href="#" class="btn">Task<span class="btn-span to-right"></span></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="btn-row" style="margin-top: 0.5rem;">
                  <a href="#" class="btn">Task<span class="btn-span to-right"></span></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="btn-row" style="margin-top: 0.5rem;">
                  <a href="#" class="btn">Task<span class="btn-span to-right"></span></a>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div> 
      <div class="col-md-9" style="padding-top: 1rem; background-color: ">
        <table class="table">
          <thead style="background-color: rgba(119, 136, 153, 0.384);">
            <td>head</td>
            <td>head</td>
            
            <td>State</td>
          </thead>

          <?php foreach ($results as $result):?>
              
          <tr>
            <td><?= $result->Product_name; ?></td>
            <td><?= $result->Price; ?></td>
            <td>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <?php endforeach;?>
          
        </table>

      </div>     
    </div>
  </div>
</body>
</html>