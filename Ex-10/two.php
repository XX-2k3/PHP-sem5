<?php
// Checking if the cookie "username" is set
if (isset($_COOKIE["username"])) {
    echo "Cookie value: " . $_COOKIE["username"];
} else {
    echo "Cookie 'username' is not set.";
}
?>
