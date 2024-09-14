<?php
session_start();

// Set a cookie and a session variable with the same name "test"
setcookie("test", "CookieValue", time() + 3600, "/");
$_SESSION["test"] = "SessionValue";

echo "Cookie 'test': " . ($_COOKIE["test"] ?? "Cookie not set") . "<br>";
echo "Session 'test': " . ($_SESSION["test"] ?? "Session not set");
?>
