<?php
session_start(); // Start the session
if (isset($_SESSION["userone"])) {
    echo "Session variable 'userone' is set to: " . $_SESSION["userone"];
} else {
    echo "Session variable 'userone' is not set.";
}
?>
