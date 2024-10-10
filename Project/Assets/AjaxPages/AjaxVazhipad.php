<?php
include("../Connection/Connection.php");
$selQry="select * from tbl_vazhipaad where vazhipaad_id=".$_GET['vid'];
$result=$con->query($selQry);
$data=$result->fetch_assoc();
echo $data['vazhipaad_price'];
?>