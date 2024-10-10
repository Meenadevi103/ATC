
<?php
include("../Assets/Connection/connection.php");
include("Head.php");


if(isset($_POST["txt_submit"])) {
    $ZodiacName = $_POST["txt_name"];
   $ZodiacId=$_POST['txt_id'];
    if($ZodiacId==""){
		$insQry = "INSERT INTO tbl_zodiacsign(zodiac_name) VALUES('$ZodiacName')";
		if($con->query($insQry)) {
			echo "Inserted";    
		} else {
			echo "Error: " . $con->error;
		}
	}
	else{
		$updQry="update tbl_zodiacsign set 	zodiac_name='".$ZodiacName."' where zodiac_id=".$ZodiacId;
		if($con->query($updQry))
		{
		?>
        <script>
		alert("Updated")
		window.location="Zodiac.php";
		</script>
        <?php	
		}
	}
}


if (isset($_GET["did"])) {
    $delQry = "DELETE FROM tbl_zodiacsign WHERE zodiac_id=" . $_GET["did"];
    if ($con->query($delQry)) {
        ?>
        <script>
            alert("Data Deleted");
            window.location = "Zodiac.php";
        </script>
        <?php
    } else {
        echo "Error deleting record: " . $con->error;
    }
}
//First Step
$zid=""; //Echo in hidden textbox
$zname=""; //Echo in text field
 if (isset($_GET["aid"])) {
    $SelZ = "SELECT * FROM tbl_zodiacsign WHERE zodiac_id=".$_GET["aid"];
    $resZ=$con->query($SelZ);
	$dataZ=$resZ->fetch_assoc();
	$zname=$dataZ['zodiac_name'];
	$zid=$dataZ['zodiac_id'];
}


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="">
	<input type="hidden" name="txt_id" value="<?php echo $zid ?>" />  
  <table width="234" border="1">
    <tr>
      <td width="124">Zodiac Name</td>
      <td width="94"><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" value="<?php echo $zname; ?>" required>

    </tr>
    <tr>
       <td colspan="2"><div align="center">
        <input type="submit" name="txt_submit" id="txt_submit" value="Submit">
      </div></td>
    </tr>
  </table>
  <table width="300" border="1">
    <tr>
      <td width="31">SI NO</td>
      <td width="55">Zodiac</td>
      <td width="60">Action</td>
      <td width="60">Action</td>
    </tr>
     <?php
	 $i=0;
    $sel="Select * from tbl_zodiacsign";
	$result=$con->query($sel);
	while($row=$result->fetch_assoc())
	{
		$i++;
	?>
    <tr>
    <td><?php echo $i;?></td>

	<td><?php echo $row["zodiac_name"];?></td>
    <td><a href="Zodiac.php?did=<?php echo $row["zodiac_id"]?>">Delete</a></td>
    <td width="133">
<a href="Zodiac.php?aid=<?php echo $row["zodiac_id"]?>">Edit</a></td>

</tr>
    <?php
	}
	?>
  </table>
</form>
</body>
</html>
<?php
include("Foot.php");
?>