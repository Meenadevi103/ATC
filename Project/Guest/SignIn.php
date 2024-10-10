<?php
include("../Assets/Connection/connection.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sign-up form submission
    if (isset($_POST['btn_signup'])) {
        $name = $_POST["txt_name"];
        $email = $_POST["txt_email"];
        $password = $_POST["txt_password"];
		$contact=$_POST['txt_contact'];
        
        $insQry = "INSERT INTO tbl_devotee(Devotee_name, Devotee_email, Devotee_password,devotee_contact) 
                   VALUES ('".$name."', '".$email."', '".$password."','".$contact."')";
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
    <style>
        body{
            background-image:url(../Assets/Templates/Main/img/atc.jpg);
            background-size:cover;
        }
        .main{
            background-color:#b2b2b2b3;
        }
    </style>
</head>
<body>
    <div class="main">    
        <input type="checkbox" id="chk" aria-hidden="true">

        <!-- Signup Form -->
        <div class="signup">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="chk" aria-hidden="true">Sign up</label>
        <input type="text" name="txt_name" placeholder="User Name" required="" title="Name Allows Only Alphabets,Spaces and First Letter Must Be Capital Letter" pattern="^[A-Z]+[a-zA-Z ]*$">
                <input type="text" name="txt_contact" placeholder="Contact" required="" pattern="[7-9]{1}[0-9]{9}" 
                title="Phone number with 7-9 and remaing 9 digit with 0-9">
        <input type="email" name="txt_email" placeholder="Email" required="">

        <input type="password" name="txt_password" placeholder="Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required name="txt_pass" >
        
        <button type="submit" name="btn_signup">Sign up</button>
    </form>
</div>

        <!-- Login Form -->
        <div class="login">
            <form action="" method="post">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="txt_email" placeholder="Email" required name="txt_email" >
                <input type="password" name="txt_password" placeholder="Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required name="txt_pass" >
                <button type="submit" name="btn_login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
