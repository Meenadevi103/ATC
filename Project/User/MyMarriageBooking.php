<?php
include("../Assets/Connection/connection.php");
session_start();
ob_start();
include("Head.php");

$message = "";

if (isset($_GET['cid'])) {
    $st = 2;
    $upqry = "UPDATE tbl_marriage SET marriage_status='" . $st . "' WHERE marriage_id='" . $_GET['cid'] . "'";
    if ($con->query($upqry)) {
        ?>
        <script>
            alert("Canceled");
            window.location = "MyMarriageBooking.php";
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
    <title>My Marriage Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f8fa;
            font-family: Arial, sans-serif;
        }
        .table-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            padding: 30px;
            max-width: 900px;
        }
        h3 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .cancel-btn {
            background-color: #e74c3c;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .cancel-btn:hover {
            background-color: #c0392b;
        }
        .alert-info {
            background-color: #dfe6e9;
            color: #2c3e50;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h3 class="text-center">My Marriage Booking</h3>

        <?php
        $selQry = "SELECT * FROM tbl_admin";
        $result = $con->query($selQry);
        $row = $result->fetch_assoc();
        ?>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>SI No</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Bride</th>
                    <th>Groom</th>
                    <th>Amount</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $selQry = "SELECT * FROM tbl_marriage WHERE devotee_id = '" . $_SESSION['did'] . "'";
            $result = $con->query($selQry);
            $i = 0;
            while ($data = $result->fetch_assoc()) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data["marriage_date"]; ?></td>
                    <td><?php echo $data["marriage_time"]; ?></td>
                    <td><?php echo $data["marriage_bride"]; ?></td>
                    <td><?php echo $data["marriage_groom"]; ?></td>
                    <td><?php echo $row["marriage_amount"]; ?></td>
                    <td><a href="MyMarriageBooking.php?cid=<?php echo $data["marriage_id"]; ?>" class="cancel-btn">Cancel</a></td>
                    <td><a href="Marriage_Bill.php?mid=<?php echo $data["marriage_id"]; ?>" class="cancel-btn">Bill</a></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <script src="../Assets/JQ/jQuery.js"></script>
</body>
</html>

<?php
include("foot.php");
ob_flush();
?>
