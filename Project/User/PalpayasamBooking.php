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
        $price = $_POST['txt_amt'];
        $qty = $_POST['txt_qty'];
        
        $insQry = "INSERT INTO tbl_palpayasam (palpayasam_date, Devotee_id, palpayasam_price, palpayasam_qty) VALUES ('$date', '" . $_SESSION['did'] . "', '$price', '$qty')";
        if ($con->query($insQry)) {
            echo "Inserted";
        }
        $selQry = "SELECT max(palpayasam_id) as id FROM tbl_palpayasam WHERE Devotee_id=" . $_SESSION['did'];
        $result = $con->query($selQry);
        $data = $result->fetch_assoc();
        $id = $data['id'];
        ?>
        <script>
            window.location = "PaymentGateway.php?pal=<?php echo $id ?>";
        </script>
        <?php
    } else {
        echo "Error: " . $con->error;
    }
}

if (isset($_GET["did"])) {
    $delQry = "DELETE FROM tbl_palpayasam WHERE palpayasam_id=" . $_GET["did"];
    if ($con->query($delQry)) {
        ?>
        <script>
            alert("Data Deleted")
            window.location = "PalpayasamBooking.php"
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palpayasam Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 700px;
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
        td, th {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        input[type="date"], input[type="number"], input[type="text"] {
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
        .table-container {
            margin-top: 20px;
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
<div class="container">
    <h1>Palpayasam Booking</h1>
    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr>
                <td>Date</td>
                <td><input  required type="date" name="txt_date" onchange="getCount(this.value)" min="<?php echo date('Y-m-d') ?>" id="txt_date" required /></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input required type="number" name="txt_qty" onchange="getAmt(this.value)" min="1" id="txt_qty" required /></td>
            </tr>
            <tr>
                <td>Per Litre Amount</td>
                <td><input type="text" name="txt_amount" id="txt_amount" readonly /></td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td><input type="text" name="txt_amt" id="txt_amt" readonly /></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>

  <div class="table-container">
    <h2 align="center">  Your Palpayasam Bookings</h2>
      <div align="center">
          <table>
            <tr>
              <th>SI No</th>
              <th>Date</th>
              <th>Amount</th>
              <th colspan="2">Action</th>
              </tr>
            <?php
            $i = 0;
            $sel = "SELECT * FROM tbl_palpayasam";
            $result = $con->query($sel);
            while ($row = $result->fetch_assoc()) {
                $i++;
                ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row["palpayasam_date"]; ?></td>
              <td><?php echo $row["palpayasam_price"]; ?></td>
              <td><a href="PalpayasamBooking.php?did=<?php echo $row["palpayasam_id"] ?>">Delete</a></td>
              <td><a href="Palpayasam_Bill.php?pid=<?php echo $row["palpayasam_id"] ?>">BIll</a></td>
              </tr>
            <?php
            }
            ?>
          </table>
    </div>
    </div>
</div>

<footer>
    Temple Devotee Management System &copy; 2024
</footer>

<script src="../Assets/JQ/jQuery.js"></script>
<script>
    var amount = 0;

    function getCount(date) {
        $.ajax({
            url: "../Assets/AjaxPages/AjaxPalpayasamCheck.php?date=" + date,
            success: function(result) {
                console.log(result);
                
                try {
                    var data = JSON.parse(result);
                    if (data.error) {
                        console.error(data.error);
                    } else {
                        if (data.count <= data.bCount) {
                            alert("Today's slot is full. Choose another day.");
                            document.getElementById('txt_date').value = "";
                            document.getElementById('txt_amt').value = "";
                        } else {
                            amount = data.amount;
                            document.getElementById('txt_qty').max = data.count - data.bCount;
                            document.getElementById('txt_amount').value = data.amount;
                        }
                    }
                } catch (e) {
                    console.error("Error parsing JSON response: " + e.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: " + status + " - " + error);
            }
        });
    }

    function getAmt(qty) {
        document.getElementById('txt_amt').value = qty * amount;
    }
</script>

</body>
</html>

<?php
include("foot.php");
ob_flush();
?>
