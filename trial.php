<?php 
require('config.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .stripe-button{
            text-decoration: double;
        }
    </style>
</head>
<body>
<form action="submit.php" method="post">
<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $publishableKey?>"
    data-amount="5000"
  
    data-description="ziva"
    data-image="https://th.bing.com/th/id/OIP.0vIwGMCMu_C4jEDykJHHFgHaHa?pid=ImgDet&rs=1"
    data-currency="inr"
    >
</script>
</form>

</body>
</html>

