<?php
session_start(); // Start the session
session_unset();  // Unset all session variables
session_destroy();  // Destroy the session
echo "All session variables are unset, and the session is destroyed.";
?>
