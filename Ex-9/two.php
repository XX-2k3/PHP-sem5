<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <!-- Form for uploading a file -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" />
        <input type="submit" name="submit" value="Upload File" />
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Check if a file was uploaded
        if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0) {
            $fileSize = $_FILES['fileToUpload']['size']; // File size in bytes
            $fileType = $_FILES['fileToUpload']['type']; // MIME type of the file
            
            // Display file size and type
            echo "<p>File Size: " . $fileSize . " bytes</p>";
            echo "<p>File Type: " . $fileType . "</p>";
        } else {
            echo "<p>No file uploaded or there was an error uploading the file.</p>";
        }
    }
    ?>
</body>
</html>
