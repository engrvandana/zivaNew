<?php
require "functions.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<!-- <script src="js/jquery2.js"></script> -->
		<script src="js/bootstrap.min.js"></script>
	
		<!-- <script src="main.js"></script> -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
<body>
    <?php
        $res = selectAll("courses");

        while($result=mysqli_fetch_assoc($res)){ ?>
        <?php 
       echo <<<data
            <div class="col-md-3 text-center">
                <p>$result[course_name]</p>
                <a href="course_details.php?id=$result[course_id]" class="main-btn mb-2 btn-sm" style="background-color:bisque">More Details</a>
            </div>
        data;
        
       
        }
        ?>


</body>
</html>