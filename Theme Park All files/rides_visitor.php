<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buy Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
	
  <style>
    body { 
        background-image: url(../myProject/img/trans.png)
      }


        .navbar-expand-lg .navbar-collapse {
    display: flex!important;
    justify-content: space-around;
    flex-basis: auto;
    }

    .card{
  margin-left: 450px;
  position: relative;
  overflow: hidden;
  display: flex;
  
  width: 900px; /* Box dimensions */
  height: 700px; 
  
  border-radius: 4px; /* Styling */
  box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);  
  transition: box-shadow 0.56s ease-in-out; /* Animation */
  /* background-color: rgba(0,0,0,.2); /* for debugging */
}
/* Shows an outer shadow */
.card:hover{ /* Just for styling */
  cursor: pointer;
  box-shadow: 0 24px 38px 3px rgba(0,0,0,0.14), 0 9px 46px 8px rgba(0,0,0,0.12), 0 11px 15px -7px rgba(0,0,0,0.2);
}

/* Cards titles styling
------------------------------------------ */
.card__title{ /* Just for styling */
    align-self: flex-end; padding: 0.5rem;
    color: rgba(255,255,255,.90); font-size: 2rem;
    line-height: 1;font-weight: 600; 
    -webkit-text-stroke: 0.9px black;
  }  

/* Styles for:
** - Using IMG tag inside a container
------------------------------------------ */
/* The image container */
.card__thumbnail{
  position: relative;
  overflow: hidden;  
  display: flex;
  justify-content: center; /* horizontal center */
  align-items: center; /* vertical center */
  
  width: 100%; /* Thumbnail dimensions. */
  height: 100%; /*** Change the height to make the image smaller ***/
  /* background-color: rgba(0,0,0,.2);  /* for debugging */
  
}
/* Sets the image dimensions */
.card__thumbnail > img{ /* Tip: use 1:1 ratio images */
  height: 100%; /* or width when img.width > img.height */ 
}  
/* Styles the title inside the img container */
.card__thumbnail > .card__title{ /* Just for styling */
  position: absolute; left: 0; bottom: 0; }


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
          <a class="nav-link"  href="ticket_visitor.php">Buy Tickets</a>
          <a class="nav-link" href="theme_park_visitor.php">Theme Parks</a>
          
          <a class="nav-link active" aria-current="page" href="rides_visitor.php">Rides</a>
          <a class="nav-link" href="#">Employees</a>
          <a class="nav-link" href="#">Shops</a>
          

          <button type="button" class="btn btn-light" style="margin-left: 200px"><a href="login.php" style="text-decoration:none;">Logout</a></button>
        </div>
      </div>
    </div>
  </nav>
<br>
<h1 class="text-center">ALL OUR AMAZING RIDES !!!</h1>
<br>

<?php 
			require_once('dbconnect.php'); 
			$query = "SELECT ride_id, ride_name, park_name, age_limit, image_url FROM rides_admin"; 
			$row = mysqli_query($conn, $query); 
			// Fetching the data from database. 
			while ($r = mysqli_fetch_array($row)){
				echo '<div class="wrapper">
              <div class="row">
               <div class="column"> 
                <div class="card">

                  <figure class="card__thumbnail">

                    <img src="'.$r["image_url"].'">

                    <span class="card__title">'.$r["ride_name"].'<h3>'.$r["park_name"].'</h3><h5>Ride ID: '.$r["ride_id"].'</h5></span>

                    
                    </figure>
                  </div>
                </div>
              </div>
              </div>

              
               
						
						<br>';
			}
	
		?>


