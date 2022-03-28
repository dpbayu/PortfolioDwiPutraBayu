<!-- PHP -->
<?php
require('../include/db.php');
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admin WHERE username='$username' && password='$password'";
    $run = mysqli_query($db,$query);
    $data = mysqli_fetch_array($run);
    if(count($data)>0){
    $_SESSION['isUserLoggedIn']=true;
    $_SESSION['username'] = $_POST['username'];
    echo "<script>window.location.href = 'index.php';</script>";
    } else {
    echo "<script>alert('Incorrect username id or password !')</script>";
    }
}
?>
<!-- PHP -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icon -->
    <link rel="shortcut icon" href="../assets/img/1636622810codesvein.png">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../admin/assets/css/stylelogin.css">
    <link rel="stylesheet" href="../admin/assets/css/responsivelogin.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>

</body>
<section>
    <div class="color"></div>
    <div class="color"></div>
    <div class="color"></div>
    <div class="box">
        <div class="square" style="--i:0;"></div>
        <div class="square" style="--i:1;"></div>
        <div class="square" style="--i:2;"></div>
        <div class="square" style="--i:3;"></div>
        <div class="square" style="--i:4;"></div>
        <div class="container">
            <div class="form">
                <h2>Portfolio Login</h2>
                <form method="post">
                    <div class="inputBox">
                        <input type="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="inputBox">
                        <button class="btn" type="submit" name="login">Login</button>
                    </div>
                    <p>Get back to website ? <a href="../index.php">Click Here</a></p>
                </form>
            </div>
        </div>
    </div>
</section>

</html>