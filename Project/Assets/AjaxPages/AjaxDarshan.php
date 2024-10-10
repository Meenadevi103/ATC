

<?php
include("../Connection/Connection.php");
$selQry="select * from tbl_admin";
$result=$con->query($selQry);
$data=$result->fetch_assoc();
echo $data['darshan_amt'];
?>