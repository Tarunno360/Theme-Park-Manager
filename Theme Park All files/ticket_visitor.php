<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buy Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
  <style>
        .navbar-expand-lg .navbar-collapse {
    display: flex!important;
    justify-content: space-around;
    flex-basis: auto;
    }
    body{
      background-image: url(../myProject/img/bg2.png)

    }
    .card{
      background-image: url(../myProject/img/bg2.jpg)

    }
  </style>
  </head>
  <body>
		
		
	<!--Navigation Bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home_page_visitor.php">THEME PARK MANAGER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav center">
          <a class="nav-link" href="home_page_visitor.php">Home</a>
          <a class="nav-link active" aria-current="page" href="ticket_visitor.php">Buy Tickets</a>
          <a class="nav-link" href="theme_park_visitor.php">Theme Parks</a>
          
          <a class="nav-link" href="rides_visitor.php">Rides</a>
          <a class="nav-link" href="#">Employees</a>
          <a class="nav-link" href="#">Shops</a>
          <button type="button" class="btn btn-light" style="margin-left: 200px"><a href="login.php" style="text-decoration:none;">Logout</a></button>
        </div>
      </div>
    </div>
  </nav>
<br>
<h1 class="text-center">All Available Tickets</h1>

<?php 
			require_once('dbconnect.php'); 
			$query = "SELECT ticket_id, ride_id, ride_name, ticket_price, park_name FROM ride_tickets_admin_control"; 
			$row = mysqli_query($conn, $query); 
			// Fetching the data from database. 
			while ($r = mysqli_fetch_array($row)){
				echo '<div class="card">
                <div class="card-header">
                  Ticket
                </div>
							<div class="card-body">
								<h2 class="card-title">RIDE: '.$r["ride_name"].'</h2>
								<h3>Park Name: '.$r["park_name"].'</h5>

                <p class="card-text">All our rides are maintained properly and safety-checked monthly..</p>
                <h5 class="card-title">Price(TK): '.$r["ticket_price"].'</h4>
								
                <h6>Ride ID: '.$r["ride_id"].'</h6>'.				
								'<a href="purchase.php" class="btn btn-success" target="_blank">Buy Tickets</a>
							</div>
						</div>
						<br>';
			}
	
		?>





