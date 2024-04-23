<?php
require_once('dbconnect.php');
session_start();
if(isset($_POST['submit'])){
    $n = mysqli_real_escape_string($conn, $_POST['username']);
    $e = mysqli_real_escape_string($conn, $_POST['email']);
    $p = md5($_POST['password']);
    $u = $_POST['user_type'];
    $sql = "select * from admin where email = '$e' && password = '$p'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if($p === $row['password']) {
            $_SESSION['admin_name'] = $row['name'];
            header('location: home_page_admin.php');
            exit;
        } else {
            header('location:error_admin.php');
        }
    } else {
        header('location:error_admin.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login as admin</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class = "wrapper">
        <div class = "form-box login">
            <h2>Login</h2>
            <form action="#" method = "POST">
                <div class="input-box">
                    <span class = "icon"><ion-icon name="mail"></ion-icon></span>
                    <input type = "email" name="email" required placeholder="Email">
                </div>
                <div class = "input-box">
                    <span class = "icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required placeholder="Password">
                </div>
                <div class="input-box">
                    <select name="user_type">
                        <option value="admin">Admin</option>
                     </select>
                </div>
                <div class="remeber-forgot">
                    <label>
                        <input type="checkbox">Remember me  
                    </label>
                </div>
                <input type="submit" name="submit" value="sign in" class="form-btn">
                <p><a href="#">Forgot password?</a></p>
                <div class="login-register">
                    <p>New here? <a href="sign_up_admin.php" class="register-link">Sign up</a></p>
                </div>
                <button type="button" class="btn btn-light"><a href="login.php" style="text-decoration:none;">Back</a></button>
            </form>
        </div>
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>