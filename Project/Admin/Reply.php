<?php
include("../Assets/connection/connection.php");
include("Head.php");


if (isset($_POST["btn_SUBMIT"])) {
    $reply = $_POST["txt_reply"];

    // Assuming you have a table named 'tbl_reply' and a column 'reply_content'
    $insQry = "update tbl_complaint set complaint_reply='".$reply."' where complaint_id=".$_GET['rid'];
    if ($con->query($insQry)) {
        ?>
        <script>
        alert("Replyed");
		window.location="Complaints.php";
        </script>
        <?php
    } else {
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
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td width="96">Reply</td>
      <td width="88"><label for="txt_reply"></label>
      <textarea name="txt_reply" id="txt_reply" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="38" colspan="2"><div align="center">
        <input type="submit" name="btn_SUBMIT" id="btn_SUBMIT" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include("Foot.php");
?>