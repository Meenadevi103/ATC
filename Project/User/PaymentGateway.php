
<?php 
session_start();
include("../Assets/Connection/connection.php");
    if(isset($_POST["btnpay"])!="")
    {
		$amountQry="SELECT * from tbl_admin";
		 $res=$con->query($amountQry);
		 $data=$res->fetch_assoc();
        if(isset($_GET['mar'])){
			$amt=$data['marriage_amount'];
         $up ="update tbl_marriage set marriage_status=1 , marriage_amount='$amt' where marriage_id='".$_GET["mar"]."'";
		 $action="mar";
		 
		}
		if(isset($_GET['dar'])){
         $up ="update tbl_darshan set booking_status=1 where darshan_id='".$_GET["dar"]."'";
		 $action="dar";
		 
		}
		if(isset($_GET['vazh'])){
         $up ="update tbl_bookingvazhipaad set bookingvazhipaad_status=1 where bookingvazhipaad_id='".$_GET["vazh"]."'";
		 $action="var";
		 
		}
        
		if(isset($_GET['pal'])){
            $up ="update tbl_palpayasam set palpayasam_status=1 where palpayasam_id='".$_GET["pal"]."'";
            $action="var";
            
           }
           if(isset($_GET['don'])){
            $up ="update tbl_donation set donation_status=1 where donation_id='".$_GET["don"]."'";
            $action="var";
            
           }
		
		
		        if($con->query($up))
        	{
            
            ?>
            <script>
                window.location="Success.php?action=<?php echo $action ?>"
                </script>
            <?php
		}
		else{
			echo "Haiii";
		}
    }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        
        <title>Payment Gateway</title>
        <link rel="stylesheet" href="./style.css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Baloo+Bhaijaan|Ubuntu');
            
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Ubuntu', sans-serif;
            }

            body{
                background: #2196F3;
                margin: 0 10px;
            }

            .payment{
                background: #f8f8f8;
                max-width: 360px;
                margin: 80px auto;
                height: auto;
                padding: 35px;
                padding-top: 70px;
                border-radius: 5px;
                position: relative;
            }

            .payment h2{
                text-align: center;
                letter-spacing: 2px;
                margin-bottom: 40px;
                color: #0d3c61;
            }

            .form .label{
                display: block;
                color: #555555;
                margin-bottom: 6px;
            }

            .input{
                padding: 13px 0px 13px 25px;
                width: 100%;
                text-align: center;
                border: 2px solid #dddddd;
                border-radius: 5px;
                letter-spacing: 1px;
                word-spacing: 3px;
                outline: none;
                font-size: 16px;
                color: #555555;
            }

            .card-grp{
                display: flex;
                justify-content: space-between;
            }

            .card-item{
                width: 48%;
            }

            .space{
                margin-bottom: 20px;
            }

            .icon-relative{
                position: relative;
            }

            .icon-relative .fas,
            .icon-relative .far{
                position: absolute;
                bottom: 12px;
                left: 15px;
                font-size: 20px;
                color: #555555;
            }

            .btn{
                margin-top: 40px;
                padding: 12px;
                text-align: center;
            }


            .payment-logo{
                position: absolute;
                top: -50px;
                left: 50%;
                transform: translateX(-50%);
                width: 100px;
                height: 100px;
                background: #f8f8f8;
                border-radius: 50%;
                box-shadow: 0 0 5px rgba(0,0,0,0.2);
                text-align: center;
                line-height: 85px;
            }

            .payment-logo:before{
                content: "";
                position: absolute;
                top: 5px;
                left: 5px;
                width: 90px;
                height: 90px;
                background: #2196F3;
                border-radius: 50%;
            }

            .payment-logo p{
                position: relative;
                color: #f8f8f8;
                font-family: 'Baloo Bhaijaan', cursive;
                font-size: 58px;
            }

            input[type=submit] {
                background-color: #2196F3;
                border: none;
                color: #f8f8f8;
                font-size: 16px;
                padding: 12px;
                text-align: center;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
            }

            @media screen and (max-width: 420px){
                .card-grp{
                    flex-direction: column;
                }
                .card-item{
                    width: 100%;
                    margin-bottom: 20px;
                }
                .btn{
                    margin-top: 20px;
                }
            }
        </style>
    </head
    ><body>
        <!-- partial:index.partial.html -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">

        <div class="wrapper">
            <div class="payment">
                <div class="payment-logo">
                    <p>p</p>
                </div>
                <h2>Payment Gateway</h2>
                <div class="form">
                    <form method="post">
                        <div class="card space icon-relative">
                            <label class="label">Card holder:</label>
                            <input type="text" class="input" placeholder="Card Holder">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="card space icon-relative">
                            <label class="label">Card number:</label>
                            <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Card Number">
                            <i class="far fa-credit-card"></i>
                        </div>
                        <div class="card-grp space">
                            <div class="card-item icon-relative">
                                <label class="label">Expiry date:</label>
                                <input type="text" name="expiry-data" class="input" data-mask="00 / 00" placeholder="00 / 00">
                                <i class="far fa-calendar-alt"></i>
                            </div>
                            <div class="card-item icon-relative">
                                <label class="label">CVV:</label>
                                <input type="text" class="input" data-mask="000" placeholder="000">
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                        <div class="btn">
                            <input type="submit" name="btnpay" id="btnpay" value="Pay">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js'></script><script  src="./script.js"></script>

    </body>
</html>