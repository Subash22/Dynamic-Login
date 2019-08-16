<?php
$message = "";
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $message = "Username or Password is invalid";
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $connection = mysql_connect("localhost", "root", "");

        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);

        $db = mysql_select_db("bic", $connection);
        $query = mysql_query("insert into login(username, password) values('$username', '$password')", $connection);
        
        header("location: index.php");
        mysql_close($connection);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Account!</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <center>
        <div id="main">
            <h1>Do you want to crate new Account?</h1>
            <div id="login">
                <h2>Sign UP!</h2>
                <form action="" method="post">
                    <label for="username">UserName :</label>
                    <input id="name" name="username" placeholder="Username" type="text">
                    <label for="password">Password :</label>
                    <input id="password" name="password" placeholder="********" type="password">

                    <input name="submit" type="submit" value=" Register ">

                    <span id="error"><?php echo $message; ?></span><br><br>
                    <span><a href="index.php">Login Now!</a></span><br><br>
                    <span><a href="register.php">New User! Register Now</a></span><br>
                </form>
            </div>
        </div>
    </center>
</body>
</html>