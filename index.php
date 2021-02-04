

<?php include('func.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HBMS</title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
       <!-- Optional JavaScript -->
      <script type="text/javascript" src="bootstrap.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
 
</head>
<body style="background: url(img/hospital.png) no-repeat; background-size: cover;">
    <div class="container" style="width: 400px; margin-top: 100px; margin-right: 10%;" >
      <?php 
        if (isset($msg_error)) {
          echo "<center><alert class='alert alert-danger'>{$msg_error}</alert></center>";
        }
        
       ?><br>
      <div class="card">
        <img src="img/11.jpg" class="card-img-top">
        <div class="card-body">
          <form class="form-group" method="POST" >
            <label>Username :</label><br>
            <input type="text" name="username" class="form-control" placeholder="Enter Username"><br>
            <label>Password :</label><br>
            <input type="password" name="password" class="form-control" placeholder="Enter password"><br>
            <input  type="submit" Value="Login" name="submit" id="Ab1" class="btn btn-primary">
         </form>
        </div>
      </div>
    </div>
</body>
</html>
