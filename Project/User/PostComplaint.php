
<?php
include("../Assets/Connection/connection.php");
ob_start();
include("Head.php");

$message="";
	
if(isset($_POST["btn_submit"]))
{
	$title=$_POST['txt_title'];
	$content=$_POST['txt_content'];

$insQry="insert into tbl_complaint(complaint_title,complaint_content)values('".$title."','".$content."')";
if($con->query($insQry))
	{
		echo "inserted";
	}

}
if(isset($_GET["did"]))
	{
		$did = $_GET["did"];
		$delqry = "delete from tbl_complaint  where complaint_id=".$did;
		if($con->query($delqry))
		{
			?>
      	<script>
			window.location="Complaint.php";
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
      <td>Title</td>
      <td><label for="txt_title"></label>
      <input required type="text" name="txt_title" id="txt_title" /></td>
    </tr>
    <tr>
      <td>Content</td>
      <td><label for="txt_content"></label>
      <textarea required name="txt_content" id="txt_content" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table>
  <table width="258" height="102" border="1">
    <p>&nbsp;</p>
    <tr>
      <td width="54" height="45">SlNo</td>
      <td width="89">title</td>
      <td width="100">content</td>
      
      <td width="93">Action</td>
  </tr>
    
     <?php
  		$selqry="select * from tbl_complaint";
		$result = $con->query($selqry);
		$i=0;
		while($data = $result->fetch_assoc())
		{
			$i++;
			?>
  <tr>
     <td><?php echo $i; ?></td>
    <td><?php echo $data["complaint_title"];?></td>
    <td><?php echo $data["complaint_content"];?></td>
    <td>
    	<a href="Complaint.php?did=<?php echo $data["complaint_id"];?>">Delete</a>
    </td>
    
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

