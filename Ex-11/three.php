<?php
session_start(); // Start the session
if (isset($_SESSION["user_preferences"])) {
    echo "User Preferences: ";
    print_r($_SESSION["user_preferences"]);
} else {
    echo "No user preferences found.";
}
?>
