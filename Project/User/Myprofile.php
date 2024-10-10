<?php
include("../Assets/Connection/Connection.php");

session_start();
ob_start();
include("Head.php");

$message = "";

// Fetch the logged-in devotee's profile information
$selqryone = "SELECT * FROM tbl_Devotee WHERE Devotee_id=" . $_SESSION["did"];
$resultone = $con->query($selqryone);
$dataone = $resultone->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-box {
            text-align: center;
        }
        .title {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .profile-table {
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        .profile-table td {
            padding: 15px;
            font-size: 18px;
        }
        .profile-table .label {
            text-align: right;
            font-weight: bold;
            color: #555;
            width: 40%;
        }
        .profile-table .data {
            text-align: left;
            width: 60%;
            color: #333;
        }
        .button-container {
            margin-top: 20px;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            color: white;
            background-color: #0066cc;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #004080;
        }
        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="profile-box">
        <h1 class="title">My Profile</h1>
        <table class="profile-table" border="1">
            <tr>
                <td class="label">Name:</td>
                <td class="data"><?php echo $dataone["Devotee_name"]; ?></td>
            </tr>
            <tr>
                <td class="label">Email:</td>
                <td class="data"><?php echo $dataone["Devotee_email"]; ?></td>
            </tr>
            <tr>
                <td class="label">Contact:</td>
                <td class="data"><?php echo $dataone["devotee_contact"]; ?></td>
            </tr>
        </table>

        <div class="button-container">
            <button class="btn" onclick="location.href='EditProfile.php'">Edit Profile</button>
            <button class="btn" onclick="location.href='ChangePassword.php'">Change Password</button>
        </div>
    </div>
</div>

<footer>
    <p>Temple Devotee Management System &copy; 2024</p>
</footer>

</body>
</html>

<?php
include("foot.php");
ob_flush();
?>