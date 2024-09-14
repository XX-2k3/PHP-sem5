<?php
session_start();
$max_sessions = 3;

// Create an array to store session IDs for the user (can be stored in a database)
if (!isset($_SESSION['user_sessions'])) {
    $_SESSION['user_sessions'] = [];
}

// Check if the current session ID is already tracked
if (!in_array(session_id(), $_SESSION['user_sessions'])) {
    if (count($_SESSION['user_sessions']) >= $max_sessions) {
        // If more than 3 sessions are active, destroy the oldest session
        array_shift($_SESSION['user_sessions']);
        echo "Maximum session limit reached. The oldest session was destroyed.";
    }

    // Add the current session ID
    $_SESSION['user_sessions'][] = session_id();
}

echo "Active sessions for the user: " . count($_SESSION['user_sessions']);
?>
