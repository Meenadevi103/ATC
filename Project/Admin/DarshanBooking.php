
<?php
include("../Assets/Connection/connection.php");
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
<table  border="1">
  <tr>
    <td>SI No </td>
    <td>Date</td>
    <td>Amount</td>
  
  </tr>
  
  <?php 
		  $selQry="select * from tbl_darshan ";
		  $result=$con->query($selQry);
		  $i=0;
		  while($data=$result->fetch_assoc())
		  {
			  $i++;
	?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $data["darshan_date"]; ?></td>
     
       <td><?php echo $data["darshan_amount"];?></td>
     
           
     
      


  
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