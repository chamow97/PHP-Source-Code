<?php
// setcookie("username", "MS DHONI", time() + 3600, "/");
// setcookie("shortcookie", "expiryin10seconds", time() + 10, "/");
// if(isset($_COOKIE["username"])) {
//     echo "Welcome, " . $_COOKIE["username"];
// }
// if(isset($_COOKIE["shortcookie"])) {
//     echo "Welcome, " . $_COOKIE["shortcookie"];
// }

// session_start();
// $_SESSION["username"] = "JohnDoe";

session_start();
echo "Welcome, " . $_SESSION["username"];



?>
