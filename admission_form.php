<?php 

include('dbconnection.php');


/*--

if (isset($_POST['Submit'])) {

$college_n = $_POST['collegename'];
$course = $_POST['course'];
$f_name = $_POST['firstname'];
$L_name = $_POST['lastname'];
$DOB = $_POST['dob'];
$father_name = $_POST['fathername'];
$mother_name = $_POST['mothername'];
$blood_group = $_POST['bloodgroup'];
$gender = $_POST['gender'];
$place_of_birth = $_POST['placeofbirth'];
$address = $_POST['contactaddress'];
$state = $_POST['state'];
$mobile_no = $_POST['mobilenumber'];
$email = $_POST['email'];
$disrict = $_POST['district'];
$city_town = $_POST['citytown'];
$alter_mobile_no = $_POST['alternatenumber'];
$zip_code = $_POST['zipcode'];
$country = $_POST['country'];
$cetogries = $_POST['studentcategory'];
$nationality = $_POST['nationality'];
$subject = $_POST['sub'];
$max_marks = $_POST['maxmark'];
$marks = $_POST['marksobtained'];
$percentage = $_POST['percent'];
$place = $_POST['place'];  
    
        
   
      
  $sql = "INSERT INTO addmision_form(collegename, course, F_name, L_name, father_name,	mother_name, DOB, Blood_group, gender, address, state, mobile_no,	email, distric, city_town, alter_mobile_no, zip_code, country, cetogries, nationality, subject, max_marks, marks, percentage, place) VALUES ('$college_n', '$course', '$f_name', '$L_name', '$DOB', '$father_name', '$mother_name', '$blood_group', '$gender', '$place_of_birth', '$address', '$state', '$mobile_no', '$email', '$disrict', '$city_town', '$alter_mobile_no', '$zip_code', '$country', '$cetogries', '$nationality', '$subject', '$max_marks', '$marks', '$percentage', '$place')";
    
    mysqli_query($conn, $sql);
                
            
  echo "<script>alert('record inserted sucessfully..');</script>";
  	
      
        //header("location: std_login.php");
          
      
  }
        
*/

 



 
if (isset($_POST['submit'])) {
    $collegename = $_POST['collegename'];
    $course = $_POST['course'];
     $f_name = $_POST['f_name'];
    
     $dob = $_POST['dob'];
     $l_name = $_POST['l_name'];
     $bloodgroup = $_POST['bloodgroup'];
     $gender = $_POST['gender'];
     $placeofbirth = $_POST['placeofbirth'];
     $fathername = $_POST['fathername'];
     $mothername = $_POST['mothername'];
     $contactaddress = $_POST['contactaddress'];
     $state = $_POST['state'];
     $mobilenumber = $_POST['mobilenumber'];
     $district = $_POST['district'];
     $email = $_POST['email'];
     $citytown = $_POST['citytown'];
     $alternatenumber = $_POST['alternatenumber'];
     $zipcode = $_POST['zipcode'];
     $country = $_POST['country'];
     $studentcategory = $_POST['studentcategory'];
     $nationality = $_POST['nationality'];
     $sub = $_POST['sub'];
     $maxmark = $_POST['maxmark'];
     $marksobtained = $_POST['marksobtained'];
     $percent = $_POST['percent'];
     $place = $_POST['place'];
     
   $sql = "INSERT INTO stu_add(collegename, course, f_name, dob, l_name, bloodgroup, gender, placeofbirth, fathername, mothername, contactaddress,  state, mobilenumber, district, email, citytown, alternatenumber, zipcode, country, studentcategory, nationality, sub, maxmark, marksobtained, percent, place) VALUES ('$collegename', '$course', '$f_name', '$dob', '$l_name', '$bloodgroup', '$gender', '$placeofbirth', '$fathername', '$mothername', '$contactaddress', '$state', '$mobilenumber', '$district', '$email', '$citytown', '$alternatenumber', '$zipcode', '$country', '$studentcategory', '$nationality', '$sub', '$maxmark', '$marksobtained', '$percent', '$place')";
        mysqli_query($conn, $sql);
   echo "<script>alert('Application form record inserted sucessfully..');</script>";
        
  
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link type="text/css" href="style.css" rel="stylesheet">
</head>
<body>
  <div id="contener_staff_g">
    <div class="back_button">
         <a id="home" href="std_login.php">BACK</a>
     </div>
     
    <div id="clear"></div>
    
  <div class="container">
    <main class="rounded1">  
     <center><font size="+3">ONLINE ADMISSION FORM</font></center>
      <div class="clear"></div>
    </main>
  </div>
  
  
 
  
  
  
  
  
<div class="container1">
    <div class="rounded2"> 
       <form action="" method="post" onsubmit="return validateform()" > 
       
         <table border="1">
  <tr style="background-color:#FFC">
    <td colspan="4"><strong>College details:</strong></td>
    </tr>
  
  <tr style="background-color:#CFF">
    <td height="30">College Name:</td>
    <td>
    <select name="collegename" id="course"  style="width:200px;">
    <option value="">Select</option>
    <option>DSPMU /RANCHI COLLEGE RANCHI</option><option>ST. XAVIER COLLEGE RANCHI</option><option>DORANDA COLLEGE RANCHI</option><option>NIRMALA COLLEGE RANCHI</option><option>MARWARI COLLEGE RANCHI</option></select>
    </td>
    <td>Course</td>
    <td>
    <select name="course" id="semester" style="width:100px;">
    <option>I.A</option><option>I.Sc</option><option>I.COM</option><option>B.A</option>
    <option>B.Sc</option><option>B.COM</option><option>BCA</option></select>
       
    </td>
    </tr>
      </table>
       
        <div id="clear"></div>
        
<div id="addform">
           
     <table width="200" height="226">
          <tr style="background-color:#FFC">
            <td height="36" colspan="4"><strong>Student details:</strong></td>
          </tr>
          <tr style="background-color:#CFF">
            <td width="27%" height="40">First name:</td>
            <td width="24%" id="firstname"><input type="text" name="f_name" id="firstname"></td>
            <td width="26%">DOB (dd/mm/yyyy)</td>
            <td width="23%"><input type="date" name="dob" id="dob"></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="43">Last name:</td>
            <td><input type="text" name="l_name" id="lastname"></td>
            <td>Blood group:</td>
            <td><select name="bloodgroup" id="bloodgroup">
			<option value="Select">Select</option>
              <option value="A positive">A positive</option>
              <option value="A negative">A negative</option>
              <option value="B positive">B positive</option>
              <option value="B negative">B negative</option>
              <option value="AB positive">AB positive</option>
              <option value="AB negative">AB negative</option>
              <option value="O positive">O positive</option>
              <option value="O negative">O negative</option>
            </select></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="30">Student Gender:</td>
            <td><input type="radio" name="gender" id="Male" value="Male" checked>
Male
  <input type="radio" name="gender" id="Female" value="Female">
Female </td>
            <td>Place of Birth:</td>
            <td><input type="text" name="placeofbirth" id="placeofbirth"></td>
          </tr>
         
          <tr style="background-color:#CFF">
            <td height="39">Father name:</td>
            <td><input type="text" name="fathername" id="father name"></td>
            <td>Mother Name:</td>
            <td><input type="text" name="mothername" id="mother name"></td>
          </tr>
         
        </table>
        
      </div>
      
      <div id="addform">
       <table width="200" height="300" border="1">
        <tr style="background-color:#FFC">
          <td colspan="4"><strong>Contact Details:</strong></td>
        </tr>
        <tr style="background-color:#CFF">
          <td>Contact Address:</td>
          <td id="contact Address"><textarea rows="3" cols="25" name="contactaddress" id="contactaddress"></textarea></td>
          <td>State:</td>
          <td><input type="text" name="state" id="state"></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30">Mobile Number:</td>
          <td><p id="mobile  number">
            <input type="text" name="mobilenumber" id="mobileno">
          </p></td>
          <td>District:</td>
          <td><input type="text" name="district" id="district"></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="40">Email:</td>
          <td><input name="email" type="text" id="email"></td>
          <td>City / Town :</td>
          <td><input name="citytown" type="text" id="citytown"></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30">Alternate Contact Number:</td>
          <td><input type="text" name="alternatenumber" id="alternatenumber"></td>
           <td><p>Postal / Zip Code:</p></td>
          <td><p>
            <input type="text" name="zipcode" id="zipcode">
          </p></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30"><p>Country:</p></td>
          <td><p id="email">
            <input type="text" name="country" id="country">
          </p></td>
          <td>&nbsp;</td>
           <td>&nbsp;</td>
        </tr>
      </table>
       
       
        </div>
    
   <div id="addform">
        <table width="200" border="1">
          <tr style="background-color:#FFC">
            <td colspan="4"><strong>Nationality  details:</strong></td>
          </tr>
       
          <tr style="background-color:#CFF">
            <td height="30">Student Category:</td>
            <td><select name="studentcategory" id="studentcategory" style="width:100px;">
            <option value='Select'>Select</option><option value='General'>General</option><option value='SC'>SC</option><option value='ST'>ST</option><option value='OBC'>OBC</option>  </select></td>
            <td>Nationality:</td>
            <td><input type="text" name="nationality" id="nationality"></td>
          </tr>
        
        </table>
        </div>
        
        <div id="addform">
     <table width="200" border="1">
       <tr style="background-color:#FFC">
          <td>Subject</td>
          <td>Maximum Marks</td>
          <td>Marks obtained</td>
          <td>Percent</td>
        </tr>
       
      
       
        <tr style="background-color:#CFF">
          <td height="40"><input type="text" name="sub"></td>
          <td><input type="text" name="maxmark"></td>
          <td><input name="marksobtained" type="text" placeholder="0"/></td>
          <td><input type="text" name="percent"></td>
        </tr>
       
      </table>

       
        </div>
        
   
            
         <hr style=" color:gray; width: 95.7%; margin-left: 20px;">
         <div id="addform" style="margin-top: -5px;" >
      <table width="200" border="1">
        <tr style="background-color:#FFC">
          <td colspan="2"><strong>Declaration:</strong></td>
        </tr>
        <tr style="background-color:#CFF">
          <td colspan="2">I declare that all the particulars furnished above   are true and correct. I submit that I will abide by the rules and regulations of   the College.</td>
          </tr>
        <tr style="background-color:#CFF">
          <td width="48%"><p>Place :
              
              <input type="text" name="place" id="place">
          </p></td>
          <td width="52%"></td>
          </tr>
        </table>
        </div> 
        
    
         <input style="margin-left:20px; padding:2px 5px; cursor: pointer; " type="submit" name="submit" value="Submit">
       </form>
      
    </div>
  </div>
   
       
   
    </div>
    
 
   <div id="clear"></div>  
</body>
</html>