<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Course Purchase</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<style>

      body { 
        background-image: url(../myProject/img/bg2.png)
      }
			.container{
				max-width: 600px;
				margin:0 auto;
				padding:50px;
				box-shadow: rgba(100222222, 100, 11134, 0.2) 0px 7px 29px 0px;
			}
			.form-group{
				margin-bottom:30px;
			}
      h1 {
        -webkit-text-stroke: 1px black;
      }
		</style>
	</head>
	<body>
		
		
		<div class="container">
		
			<?php
				
				require_once "dbconnect.php"; 
				
				if (isset($_POST['buy'])){
          $r_id = $_POST['r_id'];
          $r_name = $_POST['r_name'];         
          $card = $_POST['card?'];
          $cash = $_POST['cash?'];
          $bkash = $_POST['bkash?'];
          $qty = $_POST['qty'];
          $pdate = date('Y-m-d',strtotime($_POST['pdate']));
          $v_id = $_POST['v_id'];

          $query = mysqli_query($conn, "INSERT INTO ride_tickets_visitors_book(ride_id, ride_name, card, cash, bkash, date, quantity, visitor_id) VALUES ('$r_id', '$r_name', '$card', '$cash','$bkash','$pdate','$qty', '$v_id')");

          if($query) {
            echo "<script>alert('CONGRATULATION!! TICKET PURCHASE SUCCESSFUL')</script>";
          } else {
            echo "<script>alert('ERROR')</script>";
          }
				} 
			?>
			
			<form  method="post">
				<div class="form-group">
        <h1 class="display-1"><p style="color:white;"><b>TICKET CONFIRMATION</b><p></h1>
				</div>
				<div class="form-group"> 
					<input type="number" class="form-control" placeholder="Enter Your Ride ID" name="r_id">
				</div>
				<div class="form-group"> 
					<input type="text" class="form-control" placeholder="Enter Your Ride Name" name="r_name">
				</div>
				<div class="form-group">
					<input type="text" placeholder="TYPE YES FOR CARD PAYMENT" name="card?" class="form-control">
				</div>

        <div class="form-group">
					<input type="text" placeholder="TYPE YES FOR CASH PAYMENT" name="cash?" class="form-control">
				</div>

        <div class="form-group">
					<input type="text" placeholder="TYPE YES FOR BKASH PAYMENT" name="bkash?" class="form-control">
				</div>

        <div class="form-group">
					<input type="date" placeholder="Enter Purchase Date" name="pdate" class="form-control">
				</div>

        <div class="form-group">
					<input type="number" placeholder="Enter Quantity of Tickets" name="qty" class="form-control">
				</div>

        <div class="form-group">
					<input type="number" placeholder="Enter Your Visitor ID" name="v_id" class="form-control">
				</div>

        <button type="submit" name="buy" class="btn btn-success">Buy Ticket</button>
				<a href="ticket_visitor.php">Back</a>
			</form>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
	</body>
</html>