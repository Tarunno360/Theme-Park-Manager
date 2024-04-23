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
    body { 
        background-image: url(../myProject/img/bg.jpg)
        
      }
      .row {
        padding-left: 20px;

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
          <a class="nav-link"  href="ticket_admin.php">Manage Tickets</a>
          <a class="nav-link" href="theme_park_admin.php">Manage Theme Parks</a>
          
          <a class="nav-link active" aria-current="page" href="rides_admin.php">Manage Rides</a>
          <a class="nav-link" href="#">Manage Employees</a>
          <a class="nav-link" href="#">Manage Shops</a>
          <button type="button" class="btn btn-light" style="margin-left: 200px"><a href="login.php" style="text-decoration:none;">Logout</a></button>
          
        </div>
      </div>
    </div>
  </nav>
<br>

<form method= "POST">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><h4>Ride ID</h4></label>
    <div class="col-sm-10">
      <input type="number" name="r_id" class="form-control" id="inputEmail3">
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><h4>Ride Name</h4></label>
    <div class="col-sm-10">
      <input type="text" name="r_name" class="form-control" id="inputPassword3">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><h4>Park Name</h4></label>
    <div class="col-sm-10">
      <input type="text" name="p_name" class="form-control" id="inputPassword3">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><h4>Maintenance Cost</h4></label>
    <div class="col-sm-10">
      <input type="int" name="m_cost" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><h4>Age Limit</h4></label>
    <div class="col-sm-10">
      <input type="text" name="age" class="form-control" id="inputPassword3">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><h4>IMAGE URL</h4></label>
    <div class="col-sm-10">
      <input type="text" name="image" class="form-control" id="inputPassword3">
    </div>
  </div>


  <br>
  <button type="submit" name="add" class="btn btn-success" style="margin-left: 20px;">Add Ride</button>
</form>
<br>
<br>
<br>

<form method= "POST">
  <div class="row mb-3" >
  <label for="inputPassword3" class="col-sm-2 col-form-label"><h4>Ride ID</h4></label>
  <div class="col-sm-10">
    <input type="number" name= "rd_id" class="form-control" id="inputPassword3">
    </div>
    </div>

    </span>
    
 

    <button type="submit" name="del" class="btn btn-danger">Delete Ride</button>
  </form>
<?php 
      include('dbconnect.php'); 
      if(isset($_POST['add'])){
        $r_id = $_POST['r_id'];
        $r_name = $_POST['r_name'];
        $a_lim = $_POST['age'];
        $m_cost = $_POST['m_cost'];
        $p_name = $_POST['p_name'];
        $img = $_POST['image'];

        $query = mysqli_query($conn, "INSERT INTO rides_admin(ride_id, ride_name, maintenance_cost, age_limit, park_name, image_url) VALUES ('$r_id', '$r_name', '$m_cost', '$a_lim', '$p_name', '$img')");

        if($query) {
          echo "<script>alert('RIDE INFO ADDED SUCCESSFULLY')</script>";
        } else {
          echo "<script>alert('there is an error')</script>";
        }
      }

      if(isset($_POST['del'])){
              $rd_id = $_POST['rd_id'];
              
      
              $q = mysqli_query($conn, "DELETE FROM rides_admin
              WHERE ride_id = $rd_id ");
              
      
              if($q) {
                echo "<script>alert('data deleted successfully')</script>";
              } else {
                echo "<script>alert('there is an error')</script>";
              }
            
    }


    ?>
<br>
<section class = 'Heading'>
<h1>RIDES INFORMATION</h1>

<br>

<table class="table table-dark table-striped">

  <thead class="thead-dark">
    <tr>
      <th scope="col">RIDE ID</th>
      <th scope="col">RIDE NAME</th>
      <th scope="col">PARK NAME</th>
      <th scope="col">MAINTENANCE COST</th>
      <th scope="col">AGE LIMIT</th>
    </tr>
  </thead>
  <tbody>
      <?php 
            require_once('dbconnect.php'); 
            $query = "SELECT ride_id, ride_name, park_name, maintenance_cost, age_limit  FROM rides_admin"; 
            
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



