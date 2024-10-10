
<?php
include("../Assets/Connection/connection.php");

if(isset($_POST["btn_submit"])) {
    $name = $_POST["txt_name"];
    $email = $_POST["txt_email"];
   
   $photo=$_FILES['file_photo']["name"];
			 $temp=$_FILES['file_photo']["tmp_name"];
			 move_uploaded_file($temp,"../Assets/Files/User/".$photo);
	$proof=$_FILES['file_proof']["name"];
			  $temp2=$_FILES['file_proof']["tmp_name"];
			 move_uploaded_file($temp2,"../Assets/Files/User/".$proof);

   
    $password = $_POST["txt_password"];
   
    
    $insQry = "INSERT INTO tbl_devotee(Devotee_name, Devotee_email, devotee_address, devotee_photo, Devotee_proof, Devotee_password) 
               VALUES ('$name', '$email', '$address', '$photo', '$proof', '$password')";
    if($con->query($insQry)) {
        echo "Inserted";    
    }
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" border="1">
    <tr>
      <td>Name</td>
      <td><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <!--<tr>
      <td>District</td>
      <td><label for="txt_distr"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="txt_place"></label>
      <input type="text" name="txt_place" id="txt_place" /></td>
    </tr>-->
    <tr>
      <td>Address</td>
      <td><label for="txt_address"></label>
      <textarea name="txt_address" id="txt_address" cols="45" rows="5"></textarea></td>
    </tr>
    <!--<tr>
      <td>Photo</td>
      <td><label for="file_photo"></label>
      <input type="file" name="file_photo" id="file_photo" /></td>
    </tr>
    <tr>
      <td>Proof</td>
      <td><label for="file_proof"></label>
      <input type="file" name="file_proof" id="file_proof" /></td>
    </tr>-->
    <tr>
      <td>Password</td>
      <td><label for="txt_password"></label>
      <input type="text" name="txt_password" id="txt_password" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Register" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>