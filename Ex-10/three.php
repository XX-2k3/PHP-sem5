<?php
// Editing the value of the cookie "username"
setcookie("username", "Updated Name", time() + 3600, "/");
echo "Cookie 'username' has been updated!";
?>
