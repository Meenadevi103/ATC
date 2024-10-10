
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
<form id="form1" name="form1" method="post" action="">
  <table width="265" border="1">
    <tr>
      <td width="59" height="30">SINO</td>
      <td width="59">Title</td>
      <td width="11">Context</td>
      <td width="16">Devotee</td>
      <td width="22">Reply</td>
      <td width="58">Action</td>
    </tr>
    <?php 
	$i=0;
	$sel="select * from tbl_complaint c inner join tbl_devotee d on c.Devotee_id=d.Devotee_id";
	$result=$con->query($sel);
	while($data=$result->fetch_assoc())
	{
		$i++;
	?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo $data['complaint_title'];?></td>
      <td><?php echo $data['complaint_content'];?></td>
      <td><?php echo $data['Devotee_name']; ?></td>
      <td><?php echo $data['complaint_reply']; ?></td>
      <td><a href="Reply.php?rid=<?php echo $data['complaint_id'];?>">Reply</a></td>
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