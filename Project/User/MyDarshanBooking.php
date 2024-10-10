<?php
include("../Assets/Connection/connection.php");
ob_start();
include("Head.php");

$message = "";

if (isset($_GET["did"])) {
    $delQry = "DELETE FROM tbl_darshan WHERE darshan_id=" . $_GET["did"];
    if ($con->query($delQry)) {
        ?>
        <script>
            alert("Data Deleted");
            window.location = "DarshanBooking.php";
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
    <title>Darshan Booking Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container1 {
            max-width: 800px; /* Adjusted to accommodate the table width */
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
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007BFF;
            color: white;
            text-align: center;
        }
        td a {
            color: #007BFF;
            text-decoration: none;
        }
        td a:hover {
            text-decoration: underline;
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
    <h1>Darshan Booking Management</h1>
    <table>
        <tr>
            <th>SI No</th>
            <th>Date</th>
            <th>Amount</th>
            
            <th>Action</th>
        </tr>
        
        <?php 
        $selQry = "SELECT * FROM tbl_darshan";
        $result = $con->query($selQry);
        $i = 0;
        while ($data = $result->fetch_assoc()) {
            $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $data["darshan_date"]; ?></td>
            <td><?php echo $data["darshan_amount"]; ?></td>
          
            <td>
                <a href="MyDarshanBooking.php?did=<?php echo $data["darshan_id"]; ?>">Delete</a> | 
                <a href="Darshan_Bill.php?daid=<?php echo $data["darshan_id"]; ?>">Bill</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>

<?php
include("foot.php");
ob_flush();
?>

</body>
</html>
