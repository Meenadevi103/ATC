<?php
include("../Assets/Connection/connection.php");
session_start();
ob_start();
include("Head.php");

$message = "";

if (isset($_POST["btn_submit"])) {
    $vazhipaad = $_POST["sel_vazhipad"];
    $name = $_POST["txt_name"];
    $zodiac = $_POST["sel_zodiac"];
    $date = $_POST["txt_date"];
    $amt = $_POST['txt_amt'];

    $insQry = "INSERT INTO tbl_bookingvazhipaad (bookingvazhipaad_date, vazhipaad_id, zodiac_id, bookingvazhipad_name, devotee_id, bookingvazhipaad_amt) 
               VALUES ('$date', '$vazhipaad', '$zodiac', '$name', '".$_SESSION['did']."', '$amt')";
    
    if ($con->query($insQry)) {
        echo "Inserted";    
    
        $selQry = "SELECT MAX(bookingvazhipaad_id) AS id FROM tbl_bookingvazhipaad WHERE Devotee_id=".$_SESSION['did'];
        $result = $con->query($selQry);
        $data = $result->fetch_assoc();
        $id = $data['id'];
        ?>
        <script>
        window.location = "PaymentGateway.php?vazh=<?php echo $id ?>";
        </script>
        <?php
    } else {
        echo "Error: " . $con->error;
    }
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vazhipaad Booking Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
  }
  .form-container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h2 {
    text-align: center;
    color: #333;
  }
  table {
    width: 100%;
    border-spacing: 15px;
  }
  td {
    padding: 10px 0;
  }
  input[type="text"], select, input[type="date"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  input[type="submit"] {
    width: 100%;
    background-color: #34495e;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #34495e;
  }
  .center {
    text-align: center;
  }
</style>
</head>

<body>
<div class="form-container">
  <h2>Vazhipaad Booking Form</h2>
  <form id="form1" name="form1" method="post" action="">
    <table>
      <tr>
        <td>Vazhipaad</td>
        <td>
          <select required name="sel_vazhipad" id="sel_vazhipad" onChange="getPrice(this.value)">
            <option value="">Select Vazhipaad</option>
            <?php
            $sel = "SELECT * FROM tbl_vazhipaad";
            $result = $con->query($sel);
            while ($row = $result->fetch_assoc()) {
            ?>
            <option value="<?php echo $row['vazhipaad_id']; ?>"><?php echo $row['vazhipaad_name']; ?></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Amount</td>
        <td><input  type="text" name="txt_amt" id="txt_amt" readonly /></td>
      </tr>
      <tr>
        <td>Name</td>
        <td><input required type="text" name="txt_name" id="txt_name" /></td>
      </tr>
      <tr>
        <td>Zodiac</td>
        <td>
          <select  required name="sel_zodiac" id="sel_zodiac">
            <option value="">Select Zodiac</option>
            <?php
            $sel = "SELECT * FROM tbl_zodiacsign";
            $result = $con->query($sel);
            while ($row = $result->fetch_assoc()) {
            ?>
            <option value="<?php echo $row['zodiac_id']; ?>"><?php echo $row['zodiac_name']; ?></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Date</td>
        <td><input required type="date" min="<?php echo date('Y-m-d') ?>" name="txt_date" id="txt_date" /></td>
      </tr>
      <tr>
        <td colspan="2" class="center">
          <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
        </td>
      </tr>
    </table>
  </form>
</div>

<script src="../Assets/JQ/jQuery.js"></script>
<script>
  function getPrice(vid) {
    $.ajax({
      url: "../Assets/AjaxPages/AjaxVazhipad.php?vid=" + vid,
      success: function(result) {
        document.getElementById('txt_amt').value = result;
      }
    });
  }
</script>
</body>
</html>

<?php
include("foot.php");
ob_flush();
?>
