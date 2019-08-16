<?php 
include('login.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form in PHP with Session</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <center><div id="main">
        <h1>Login Page</h1>
        <div id="login">
            <h2>Login Form</h2>
            <form action="" method="post">
                <label for="username">UserName :</label>
                <input id="name" name="username" placeholder="Username" type="text">
                <label for="password">Password :</label>
                <input id="password" name="password" placeholder="********" type="password">

                <input name="submit" type="submit" value=" Login ">

                <span id="error"><?php echo $error; ?></span><br><br>
                <span><a href="forgetpassword.php">Forget Password!</a></span><br><br>
                <span><a href="register.php">New User! Register Now</a></span><br>
            </form>
        </div>
    </div></center>
</body>
</html>