<?php 
session_start();

?>



<?php
//include('dbconnection.php');
$connection = mysqli_connect("localhost", "root", "","addmission");
// Selecting Database
//$db = mysqli_select_db($connection,"addmission");

$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$sql=mysqli_query($connection, "SELECT * FROM registration WHERE user_id='$user_check'");
$row = mysqli_fetch_array($sql);

    $name = $row['name'];
    $phone = $row['phone'];   
    
    
  

?>






<?php 
 
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
  
?>



<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>college website</title>
        <link rel="stylesheet" href="style1.css" type="text/css">
        
    </head>
    <body>
           <div id="stunav">
          
           <ul>
		  <?php  if (isset($_SESSION['username'])) : ?> 
        <li><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></li>&nbsp|
        <li><a href="index.php" style="color: blue;">Logout</a></li> 
           <?php endif ?>     		  
        </ul>
           
           
       </div>
            <div id="studet">
             <div id="studetailheder">
                 <h1>STUDENT</h1>
             </div>
              
             
			 
		
        
		
           <div id="stu_detail_data_record"> 
			<table id="s_detaildb">
	
			<tr>
			<th>Name <span style="padding-left:100px;">:</span></th>
			<td style="padding-top:10px;">
               <span style="color:red; font-weight: 600;"><?php  echo  $name;  ?> </span>
             </td>
			</tr>
			<tr>
			<th>Phone <span style="padding-left:98px;">:</span></th>
                <td style="padding-top:12px;">
                <span style="color:red;"><?php  echo  $phone;  ?></span>
                
                </td>
			</tr>
		
		
			</table>
                
                 </div>
                 <div id="stu_but">
                     <li><a href="admission_form.php">FILL THE ADMISSION FORM</a></li>
                     
                 </div>
                 		
                 						
                  </div>
				
                  
             
            
        </body>
</html>