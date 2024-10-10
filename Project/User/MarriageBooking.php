<?php
include("../Assets/Connection/connection.php");
session_start();
ob_start();
include("Head.php");

$message="";

if (isset($_POST["btn_submit"])) {
    $date = isset($_POST["txt_date"]) ? $_POST["txt_date"] : '';
    $time = isset($_POST["txt_time"]) ? $_POST["txt_time"] : '';
    $bride = isset($_POST["txt_bride"]) ? $_POST["txt_bride"] : '';
    $groom = isset($_POST["txt_groom"]) ? $_POST["txt_groom"] : '';

    $photo = $_FILES['txt_fileb']['name'];
    $path = $_FILES['txt_fileb']['tmp_name'];
    move_uploaded_file($path, "../Assets/Files/Marriage/" . $photo);

    $photo1 = $_FILES['txt_fileg']['name'];
    $path1 = $_FILES['txt_fileg']['tmp_name'];
    move_uploaded_file($path1, "../Assets/Files/Marriage/" . $photo1);

    $bdob = $_POST['dob_bride'];
    $gdob = $_POST['dob_groom'];

    $insQry = "INSERT INTO tbl_marriage (marriage_date, marriage_time, marriage_groom, marriage_bride, Devotee_id, bride_idproof, groom_idproof, bride_dob, groom_dob) VALUES ('$date', '$time', '$bride', '$groom', '".$_SESSION['did']."', '".$photo."', '".$photo1."', '".$bdob."', '".$gdob."')";
    
    if ($con->query($insQry)) {
        $selQry = "SELECT max(marriage_id) AS id FROM tbl_marriage WHERE Devotee_id=".$_SESSION['did'];
        $result = $con->query($selQry);
        $data = $result->fetch_assoc();
        $id = $data['id'];
        echo "<script>window.location='PaymentGateway.php?mar=$id';</script>";
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
    <title>Marriage Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <style>
        body {
            background-color: #1366e052;
            font-family: Arial, sans-serif;
        }
        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            padding: 30px;
            max-width: 800px;
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
        .form-control {
            width: 100%;
            padding: 10px;
        }
        .submit-btn {
            background-color: #2c3e50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .submit-btn:hover {
            background-color: #34495e;
        }
        .alert-info {
            background-color: #1366e052;
            color: #2c3e50;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3 class="text-center">Marriage Booking Form</h3>

        <form action="" method="post" enctype="multipart/form-data" id="form1">

            <?php
            $selp = "SELECT * FROM tbl_admin";
            $result = $con->query($selp);
            $data = $result->fetch_assoc();
            ?>
            <div class="alert alert-info text-center">
                <h4>Marriage Amount: <?php echo $data['marriage_amount']; ?>/-</h4>
            </div>

            <table class="table">
                <tr>
                    <th colspan="2" class="text-center">Marriage Details</th>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>
                        <input required type="date" name="txt_date" id="txt_date" class="form-control" onChange="getCount(this.value)" min="<?php echo date('Y-m-d'); ?>" required />
                    </td>
                </tr>
                <tr>
                    <td>Slot</td>
                    <td><input type="text" name="txt_slot" id="txt_slot" class="form-control" readonly required /></td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td><input type="text" name="txt_time" id="txt_time" class="form-control" required />

                    </td>
                </tr>
            </table>

            <table class="table">
                <tr>
                    <th colspan="2" class="text-center">Bride Details</th>
                </tr>
                <tr>
                    <td>Bride Name</td>
                    <td><input required type="text" name="txt_bride" id="txt_bride" class="form-control" required /></td>
                </tr>
                <tr>
                    <td>Bride DOB</td>
                    <td><input required type="date" name="dob_bride" id="dob_bride" class="form-control" required /></td>
                </tr>
                <tr>
                    <td>Bride ID Proof</td>
                    <td><input required type="file" name="txt_fileb" id="txt_fileb" class="form-control" required /></td>
                </tr>
            </table>

            <table class="table">
                <tr>
                    <th colspan="2" class="text-center">Groom Details</th>
                </tr>
                <tr>
                    <td>Groom Name</td>
                    <td><input required type="text" name="txt_groom" id="txt_groom" class="form-control" required /></td>
                </tr>
                <tr>
                    <td>Groom DOB</td>
                    <td><input required type="date" name="dob_groom" id="dob_groom" class="form-control" required /></td>
                </tr>
                <tr>
                    <td>Groom ID Proof</td>
                    <td><input required type="file" name="txt_fileg" id="txt_fileg" class="form-control" required /></td>
                </tr>
            </table>

            <div class="text-center mt-4">
                <button type="submit" name="btn_submit" class="submit-btn">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="../Assets/JQ/jQuery.js"></script>
    <script>
        function getCount(date) {
            $.ajax({
                url: "../Assets/AjaxPages/AjaxMarriageCheck.php?date=" + date,
                success: function(result) {
                    document.getElementById('txt_slot').value = result;
                }
            });
        }
    </script>
    <script>
  flatpickr("#txt_time", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true,
    minTime: "05:00",
    maxTime: "17:00",
  });
</script>

</body>
</html>
<?php
include("foot.php");
ob_flush();
?>
