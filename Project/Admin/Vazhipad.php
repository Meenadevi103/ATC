<?php
include("../Assets/Connection/connection.php");
include("Head.php");


if (isset($_POST["btn_submit"])) {
    $vazhipadname = $_POST["txt_name"];
    $price = $_POST["txt_price"];
    // $details = $_POST["txt_details"];

   
    $insQry = "INSERT INTO tbl_vazhipaad (vazhipaad_name, vazhipaad_price) VALUES ('$vazhipadname', '$price')";
    if ($con->query($insQry)) {
        echo "Data submitted successfully";
    } else {
        echo "Error: " . $con->error;
    }
}
if(isset($_GET["did"]))
{
	$delQry = "delete from tbl_vazhipaad where vazhipaad_id=".$_GET["did"];
	if($con->query($delQry))
	{
		?>
		<script>
        alert("Data Deleted")
		window.location="Vazhipad.php"
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
      <td>Vazhipadname</td>
      <td><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" required /></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><label for="txt_price"></label>
      <input type="text" name="txt_price" id="txt_price" required /></td>
    </tr>
    <!-- <tr>
      <td>Details</td>
      <td><label for="txt_details"></label>
      <textarea name="txt_details" id="txt_details" cols="45" rows="5"></textarea></td>
    </tr> -->
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="200" border="1">
    <tr>
      <td>SI NO</td>
      <td>Vazhipad Name</td>
      <td>Price</td>
      <!-- <td>Details</td> -->
      <td><p>Action</p></td>
    </tr>
    
    
    <?php
	
   

$i=0;
    $sel="Select * from tbl_vazhipaad";
	$result=$con->query($sel);
	while($row=$result->fetch_assoc())
	{
		$i++;
	?>
    <tr>
    <td><?php echo $i;?></td>
<td><?php echo $row["vazhipaad_name"];?></td>


<td><?php echo $row["vazhipaad_price"];?></td>

<!-- <td><?php echo $row["vazhipaad_details"];?></td> -->

    <td><a href="Vazhipad.php?did=<?php echo $row["vazhipaad_id"]?>">Delete</a></td>


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