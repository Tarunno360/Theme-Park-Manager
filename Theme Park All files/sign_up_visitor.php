<?php
require_once('dbconnect.php');
if(isset($_POST['submit'])){
    $n = mysqli_real_escape_string($conn, $_POST['username']);
    $e = mysqli_real_escape_string($conn, $_POST['email']);
    $p = md5($_POST['password']);
    $u = $_POST['user_type'];
    $sql = "select * from visitor where email = '$e' && password = '$p'";
    $result = mysqli_query($conn,$sql);
    $sql1 = "insert into visitor(username, email, password, user_type) values('$n','$e','$p','$u')";
    mysqli_query($conn,$sql1);
    header('location:login_visitor.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
        <div class = "form-box register">
            <h2>Create an account</h2>
            <form action="" method = "post">
                <div class="input-box">
                    <span class = "icon"><ion-icon name="person-circle"></ion-icon></span>
                    <input type = "text" name="username" required placeholder="Username">
                </div>
                <div class="input-box">
                    <span class = "icon"><ion-icon name="mail"></ion-icon></span>
                    <input type = "email" name="email" required placeholder="Email">
                </div>
                <div class = "input-box">
                    <span class = "icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required placeholder="password">
                </div>
                <div class="input-box">
                    <select name="user_type">
                        <option value="visitor">Visitor</option>
                     </select>
                </div>
                <input type="submit" name="submit" value="sign up" class="form-btn">
                <div class="login-register">
                    <p>Already have an account? <a href="login_visitor.php" class="login-link">Sign in</a></p>
                </div>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

