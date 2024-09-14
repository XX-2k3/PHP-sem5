<?php
session_start(); // Start the session
$_SESSION["userid"] = 10020; // Set the session variable
echo "Session variable 'userid' is set to " . $_SESSION["userid"];
?>
