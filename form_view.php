<?php
include('dbconnection.php');

	
$results = mysqli_query($conn, "SELECT * FROM stu_add");

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$sql = "DELETE FROM stu_add WHERE id='$id'";
     mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn) == 1)
	{
		
        echo '<script language="javascript">alert("Information Delete sucessfully..")</script>';
        echo '<script language="javascript">window.location = "deleteview.php"</script>';
	}
   
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   	<title>College Website</title>
    
     <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>
  
  <div id="recordheding">
      <h1><a href="admin_login.php">ADMISSION RECORDS</a></h1>
      
  </div> 
   
    <div id="aj">
    <div id="record">
        <table>
           <thead>
              <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>COLLEGE</th>
				  <th>COURSE</th>
				  <th>DATE OF BIRTH</th>
                  <th>GENDER</th>
				  <th>FATHER NAME</th>
                  <th>MOTHER NAME</th>
				  <th>ADDRESS</th>
                  <th>STATE</th>
				  <th>DISTRICT</th>
                  <th>CITY</th>
				  <th>ZIP CODE</th>
                  <th>MOBILE NO.</th>
				  <th>EMAIL</th>
                  <th>SUBJECT</th>
				   <th>MAX MARKS</th>
				  <th>MARKS</th>
                  <th>PARCENT</th>
				  <th>PLACE</th>
                  <th>ACTION</th>
				  <th>ACTION</th>

                  
                  
              </tr> 
               
           </thead>
            <tbody>
             <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['f_name'] ?> <?php echo $row['l_name'] ?></td>
                    <td><?php echo $row['collegename'] ?></td>
					<td><?php echo $row['course'] ?></td>
					<td><?php echo $row['dob'] ?></td>
					<td><?php echo $row['gender'] ?></td>
					<td><?php echo $row['fathername'] ?></td>
					<td><?php echo $row['mothername'] ?></td>
					<td><?php echo $row['contactaddress'] ?></td>
					<td><?php echo $row['state'] ?></td>
					<td><?php echo $row['district'] ?></td>
					<td><?php echo $row['citytown'] ?></td>
					<td><?php echo $row['zipcode'] ?></td>
					<td><?php echo $row['mobilenumber'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['sub'] ?></td>
					<td><?php echo $row['maxmark'] ?></td>
					<td><?php echo $row['marksobtained'] ?></td>
					<td><?php echo $row['percent'] ?></td>
					<td><?php echo $row['place'] ?></td>
                
				    <td><a href="addmission_record_show.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a></td>

                       <td><a href="form_view.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
                    
                   
                </tr>
                <?php    
                }
                ?>
            </tbody>
            
            
            
        </table>
       
        
    </div>
     
    </div>   
</body>
</html>