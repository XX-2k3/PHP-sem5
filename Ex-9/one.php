<?php
echo $_SERVER['PHP_SELF'];
// Returns the filename of the currently executing script (relative to the root directory)

echo $_SERVER['GATEWAY_INTERFACE'];
// Returns the version of the Common Gateway Interface (CGI) the server is using, usually "CGI/1.1"

echo $_SERVER['SERVER_ADDR'];
// Returns the IP address of the server

echo $_SERVER['SERVER_NAME'];
// Returns the server's hostname, DNS name, or IP address

echo $_SERVER['SERVER_SOFTWARE'];
// Returns information about the server software

echo $_SERVER['SERVER_PROTOCOL'];
// Returns the name and version of the server protocol (e.g., "HTTP/1.1")

echo $_SERVER['REQUEST_METHOD'];
// Returns the request method used to access the page (e.g., "GET", "POST")

echo $_SERVER['HTTP_USER_AGENT'];
// Returns the user agent string sent by the browser

echo $_SERVER['SCRIPT_NAME'];
// Returns the path of the current script (relative to the root directory)

echo $_SERVER['REQUEST_URI'];
// Returns the URI that was given in order to access the page
?>
