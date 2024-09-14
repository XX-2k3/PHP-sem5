<?php
// To delete a cookie, set its expiration time to a past value
setcookie("username", "", time() - 3600, "/");
echo "Cookie 'username' has been deleted!";
?>
