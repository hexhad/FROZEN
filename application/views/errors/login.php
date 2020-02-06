<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="bootstrap/css/bootstrap.min">

	</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Add Product</h1>
		</div>
		<div class="row">
            <div class="card col-md-6">
				<?php echo form_open('Product/save'); ?>

				    <div class="form-group">
					    <label>Product Code:</label>
					    <input type="text" class="form-control" name="product_code">
					</div>
					<div class="form-group">
					    <label>Product Name:</label>
					    <input type="text" class="form-control" name="product_name">
					</div>
					<div class="form-group">
					    <label>Description:</label>
					    <textarea name="description" class="form-control"></textarea>
					</div>
				    <button type="submit" class="btn btn-success">Submit</button>
				    <a href="<?= base_url('product/viewAll');?>" class="btn btn-defalt" >View All Products</a>

				</form>
			</div>
		</div>
	</div>
</body>
</html>