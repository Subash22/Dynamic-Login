<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Profile Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="profile">
        <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
        <b id="logout" style="float: right;"><a href="logout.php">Log Out</a></b>
    </div>
</body>
</html>