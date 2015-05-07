<?php

require_once(__DIR__ . "/../model/config.php");

$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE BINARY username = '$username'");

//"SELECT * FROM users WHERE BINARY username='$username' AND password='$password'") GOT THIS ONLINE TO MAKE  USERNAMES CASE SENSITIVE NOT SURE IF IT WORKS
if ($query->num_rows == 1) {
    $row = $query->fetch_array();
//makes you able to make a user login
    if ($row["password"] === crypt($password, $row["salt"])) {
        $_SESSION["authenticated"] = true;
        header("Location: " . $path . "index.php");
    } else {
        echo "<p>Invalid username and password</p>";
    }
}
    