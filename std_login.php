<?php
if (isset($_POST['sign'])) {
header('location: registration.php');   
}

?>


<?php
include('dbconnection.php');

 session_start(); 

$errors = array(); 



if (isset($_POST['log'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    
  

    
if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$sql = "SELECT * FROM registration WHERE user_id='$username' AND password='$password'";
  	$results = mysqli_query($conn, $sql);
      
        if(mysqli_num_rows($results) == 1) {
  	 header('location: student_details.php');
  	}

    else {
  		array_push($errors, "Wrong username/password combination");
  	}   
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>
  
    
   <div id="login" >
      <form action=" " method="post">
   <?php include('errors.php'); ?>
       <h1>Student Login!!!</h1>
   <h2>Username</h2><input id="s_log" type="text" name="username" placeholder="Enter User id"/>
       <div id="clear"></div>
        <h2>Password</h2><input id="s_log" type="text" name="password" placeholder="Enter Password"/>
        <div id="clear"></div>
       <input id= "s_but" type="submit" name="log" value="Login">
       <input id = "s_but1" type="submit" name="sign" value="Sign Up">
       </form>
   </div>
   
    <div id="back">
             
			  <li><a href="index.php">BACK</a></li>
    </div> 
</body>
</html>
