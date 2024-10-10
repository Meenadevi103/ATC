<?php
include("../Assets/Connection/connection.php");
session_start();
if(isset($_POST["btn_submit"])) {
    $email = $_POST["txt_email"];
    $password = $_POST["txt_password"];

    
    $selAdmin = "SELECT * FROM tbl_admin WHERE Admin_email = '$email' AND Admin_password = '$password'";
    $resultAdmin = $con->query($selAdmin);

    if($dataAdmin=$resultAdmin->fetch_assoc()) {
       
       $_SESSION['aid']=$dataAdmin["Admin_id"];
	    $_SESSION['aname']=$dataAdmin["Admin_name"];
        header("location: ../Admin/Homepage.php");
     }
	
	
	  $selDevotee = "SELECT * FROM tbl_devotee WHERE Devotee_email = '$email' AND Devotee_password = '$password'";
    $resultDevotee = $con->query($selDevotee);

    if($dataDevotee=$resultDevotee->fetch_assoc()) {
       
       $_SESSION['did']=$dataDevotee["Devotee_id"];
	    $_SESSION['dname']=$dataDevotee["Devotee_name"];
        //echo $_SESSION["did"];
		header("location: ../User/Homepage.php");
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

<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txt_password"></label>
      <input type="text" name="txt_password" id="txt_password" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Login" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
