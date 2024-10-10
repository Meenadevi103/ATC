<?php
include("../Assets/Connection/connection.php");
ob_start();
include("Head.php");

$message = "";

// Delete record if 'did' is set
if (isset($_GET["did"])) {
    $delQry = "DELETE FROM tbl_bookingvazhipaad WHERE bookingvazhipaad_id=" . $_GET["did"];
    if ($con->query($delQry)) {
        ?>
        <script>
            alert("Data Deleted");
            window.location = "MyVazhipad.php";
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Vazhipaad Booking Records</title>
    <style>
        /* CSS for devotional theme */
        body {
            background-image: url('../Images/devotional_background.jpg'); /* Add a suitable devotional background */
            background-size: cover;
            font-family: 'Georgia', serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .header h1 {
            text-align: center;
            font-size: 32px;
            color: #5a3a31;
        }

        .devotional-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .devotional-table th, .devotional-table td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #ccc;
        }

        .devotional-table th {
            background-color: #e8b747;
            color: white;
            font-size: 18px;
        }

        .devotional-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .devotional-table tr:hover {
            background-color: #ddd;
        }

        a {
            text-decoration: none;
            color: #f04b3d;
        }

        a:hover {
            color: #d1352b;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Vazhipaad Booking Records</h1>
        </div>
        <form id="form1" name="form1" method="post" action="">
            <table class="devotional-table">
                <tr>
                    <th>SI No</th>
                    <th>Vazhipaad</th>
                    <th>Name</th>
                    <th>Zodiac</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th colspan="2">Action</th>
                </tr>

                <?php 
                // Query to select bookings with relevant joins
                $selQry = "SELECT * FROM tbl_bookingvazhipaad b 
                           INNER JOIN tbl_vazhipaad v ON b.vazhipaad_id=v.vazhipaad_id 
                           INNER JOIN tbl_devotee d ON b.Devotee_id=d.Devotee_id 
                           INNER JOIN tbl_zodiacsign z ON b.zodiac_id=z.zodiac_id";
                $result = $con->query($selQry);
                $i = 0;

                // Display each booking in the table
                while ($data = $result->fetch_assoc()) {
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data["vazhipaad_name"]; ?></td>
                    <td><?php echo $data["Devotee_name"]; ?></td>
                    <td><?php echo $data["zodiac_name"]; ?></td>
                    <td><?php echo $data["bookingvazhipaad_date"]; ?></td>
                    <td><?php echo $data["vazhipaad_price"]; ?></td>
                    <td><a href="MyVazhipad.php?did=<?php echo $data["bookingvazhipaad_id"] ?>">Delete</a></td>
                    <td><a href="Vazhipad_Bill.php?vid=<?php echo $data["bookingvazhipaad_id"] ?>">Bill</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </div>

    <?php include("foot.php"); ?>
    <script>
        // Any additional JS scripts if needed
    </script>
</body>
</html>

<?php
ob_flush();
?>
