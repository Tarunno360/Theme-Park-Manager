<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
  <style>
        .navbar-expand-lg .navbar-collapse {
    display: flex!important;
    justify-content: space-around;
    flex-basis: auto;
    }
    body{
      background-image: url(../myProject/img/tick.jpg);
      padding-bottom: 200px;

    }
    .Heading{
      margin-top : 200px
    }

    .input-group {
      margin-left : 200px
      marg
    }

    .form-control{
      margin-left : 20px
    }
  </style>
  </head>
  <body>
		
		
	<!--Navigation Bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home_page_admin.php">THEME PARK MANAGER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav center">
          <a class="nav-link" href="home_page_admin.php">Home</a>
          <a class="nav-link active" aria-current="page" href="ticket_admin.php">Manage Tickets</a>
          <a class="nav-link" href="theme_park_admin.php">Manage Theme Parks</a>
          
          <a class="nav-link" href="rides_admin.php">Manage Rides</a>
          <a class="nav-link" href="#">Manage Employees</a>
          <a class="nav-link" href="#">Manage Shops</a>
          <button type="button" class="btn btn-light" style="margin-left: 200px"><a href="login.php" style="text-decoration:none;">Logout</a></button>
        </div>
      </div>
    </div>
  </nav>
<br>



  <form method= "POST">
    
    <span class="input-group-text" id="inputGroup-sizing-default">Ride ID
    <input type="number" name= "r_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </span>


    <span class="input-group-text" id="inputGroup-sizing-default">Ride Name
    <input type="text"  name= "r_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </span>

    <span class="input-group-text" id="inputGroup-sizing-default">Ticket Price
    <input type="numbers" name= "price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </span>

    <span class="input-group-text" id="inputGroup-sizing-default">Admin ID<input type="numbers" name= "a_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </span>

    <span class="input-group-text" id="inputGroup-sizing-default">Park Name<input type="text" name= "p_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </span>

    <button type="submit" name="add" class="btn btn-success">Add Ticket</button>
  </form>
</div>
</div>
<br>
<br>
<br>


<div class="row mb-3" >
  <form method= "POST">
    <span class="input-group-text" id="inputGroup-sizing-default">Ride ID
    <input type="number" name= "rd_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </span>
    
 

    <button type="submit" name="del" class="btn btn-danger">Delete Ticket</button>
  </form>
</div>
</div>
</div>
</div>





	
		<?php 
      include('dbconnect.php'); 
      if(isset($_POST['add'])){
        $r_id = $_POST['r_id'];
        $r_name = $_POST['r_name'];
        // $bkash = $_POST['bkash?'];
        // $card = $_POST['card?'];
        // $cash = $_POST['cash?'];
        // $qty = $_POST['quantity'];
        // $pdate = date('Y-m-d',strtotime($_POST['pdate']));
        $price = $_POST['price'];
        $a_id = $_POST['a_id'];
        $p_name = $_POST['p_name'];

        $query = mysqli_query($conn, "INSERT INTO ride_tickets_admin_control(ride_id, ride_name, ticket_price, admin_id, park_name) VALUES ('$r_id', '$r_name', '$price', '$a_id', '$p_name')");

        if($query) {
          echo "<script>alert('TICKET ADDED SUCCESSFULLY')</script>";
        } else {
          echo "<script>alert('there is an error')</script>";
        }
      }

      if(isset($_POST['del'])){
        $rd_id = $_POST['rd_id'];
        

        $query = mysqli_query($conn, "DELETE FROM ride_tickets_admin_control
        WHERE ride_id = $rd_id ");

        if($query) {
          echo "<script>alert('data deleted successfully')</script>";
        } else {
          echo "<script>alert('there is an error')</script>";
        }
      }


    ?>


<section class = 'Heading'>
<h1>SOLD TICKETS INFORMATION</h1>



<table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">ADMIN ID</th>
      <th scope="col">TICKET ID</th>
      <th scope="col">RIDE ID</th>
      <th scope="col">RIDE NAME</th>
      <th scope="col">PARK NAME</th>
      <th scope="col">TICKET PRICE</th>
      <th scope="col">CARD PAYMENT</th>
      <th scope="col">CASH PAYMENT</th>
      <th scope="col">BKASH PAYMENT</th>
      <th scope="col">PURCHASE DATE</th>
      <th scope="col">QUANTITY</th>
      <th scope="col">VISITOR ID</th>
    </tr>
  </thead>
  <tbody>
      <?php 
            require_once('dbconnect.php'); 
            $query = "SELECT a.admin_id, v.ticket_id, v.ride_id, a.ride_name, a.park_name,a.ticket_price, v.card, v.cash, v.bkash,v.date, v.quantity, v.visitor_id FROM ride_tickets_visitors_book v, ride_tickets_admin_control a where v.ride_id = a.ride_id"; 
            $result=mysqli_query($conn,$query);  
        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)) {
    ?>
    <tr>
      <td><?php echo $row[0];?></td>
      <td><?php echo $row[1];?></td>
      <td><?php echo $row[2];?></td>
      <td><?php echo $row[3];?></td>
      <td><?php echo $row[4];?></td>
      <td><?php echo $row[5];?></td>
      <td><?php echo $row[6];?></td>
      <td><?php echo $row[7];?></td>
      <td><?php echo $row[8];?></td>
      <td><?php echo $row[9];?></td>
      <td><?php echo $row[10];?></td>
      <td><?php echo $row[11];?></td>
    <?php
            }
    }
    ?> 
    </tr>
  </tbody>
</table>
</section>




		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>