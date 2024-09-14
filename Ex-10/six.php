<?php
// Using cookie in a header before sending any HTML output
header("Set-Cookie: testcookie=PHPHeaderCookie; path=/; expires=" . gmdate('D, d M Y H:i:s \G\M\T', time() + 3600));
echo "Cookie has been set with header!";
?>
