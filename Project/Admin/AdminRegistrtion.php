

<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

if(isset($_POST["btn_submit"])) {
    $name = $_POST["txt_name"];
    $email = $_POST["txt_email"];
    $password = $_POST["txt_password"];
    $marriage_count = $_POST["txt_marriagecount"];
    $palpayasam_count = $_POST["txt_palpayasamcount"];
    $marriage_amount = $_POST["txt_marriageamount"];
    $palpayasam_amount = $_POST["txt_palpayasamamount"];
    $darshan_amount = $_POST["txt_darshan"];
    $insQry = "INSERT INTO tbl_admin (Admin_name, Admin_email, Admin_password, marriage_count, palpayasam_count, marriage_amount, palpayasam_amount,darshan_amt) 
               VALUES ('$name', '$email', '$password', '$marriage_count', '$palpayasam_count', '$marriage_amount', '$palpayasam_amount','$darshan_amount')";
    if($con->query($insQry)) {
        echo "Inserted";    
    } else {
        echo "Error: " . $con->error;
    }
}
if(isset($_GET["did"]))
{
	$delQry = "delete from tbl_admin where Admin_id=".$_GET["did"];
	if($con->query($delQry))
	{
		?>
		<script>
        alert("Data Deleted")
		window.location="AdminRegistrtion.php"
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
  <table width="332" border="1">
    <tr>
      <td width="173">Name</td>
      <td width="143"><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Pssword</td>
      <td><label for="txt_password"></label>
      <input type="text" name="txt_password" id="txt_password" /></td>
    </tr>
    <tr>
      <td>Marriagecount</td>
      <td><label for="txt_marriagecount"></label>
      <input type="text" name="txt_marriagecount" id="txt_marriagecount" /></td>
    </tr>
    <tr>
      <td>Plapayasamcount</td>
      <td><label for="txt_palpayasamcount"></label>
      <input type="text" name="txt_palpayasamcount" id="txt_palpayasamcount" /></td>
    </tr>
    <tr>
      <td>Marriageamount</td>
      <td><label for="txt_marriageamount"></label>
      <input type="text" name="txt_marriageamount" id="txt_marriageamount" /></td>
    </tr>
    <tr>
      <td>Palpayasamamount</td>
      <td><label for="txt_palpayasamamount"></label>
      <input type="text" name="txt_palpayasamamount" id="txt_palpayasamamount" /></td>
    </tr>
    <tr>
      <td>Darshan Amount</td>
      <td><label for="txt_darshan"></label>
      <input type="text" name="txt_darshan" id="txt_darshan" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table>
  <table width="200" border="1">
    <tr>
      <td>SINO</td>
      <td>NAME</td>
      <td>EMAIL</td>
      <td>MARRIAGECOUNT</td>
      <td>PALPAYASAMCOUNT</td>
       <td>PALPAYASAMAMOUNT</td>
       <td>MARRIAGEAMOUNT</td>
       <td>DARSHANAMOUNT</td>

      <td>ACTION</td>
    </tr>
    <?php
    $i=0;
    $sel="Select * from tbl_admin";
	$result=$con->query($sel);
	while($row=$result->fetch_assoc())
	{
		$i++;
	?>
    <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $row["Admin_name"];?></td>

<td><?php echo $row["Admin_email"];?></td>


<td><?php echo $row["marriage_count"];?></td>

<td><?php echo $row["palpayasam_count"];?></td>

<td><?php echo $row["marriage_amount"];?></td>

<td><?php echo $row["palpayasam_amount"];?></td>
<td><?php echo $row["darshan_amt"];?></td>

    <td><a href="AdminRegistrtion.php?did=<?php echo $row["Admin_id"]?>">Delete</a></td>
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