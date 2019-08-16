<?php 
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("bic", $connection);
session_start(); // Starting Session 
// Storing Session 
$user_check = $_SESSION['login_user'];
$ses_sql = mysql_query("select username from login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['username'];
if (!isset($login_session)) {
    echo "session expired";
    mysql_close($connection); // Closing Connection 
    header('Location: index.php');
}
