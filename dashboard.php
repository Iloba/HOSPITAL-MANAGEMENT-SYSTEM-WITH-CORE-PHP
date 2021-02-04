<?php 
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "hbms";

	$con = mysqli_connect($server, $user, $password, $db);
	if(!$con){
		echo "Connection Not Established Please Check Again";
	}

	$query = "SELECT * FROM apply";
	$run_query = mysqli_query($con, $query);
	if (mysqli_num_rows ($run_query) > 0) {
			echo "
				<div class='table-responsive'>
					<table class=' table table-bordered'>
						<thead>
							<tr class='text-center'>
								<th>Firstname</th>
								<th>Lastname</th>
								<th>E-mail</th>
								<th>Contact</th>
								<th>Appointment</th>
							</tr>
						</thead>

			";
		while ($row = mysqli_fetch_assoc($run_query)) {
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];
			$contact = $row['contact'];
			$app = $row['app'];

			echo "
				<tbody>
					<tr  style='font-family: tahoma; font-size: 12px;' class='text-center'>
						<td>{$fname}</td>
						<td>{$lname}</td>
						<td>{$email}</td>
						<td>{$contact}</td>
						<td>{$app}</td>
					</tr>
				</tbody>
			";
		}

		echo "	 </table>
				</div>

		";
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Applicants</title>
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

</body>
</html>