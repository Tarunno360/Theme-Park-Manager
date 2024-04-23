<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
  <style>
          .navbar-expand-lg .navbar-collapse {
    display: flex!important;
    justify-content: space-around;
    flex-basis: auto;
    }
    #pic01{
  background-image: url(img/bg.jpg);
  background-position: center right;
  height: 1000px;
  color:rgb(255, 255, 255);
}
.welcome{
  color: rgba(255,255,255,.90); font-size: 4rem;
    line-height: 1;font-weight: 600; 
    -webkit-text-stroke: 0.9px black;
}
.checkout{
  color: rgba(255,255,255,.90); font-size: 2.3rem;
    line-height: 1;font-weight: 600; 
    -webkit-text-stroke: 0.9px black;
}








:root {
  --primary-color: #831cd1;
  
}

* {
  box-sizing: border-box;
}

body {
  
  margin: 0;
  padding: 0;
  min-height: 100vh;
  position: relative;
  background-color: aliceblue;
}

.container {
  max-width: 1280px;
  margin: auto;
  padding: 20px;
}

.header-container {
  display: flex;
  gap: 20px;
  justify-content: space-between;
  flex-direction: row;
  margin-right: 20px
}

.header-container h1 {
  font-size: 3rem;
  
  font-family: var(--font-stylish);
  margin-left: 200px;
}


h1 {
  margin-bottom: 20px;
  color: #333;
}

p {
  color: #555;
  line-height: 1.6;
  font-size: 1.5rem
}

.grid-container {
  display: grid;
  gap: 20px;
  margin: 50px auto 200px auto;
}

.grid-container {
  grid-template-columns: repeat(2, 1fr);
}

.grid-item {
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 12px;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
  display: flex;
  gap: 20px;
}
.grid-item-icon {
  margin-top: 30px;
  font-size: 2rem;
  color: var(--primary-color);
}
.grid-item h2 {
  font-size: 2rem;
  font-family: var(--font-stylish);
  border-bottom: 2px solid var(--primary-color);
  display: inline-block;
}
.grid-item:hover {
  transform: scale(1.03);
}

.desc{
  margin-left: 200px;
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
          <a class="nav-link active" aria-current="page" href="http://localhost/myProject/home_page_admin.php">Home</a>
          <a class="nav-link" href="ticket_admin.php">Manage Tickets</a>
          <a class="nav-link" href="http://localhost/myProject/theme_park_admin.php">Manage Theme Parks</a> 
          <a class="nav-link" href="rides_admin.php">Manage Rides</a>
          <a class="nav-link" href="#">Manage Employees</a>
          <a class="nav-link" href="#">Manage Shops</a>
          <button type="button" class="btn btn-light" style="margin-left: 200px"><a href="login.php" style="text-decoration:none;">Logout</a></button>
          
        </div>
      </div>
    </div>
  </nav>
        <section id="pic01">
        
            <div class="container">
              <br>
              <br>
              <br>
              <br>
              <br>
              
                <h1 class="welcome">
                  WELCOME TO THEME PARK MANAGER
                </h1>
            </div>
            <br>
              <br>
              <br>
        <div class="container">
      <!-- Header -->
  
      <div class="header-container">
        <div>
          <h1>WHAT YOU CAN DO AS ADMIN</h1>
          <p class = 'desc'>
            We will help you advertise your amazing theme park by showing off the shops, rides and sell their tickets. 
          </p>
        </div>
       
        
      </div>
        </section>
        <div class="grid-container">
        <div class="grid-item">
          <i class="fa-brands fa-slack grid-item-icon"></i>
          <div>
            <h2>Our Mission</h2>
            <p>
              Our mission is to make life easier for people who wants to browse and buy theme park tickets from home.
              
            </p>
          </div>
        </div>


        <div class="grid-item">
          <i class="fa-solid fa-people-group grid-item-icon"></i>
          <div>
            <h2>Our Team</h2>
            <p>
              Our team is made up of dedicated professionals who are passionate
              about showing relevant informations about local theme parks to you.

            </p>
          </div>
        </div>

        <div class="grid-item">
          <i class="fa-solid fa-chart-line grid-item-icon"></i>
          <div>
            <h2>Attractions</h2>
            <p>
              Get ready for excitement! Dive into a world of adventure with our
              thrilling rides, immersive attractions, and captivating shops.
              From pulse-pounding roller coasters to enchanting themed lands,
              there's something for everyone.
            </p>
          </div>
        </div>

        <div class="grid-item">
          <i class="fa-solid fa-shield-halved grid-item-icon"></i>
          <div>
            <h2>Safety and Security</h2>
            <p>
              Your safety is our top priority. Our registered theme parks are equipped with
              state-of-the-art safety measures and trained staff to ensure that
              you can enjoy your visit with peace of mind. From ride inspections
              to emergency protocols, we're dedicated to providing a secure
              environment for all our guests.
            </p>
          </div>
        </div>
      </div>

      
    </div>
    </body>
</html>