<?php
include("../Assets/Connection/connection.php");
session_start();
ob_start();
include("Head.php");

$message = "";

if (isset($_POST["btn_submit"])) {
    $date = '';

    if (isset($_POST["txt_date"]) && !empty($_POST["txt_date"])) {
        $date = $_POST["txt_date"];
        $count = $_POST['txt_count'];
        $amt = $_POST['txt_amt'];
        $time= $_POST['sel_time'];
        $insQry = "INSERT INTO tbl_darshan (darshan_date, devotee_id, darshan_amount, darshan_count,darshan_time) VALUES ('$date', '".$_SESSION['did']."', '$amt', '$count','$time')";
        if ($con->query($insQry)) {
            echo "Inserted";
        } 
        $selQry = "SELECT max(darshan_id) as id FROM tbl_darshan WHERE Devotee_id=".$_SESSION['did'];
        $result = $con->query($selQry);
        $data = $result->fetch_assoc();
        $id = $data['id'];
        ?>
        <script>
        window.location="PaymentGateway.php?dar=<?php echo $id ?>";
        </script>
        <?php
    } else {
        echo "Error: " . $con->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darshan Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container1 {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        input[type="date"], input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #f1f1f1;
            color: #666;
        }
    </style>
</head>
<body>

<div class="container1">
    <h1>Darshan Booking</h1>
    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr>
                <td>Date</td>
                <td><input  required type="date" name="txt_date" min="<?php echo date('Y-m-d') ?>" id="txt_date" required /></td>
            </tr>
            <tr>
        <td>Time</td>
        <td>
          <select  required name="sel_time" id="sel_time">
            <option value="">Select Time</option>
            <?php
            $sel = "SELECT * FROM tbl_time";
            $result = $con->query($sel);
            while ($row = $result->fetch_assoc()) {
            ?>
            <option value="<?php echo $row['time_id']; ?>"><?php echo $row['time']; ?></option>
            <?php } ?>
          </select>
        </td>
      </tr>
            <tr>
                <td>Count</td>
                <td><input required type="text" name="txt_count" id="txt_count" onkeyup="getAmt(this.value)" required /></td>
            </tr>
            <tr>
                <td>Amount</td>
                <td><input type="text" name="txt_amt" id="txt_amt" readonly placeholder="Amount per head is 100" /></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>
</div>

<script src="../Assets/JQ/jQuery.js"></script>
<script>
    function getAmt(count) {
        $.ajax({
            url: "../Assets/AjaxPages/AjaxDarshan.php",
            success: function(result) {
                var total = count * result;
                document.getElementById("txt_amt").value = total;
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
