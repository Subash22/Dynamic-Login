<?php
$message = "";
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['repassword'])) {
        $message = "Username or Password is invalid";
    } else if ($_POST['password'] == $_POST['repassword']) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection = mysql_connect("localhost", "root", "");

        // To protect MySQL injection for Security purpose 
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);

        $db = mysql_select_db("bic", $connection);
        $view = mysql_query("select * from login where username='$username'", $connection);
        $rows = mysql_num_rows($view);
        if ($rows == 1) {
            $query = mysql_query("update login set password='$password' where username='$username'");

            $message = "Password Changed Successfully!";
            header("location: index.php");
        } else {
            $message = "Username not Found!";
        }
        mysql_close($connection);
    } else {
        $message = "Not a same password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forget Password</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <center>
        <div id="main">
            <h1>Have you forget your password again?</h1>
            <div id="login">
                <h2>Change Password!</h2>
                <form action="" method="post">
                    <label for="username">UserName :</label>
                    <input id="name" name="username" placeholder="Username" type="text">
                    <label for="password">Password :</label>
                    <input id="password" name="password" placeholder="********" type="password">
                    <label for="repassword">Retype Password :</label>
                    <input id="repassword" name="repassword" placeholder="********" type="password">

                    <input name="submit" type="submit" value=" New Password ">

                    <span id="error"><?php echo $message; ?></span><br><br>

                    <span><a href="index.php">Login Now!</a></span><br><br>
                    <span><a href="register.php">New User! Register Now</a></span><br>
                </form>
            </div>
        </div>
    </center>
</body>
</html>