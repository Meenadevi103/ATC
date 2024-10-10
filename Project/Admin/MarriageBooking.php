<?php
include("../Assets/Connection/connection.php");
session_start();
include("Head.php");



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Marriage Booking</title>
</head>

<body>
<?php 
      $selQry="select * from tbl_admin";
      $result=$con->query($selQry);
      $row=$result->fetch_assoc();
?>
<table  border="1" align="center">
  <tr>
    <td>SI No</td>
    <td>Date</td>
    <td>Time</td>
    <td>Bride</td>
    <td>Bride ID Proof</td>
    <td>Groom</td>
        <td>Groom ID Proof</td>

    <td>Amount</td>
  </tr>
   <?php 
		  $selQry="select * from tbl_marriage";
		  $result=$con->query($selQry);
		  $i=0;
		  while($data=$result->fetch_assoc())
		  {
			  $i++;
	?>
    <tr>
      <td height="123"><?php echo $i; ?></td>
      <td><?php echo $data["marriage_date"] ?></td>
      <td><?php echo $data["marriage_time"]?></td>
       <td><?php echo $data["marriage_bride"]?></td>
       <td><img src="../Assets/Files/Marriage/<?php echo $data["bride_idproof"]?>" width="123" height="119"/></td>  
      <td><?php echo $data["marriage_groom"]?></td>
       <td><img src="../Assets/Files/Marriage/<?php echo $data["groom_idproof"]?>" width="125" height="121"/></td>  
	  <td><?php echo $data["marriage_amount"]?>/-</td>  
   </tr>
    <?php
		  }
		  ?>
</table>
</body>
</html>
<?php
include("Foot.php");
?>