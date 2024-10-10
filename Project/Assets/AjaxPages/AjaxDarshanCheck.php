<?php
include("../Connection/connection.php");
$selQry="select count(*) as count from tbl_darshan where darshan_date='".$_GET['date']."'";
$result=$con->query($selQry);
$data=$result->fetch_assoc();
$selCount="select darshan_amount from tbl_darshan";
$resCount=$con->query($selCount);
$dataCount=$resCount->fetch_assoc();
if($data['count']==NULL){
	$count=0;
}
else{
	$count=$data['count'];	
}
$rCount=$dataCount['darshan_amount']-$count;
if($rCount<=0){
echo "No Slots Available";
}
else{
	echo $rCount." Available Slots";
}
?>