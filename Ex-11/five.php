<?php
session_start();
// Assuming session data is stored in files
$sessionDir = session_save_path();
$sessionFiles = scandir($sessionDir);

// Filter valid session files
$activeSessions = array_filter($sessionFiles, function($file) {
    return strpos($file, 'sess_') === 0;
});

echo "Number of active sessions: " . count($activeSessions);
?>
