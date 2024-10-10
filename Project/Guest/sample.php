<?php
include("../Assets/Connection/connection.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sign-up form submission
    if (isset($_POST['btn_signup'])) {
        $name = $_POST["txt_name"];
        $email = $_POST["txt_email"];
        $password = $_POST["txt_password"];
        $photo = $_FILES['file_photo']["name"];
		$contact=$_POST['txt_contact'];
        $temp = $_FILES['file_photo']["tmp_name"];
        move_uploaded_file($temp, "../Assets/Files/User/" . $photo);
        $proof = $_FILES['file_proof']["name"];
        $temp2 = $_FILES['file_proof']["tmp_name"];
        move_uploaded_file($temp2, "../Assets/Files/User/" . $proof);
        
        $insQry = "INSERT INTO tbl_devotee(Devotee_name, Devotee_email, devotee_photo, Devotee_proof, Devotee_password,devotee_contact) 
                   VALUES ('$name', '$email', '$photo', '$proof', '$password','".$contact."')";
        if ($con->query($insQry)) {
            ?>
<script>
	alert("Registration Successfull")
</script>
			<?php
        } else {
            echo "Error: " . $con->error;
        }
    }

    // Login form submission
    if (isset($_POST['btn_login'])) {
        $email = $_POST["txt_email"];
        $password = $_POST["txt_password"];

        // Check admin login
        $selAdmin = "SELECT * FROM tbl_admin WHERE Admin_email = '$email' AND Admin_password = '$password'";
        $resultAdmin = $con->query($selAdmin);

        if ($dataAdmin = $resultAdmin->fetch_assoc()) {
            $_SESSION['aid'] = $dataAdmin["Admin_id"];
            $_SESSION['aname'] = $dataAdmin["Admin_name"];
            header("location: ../Admin/Homepage.php");
            exit();
        }

        // Check devotee login
        $selDevotee = "SELECT * FROM tbl_devotee WHERE Devotee_email = '$email' AND Devotee_password = '$password'";
        $resultDevotee = $con->query($selDevotee);

        if ($dataDevotee = $resultDevotee->fetch_assoc()) {
            $_SESSION['did'] = $dataDevotee["Devotee_id"];
            $_SESSION['dname'] = $dataDevotee["Devotee_name"];
            header("location: ../User/Homepage.php");
            exit();
        }

		?>
		<script>
			alert("Login Failed")
		</script>
					<?php
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login and Signup</title>
    <link rel="stylesheet" type="text/css" href="../Assets/Templates/Guest/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">    
        <input type="checkbox" id="chk" aria-hidden="true">

        <!-- Signup Form -->
        <div class="signup">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="chk" aria-hidden="true">Sign up</label>
        <input type="text" name="txt_name" placeholder="User Name" required="">
                <input type="text" name="txt_contact" placeholder="Contact" required="">
        <input type="email" name="txt_email" placeholder="Email" required="">

        <input type="password" name="txt_password" placeholder="Password" required="">
        

        <!-- Additional fields with labels
        <label for="file_photo" style="color: #fff;margin: 10px;font-size: 16px;font-weight: 100;">Photo Upload</label>
        <input type="file" name="file_photo" id="file_photo" required="">

        <label for="file_proof" style="color: #fff;margin: 10px;font-size: 16px;font-weight: 100;">Proof Upload</label>
        <input type="file" name="file_proof" id="file_proof" required=""> -->

        <button type="submit" name="btn_signup">Sign up</button>
    </form>
</div>

        <!-- Login Form -->
        <div class="login">
            <form action="" method="post">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="txt_email" placeholder="Email" required="">
                <input type="password" name="txt_password" placeholder="Password" required="">
                <button type="submit" name="btn_login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
