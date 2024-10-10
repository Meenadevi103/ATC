<?php
include("../Assets/Connection/connection.php");
session_start();
ob_start();
include("Head.php");

$message = "";

if (isset($_POST["btn_submit"])) {
    $amount = $_POST["txt_amount"];

    $insQry = "INSERT INTO tbl_donation (donation_amount, devotee_id, donation_date) VALUES ('$amount', " . $_SESSION['did'] . ", curdate())";
    if ($con->query($insQry)) {
        $sel = "SELECT max(donation_id) as id FROM tbl_donation WHERE devotee_id=" . $_SESSION['did'];
        $result = $con->query($sel);
        $data = $result->fetch_assoc();
        $id = $data['id'];
        ?>
        <script>
            window.location = "PaymentGateway.php?don=<?php echo $id ?>";
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
    <title>Donation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
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
            border: 1px solid #ddd;
        }
        input[type="text"] {
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
    <h1>Make a Donation</h1>
    <form method="post">
        <table>
            <tr>
                <td>Amount</td>
                <td><input type="text" name="txt_amount" id="txt_amount" required/></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>

    <div class="table-container">
        <h2 align="center">Your Donations</h2>
        <table>
            <tr>
                <td>SI No</td>
                <td>Amount</td>
                <td>Date</td>
            </tr>
            <?php
            $i = 0;
            $sel = "SELECT * FROM tbl_donation WHERE devotee_id=" . $_SESSION['did'];
            $result = $con->query($sel);
            while ($row = $result->fetch_assoc()) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["donation_amount"]; ?></td>
                    <td><?php echo $row["donation_date"]; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

<footer>
    Temple Devotee Management System &copy; 2024
</footer>

</body>
</html>

<?php
include("foot.php");
ob_flush();
?>
