<?php
include("../Connection/Connection.php");

$selQry = "select * from tbl_admin";
$result = $con->query($selQry);

if($result && $data = $result->fetch_assoc()) {
    $count = $data['palpayasam_count'];
    $amt = $data['palpayasam_amount'];
    $qry="SELECT count(*) as count FROM tbl_palpayasam where palpayasam_date='".$_GET['date']."' and palpayasam_status=1";
    $res =$con->query($qry);
    $data2=$res->fetch_assoc();
    if($data2['count']==NULL){
        $bCount=0;
    }
    else{
    $bCount=$data2['count'];
}
    // Return the data as JSON
    echo json_encode(['count' => $count, 'amount' => $amt, 'bCount' => $bCount]);
} else {
    echo json_encode(['error' => 'Data not found']);
}
?>
