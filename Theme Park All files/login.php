<?php
require_once('dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
      <div class="form-box login">
        <h1>Welcome to the Theme Park Manager</h1>
        <form action="">
          <div class="input-box">
            <p><b>Select an user type:</b></p>
              <select id="pageSelect" onchange="redirectToPage()">
                <option value="">Login as:</option>
                <option value="login_admin.php">Admin</option>
                <option value="login_visitor.php">Visitor</option>
              </select>
          </div>
        </form>

      </div>
    </div>
      <script>
        function redirectToPage() {
          var selectedPage = document.getElementById("pageSelect").value;
          if (selectedPage) {
            window.location.href = selectedPage;
          }
        }
        </script>

    </div>
</body>
</html>