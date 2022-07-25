<?php 
include('dbconnection.php');

session_start(); 
$user_id = "";

if (isset($_POST['Submit'])) {
    
  $user_id = $_POST['user_id'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
    
  
    
        
   
      
  $sql = "INSERT INTO registration(user_id, name, phone, password) VALUES ('$user_id', '$name',  '$phone','$password')";
    mysqli_query($conn, $sql);
                
            $_SESSION['login_user'] = $user_id;
    $_SESSION['user_id'] = $user_id;
     $_SESSION['name'] = $name;
    $_SESSION['phone'] = $phone;
    
  echo "<script>alert('record inserted sucessfully..');</script>";
  	
      
        //header("location: std_login.php");
          
      
  }
        


   
?>


<!DOCTYPE html>
<html lang="en-US">
<meta charset="UTF-8">
<head>
	<title>College Website</title>
    <link rel="stylesheet" href="style.css" type="text/css">
	
</head>
<body>
<div class="registration">
<a id="home1" href="index.php">HOME</a>
<h2>STUDENT REGISTRATION FORM !!</h2>
    <h4>Create an account</h4>
     <form  action="" method="post">
    <h3>USERNAME </h3>
<input id="registration_form" type="text" name="user_id" placeholder="Enter Your Username" name="username" value="">

<h3>NAME</h3>
<input id="registration_form" type="text" name="name" placeholder="Enter Your Name" name="name" value="">
	
<h3>PHONE</h3>
<input id="registration_form" type="text" name="phone" placeholder="Enter Your Phone" name="phone" value="">

	<h3>PASSWORD</h3>
<input id="registration_form" type="password" name="password" placeholder="Enter Your Password" name="password">
<div id="clear"></div>
<input type="submit" id="registration_submit" value="SUBMIT" name="Submit"> 
 <span><a href="std_login.php">Login</a></span>
    </form>
</div>
</body>
</html>