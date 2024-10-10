<?php
include('../Assets/Connection/connection.php');
session_start();
include("Head.php");



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="279" border="1">
<tr>
<td width="45">SINO</td>
<td width="49">USER</td>
<td width="84">AMOUNT</td>
<td width="73">DATE</td>
</tr>
   <?php
    $i=0;
    $sel="select * from tbl_donation d inner join tbl_devotee u on d.Devotee_id=u.Devotee_id";
	$result=$con->query($sel);
	while($data=$result->fetch_assoc())
	{
		$i++;
	?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $data['Devotee_name']; ?></td>
<td><?php echo $data['donation_amount'];?></td>
<td><?php echo $data['donation_date'];?></td>
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