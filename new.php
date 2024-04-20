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
  </style>
  </head>
  <body>
		
		
	<!--Navigation Bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">THEME PARK MANAGER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav center">
          <a class="nav-link active" aria-current="page" href="#">Buy Tickets</a>
          <a class="nav-link" href="#">Manage Theme Parks</a>
          <a class="nav-link" href="#">Home</a>
          <a class="nav-link" href="#">Manage Rides</a>
          <a class="nav-link" href="#">Manage Employees</a>
          <a class="nav-link" href="#">Manage Shops</a>
        </div>
      </div>
    </div>
  </nav>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Park ID</th>
      <th scope="col">Location</th>
      <th scope="col">Park Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
        require_once('DBconnect.php');
        $sql="SELECT * FROM theme_parks";
        $result=mysqli_query($conn,$sql);  
        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)) {
    ?>
    <tr>
      <td><?php echo $row[0];?></td>
      <td><?php echo $row[1];?></td>
      <td><?php echo $row[2];?></td>
    <?php
            }
    }
    ?> 
    </tr>
  </tbody>
</table>
    </body>
</html>
