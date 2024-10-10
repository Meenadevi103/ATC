<?php
include("../Assets/Connection/connection.php");
session_start();
ob_start();
include("Head.php");

$message="";
	

$selQry="select * from tbl_devotee where Devotee_id=".$_SESSION['did'];
$resultone = $con->query($selQry);
$dataone = $resultone->fetch_assoc();

if(isset($_POST["btn_update"]))
{
    $name=$_POST["txt_name"];
	$email=$_POST["txt_email"];
	$contact=$_POST["txt_contact"];
	$upQry="update tbl_devotee set Devotee_name='".$name."',Devotee_email='".$email."' ,Devotee_contact='".$contact."' where Devotee_id=".$_SESSION["did"];
	if($con->query($upQry))
	{
	
		//echo "updated";
		$aid=0;
		?>
        <script>
		alert("Profile Updated...")
		window.location="Myprofile.php";
		</script>
        <?php
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
      <td>Name</td>
      <td><label for="txt_name"></label>
      <input required type="text" name="txt_name" value="
	  <?php echo $dataone["Devotee_name"]?>" id="txt_name" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="text" required name="txt_email" title="Name Allows Only Alphabets,Spaces and First Letter Must Be Capital Letter" pattern="^[A-Z]+[a-zA-Z ]*$" value="<?php echo $dataone["Devotee_email"]?>" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txt_email"></label>
      <input type="text" required name="txt_contact" pattern="[7-9]{1}[0-9]{9}" 
      title="Phone number with 7-9 and remaing 9 digit with 0-9"><?php echo $dataone["devotee_contact"]?></textarea></td>
    </tr>
    
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_update" id="btn_update" value="update" />
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
