<?php
include("../Connection/Connection.php");
$selQry="select count(*) as count from tbl_marriage where marriage_status=1 and  marriage_date='".$_GET['date']."'";
$result=$con->query($selQry);
$data=$result->fetch_assoc();
$selCount="select marriage_count from tbl_admin";
$resCount=$con->query($selCount);
$dataCount=$resCount->fetch_assoc();
if($data['count']==NULL){
	$count=0;
}
else{
	$count=$data['count'];	
}
$rCount=$dataCount['marriage_count']-$count;
if($rCount<=0){
echo "No Slots Available";
}
else{
	echo $rCount." Available Slots";
}
?>