<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f9f9f9;
    }
    .invoice-box {
      max-width: 800px;
      margin: auto;
      padding: 20px;
      border: 1px solid #eee;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .header img {
      max-width: 150px;
    }
    .company-details {
      text-align: right;
    }
    h1 {
      color: #333;
      margin-bottom: 0;
    }
    .invoice-details {
      margin-top: 20px;
      display: flex;
      justify-content: space-between;
    }
    .invoice-details div {
      margin-bottom: 10px;
    }
    .table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    .table th, .table td {
      border: 1px solid #ddd;
      padding: 8px;
    }
    .table th {
      background-color: #f4f4f4;
      text-align: left;
    }
    .total {
      font-weight: bold;
    }
    .notes {
      margin-top: 20px;
      font-style: italic;
    }
    .footer {
      margin-top: 20px;
      text-align: center;
      color: #777;
    }
  </style>
</head>
<?php
include("../Assets/Connection/connection.php");
$sel = "select * from tbl_bookingvazhipaad p inner join tbl_devotee d on p.Devotee_id=d.Devotee_id where bookingvazhipaad_id=".$_GET["vid"];
$result = $con->query($sel);
$row = $result->fetch_assoc();

$randomNumber = rand(111111, 999999);
?>
<body>
  <div class="invoice-box">
    <div class="header">
      <img src="../Assets/Templates/Main/img/logo1.jpg" width="110px" style="border-radius:50%;" alt="Company Logo">
      <div class="company-details">
        <h1>ATC</h1>
        <!-- <p>1234 Street Address<br>City, State, Zip Code<br>Phone: (123) 456-7890<br>Email: info@yourcompany.com</p> -->
      </div>
    </div>
    <div class="invoice-details">
      <div>
        <strong>Invoice No:</strong> <?php echo $randomNumber?><br>
        <strong>Date:</strong> <?php echo $row["bookingvazhipaad_date"]?>
      </div>
      <div>
        <strong>Billing To:</strong><br>
        <?php echo $row["Devotee_name"]?><br>
        <?php echo $row["Devotee_email"]?>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <!-- <th>Bride</th> -->
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><?php echo $row["bookingvazhipad_name"]?></td>
          <!-- <td><?php echo $row["marriage_bride"]?></td> -->
          <td><?php echo $row["bookingvazhipaad_amt"]?></td>
        </tr>
        <!-- <tr class="total">
          <td colspan="3">Subtotal</td>
          <td>$200.00</td>
        </tr>
        <tr class="total">
          <td colspan="3">Tax (10%)</td>
          <td>$20.00</td>
        </tr> -->
        <tr class="total">
          <td colspan="2"><strong>Total</strong></td>
          <td><strong><?php echo $row["bookingvazhipaad_amt"]?></strong></td>
        </tr>
      </tbody>
    </table>
    <p class="notes">Thank you for your business! Please make payment within 30 days.</p>
    <div class="footer">
      <!-- <p>Payment Methods: Bank Transfer, Credit Card, PayPal</p> -->
    </div>
  </div>
</body>
</html>
