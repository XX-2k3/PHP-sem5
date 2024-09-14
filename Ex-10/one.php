<?php
// Setting a cookie named "username" with value "Your Name" that expires in 1 hour
setcookie("username", "Your Name", time() + 3600, "/");
echo "Cookie 'username' has been set!";
?>
