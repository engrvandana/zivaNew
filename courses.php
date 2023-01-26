<!-- <?php
require "config.php";
session_start();
require "functions.php"
//if(isset($_SESSION["uid"])){
//	header("location:profile.php");
//}
?> -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
		<!-- <script src="js/jquery2.js"></script> -->
		<script src="js/bootstrap.min.js"></script>
	
		<!-- <script src="main.js"></script> -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
<body>
	<?php 
	?>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">Ecommerce Site</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Products</a></li>
			</ul>
			<form class="navbar-form navbar-left">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search" id="search">
				</div>
				<button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
			 </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge" >0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in </div>
								</div>
							</div>
							
							</div>
					
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login/Register</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<input type="submit" class="btn btn-warning" value="Login">
										<a href="customer_registration.php?register=1" style="color:white; text-decoration:none;">Create Account Now</a>
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				<div class="nav nav-pills nav-stacked">
			
				 
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<?php 
							$res=selectAll('categories');
							while($opt= mysqli_fetch_assoc($res)){?>
								<?php	
						?>
						<?php
						  echo <<<data
						   <li><a href="#selected?id=$opt[categories_id]">$opt[categories_name]<br></a></li>
						   $opt[categories_id]
						data;
						?>
						<?php		
							}
						?>
			
					
					
						</div>
				
				
			</div>
			<!-- <div class="col-md-8 col-xs-12" >
				
				<div class="panel panel-info">
					<div class="panel-heading">Courses</div>
					<div class="panel-body">
				
					</div>
				</div> -->
				<div >
				
				<div  >
					<div class="panel-heading">Courses</div>
					
					
					<?php
					?>
					<?php
					$res = selectAll("courses");
			
					// if(mysqli_num_rows($res)==0){
					// 	redirect("try.php");
					// }
			
					$courses_data = mysqli_fetch_assoc($res);
						
							
						 echo <<<data
							<div class="card-deck">
								<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								</div>
								</div>
								<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								</div>
								</div>
								<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								</div>
								</div>
						</div>
					data;
						
					
				
					?>  
				 
				</div>                
			</div>
			
	
	</div>

					
	
				   
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
















































