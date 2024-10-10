<?php
include("../Assets/connection/connection.php");
session_start();
ob_start();
include("Head.php");

if(isset($_POST["btn_feedback"]))
{
    
        $feedback = $_POST["txt_feedback"];
		$devotee=$_SESSION['did'];
     
        $insQry = "insert into tbl_feedback (feedback_content,Devotee_id) values ('".$feedback."','".$devotee."')";
        if ($con->query($insQry))
		{
            echo "Date inserted successfully.";
        }
		else
		{
            echo "Error: ";
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
<form action="" method="post">
<table width="200" border="1">
  <tr>
    <td><div align="center">Feedback</div></td>
    <td><label for="txt_feedback"></label>
      <div align="center">
        <textarea name="txt_feedback" id="txt_feedback" cols="45" rows="5" required="required"></textarea>
      </div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="btn_feedback" id="btn_feedback" value="Submit" />
    </div></td>
    </tr>
</table>

</form>
</body>
</html>
<?php
include("foot.php");
ob_flush();
?>
