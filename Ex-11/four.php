<?php
session_start(); // Start the session
// Storing an array of user preferences in the session
$_SESSION["user_preferences"] = [
    "theme" => "dark",
    "language" => "English",
    "font_size" => "14px"
];
echo "User preferences have been stored in the session.";
?>
