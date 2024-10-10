<?php
include("../Assets/Connection/connection.php");
include("Head.php");

ob_start();
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table  border="1">
  <tr>
    <td>SI No</td>
     <td>Vazhipaad</td>
    <td>Name</td>
    <td>Zodiac</td>
    <td>Date</td>
    <td>Amount</td>
  </tr>
 



    <?php 
		  $selQry="select * from tbl_bookingvazhipaad b inner join tbl_vazhipaad v on b.vazhipaad_id=v.vazhipaad_id INNER JOIN tbl_devotee d on b.Devotee_id=d.Devotee_id inner join tbl_zodiacsign z on b.zodiac_id=z.zodiac_id";
		  $result=$con->query($selQry);
		  $i=0;
		  while($data=$result->fetch_assoc())
		  {
			  $i++;
	?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $data["vazhipaad_name"]; ?></td>
      <td><?php echo $data["Devotee_name"];?></td>
       <td><?php echo $data["zodiac_name"];?></td>
        <td><?php echo $data["bookingvazhipaad_date"];?></td>
      <td><?php echo $data["vazhipaad_price"]; ?></td>
     
      
    </tr>
     <?php
		  }
	?>
      </table>


</form>
</body>
</html>
<?php
include("foot.php");
ob_flush();
?>
