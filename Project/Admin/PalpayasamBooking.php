<?php
include("../Assets/Connection/connection.php");
session_start();
include("Head.php");


if (isset($_POST["btn_submit"])) {
    $date = '';

  
    if (isset($_POST["txt_date"]) && !empty($_POST["txt_date"])) {
        $date = $_POST["txt_date"];
        $price=$_POST['txt_amt'];
        $qty=$_POST['txt_qty'];
        
		$selQry="select max(palpayasam_id) as id from tbl_palpayasam where Devotee_id=".$_SESSION['did'];
		$result=$con->query($selQry);
		$data=$result->fetch_assoc();
		$id=$data['id'];
		?>
        <script>
        window.location="PaymentGateway.php?pal=<?php echo $id ?>";
		</script>
        <?php
    }
		 else {
            echo "Error: " . $con->error;
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


<p>&nbsp;</p>
<table border="1" align="center">
    <tr>
        <td>SI No</td>
        <td>Date</td>
        <td>Amount</td>
    </tr>
      <?php
    $i=0;
    $sel="Select * from tbl_palpayasam";
	$result=$con->query($sel);
	while($row=$result->fetch_assoc())
	{
		$i++;
	?>
    <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $row["palpayasam_date"];?></td>

<td><?php echo $row["palpayasam_price"];?></td>



</tr>
    <?php
	}
	?>
</table>
<script src="../Assets/JQ/jQuery.js"></script>
 <script>

</script>
<p>&nbsp;</p>
</body>
</html>
<?php
include("Foot.php");
?>