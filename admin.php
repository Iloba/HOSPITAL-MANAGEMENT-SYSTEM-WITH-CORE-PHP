<?php 
   $select = "---select---";
   $server = "localhost";
   $user = "root";
   $password = "";
   $db = "hbms";


   $con = mysqli_connect($server, $user, $password, $db);
   if (!$con) {
    echo "Connection Failed";
   }
   

  if (isset($_POST['submit'])) {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $contact = $_POST['contact'];
      $app = $_POST['app'];


      if (empty($fname)) {
        $msg_error = "Enter First Name Please";
      }
      elseif (empty($lname)) {
        $msg_error = "Enter Last Name Please";
      }
      elseif (empty($email)) {
        $msg_error = "Enter Email Adress Please";
      }
      elseif (empty($contact)) {
        $msg_error = "Enter Your Contact Please";
      }
      elseif ($app == $select) {
        $msg_error = "Please Select The Doctor You will Like To Meet";
      }else{
        $query = "INSERT INTO apply(fname, lname, email, contact, app)
                             VALUES ('{$fname}','{$lname}', '{$email}', '{$contact}', '{$app}') ";
        $run_query = mysqli_query($con, $query);
        if ($run_query) {
          $msg_output = "Congratulations Your Appointment Has Been Booked";
        }else{
          $msg_error = "Appointment Not Booked";
        }
    }
  }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
       <!-- Optional JavaScript -->
     <script type="text/javascript" src="bootstrap.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.js"></script>
    
</head>
<body>
	<div class="jumbotron" style="background: url(img/hospital.png) no-repeat; background-size: cover; height: 400px;">
		<?php 
			if (isset($msg_error)) {
				echo "<center><alert class='alert alert-danger'>{$msg_error}</alert></center>";
			}
			if (isset($msg_output)) {
				echo "<center><alert class='alert alert-success'>{$msg_output}</alert></center>";
			} 
		?><br>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="" class="list-group-item active" style="background-color: #3498db; color: #fff; border-color: #3498db;">Patient</a>
					<a href="" class="list-group-item ">Patient Details</a>
					<a href="" class="list-group-item ">Add New Patient</a>
					<a href="" class="list-group-item ">Payement/Checkout</a>
				</div>
				<hr>
				<div class="list-group">
					<a href="" class="list-group-item active" style="background-color: #3498db; color: #fff; border-color: #3498db;">Staff</a>
					<a href="" class="list-group-item ">Staff Details</a>
					<a href="" class="list-group-item ">Add New Staff</a>
					<a href="" class="list-group-item ">Remove Staff Member</a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-body" style="background-color: #3498db; color: #fff;">
						<h3>Book An Appointment</h3>
					</div>
					<div class="card-body">
						<form class="form-group" method="POST" >
							<label>First Name :</label>
							<input type="text" name="fname" class="form-control" placeholder="Enter Firstname"><br>
							<label>Last Name :</label>
							<input type="text" name="lname" class="form-control" placeholder="Enter Lastname"><br>
							<label>Email Adress :</label>
							<input type="text" name="email" class="form-control " placeholder="Enter Email"><br>
							<label>Contact :</label>
							<input type="text" name="contact" class="form-control" placeholder="Enter Contact"><br>
							<label>Doctor Appointment :</label>
							<select  name="app" class="form-control">
								<option><?php echo "$select"; ?></option>
								<option value="Dr Sharma From 6pm to 8pm">Dr Daniel From 6pm to 8pm</option>
								<option value="Dr Dara From 2pm to 4pm">Dr Dara From 6pm to 8pm</option>
								<option value="Dr Godiya From 4pm to 6pm">Dr Godiya From 6pm to 8pm</option>
							</select><br>
							<input type="submit" name="submit" value="Enter Appointment" class="btn btn-primary">
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>