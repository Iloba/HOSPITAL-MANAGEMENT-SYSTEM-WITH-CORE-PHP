  <?php 
  
  $server = "localhost";
  $user = "root";
  $password = "";
  $db = "hbms";


 $con = mysqli_connect($server, $user, $password, $db);
 if (!$con) {
  echo "Connection Failed";
 }

 if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if (empty($username)) {
      $msg_error = "Enter Username";
    }
    elseif (empty($password)) {
      $msg_error = "Enter Password";
    }else{
      $query = "SELECT *  FROM login WHERE username ='$username' && password ='$password'";
      $result = mysqli_query($con, $query);
      if (mysqli_num_rows($result) == 1) {
         echo  "<script>alert('Login In Succesful')</script>";
         echo  "<script>window.open('admin.php','_blank')</script>";
      }else{
       echo  "<script>alert('Login In credentials Incorrect')</script>";
       echo  "<script>window.open('index.php','_self')</script>";
      }
    }
  }
  
 ?>

