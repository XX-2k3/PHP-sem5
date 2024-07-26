<!DOCTYPE html>
<html>
<head>
    <title>Sort Array</title>
</head>
<body>
    <h2>Sort an Array</h2>
    <form method="post" action="">
        <label for="numbers">Enter numbers (comma-separated):</label><br>
        <input type="text" id="numbers" name="numbers" required><br><br>
        <input type="submit" name="sort" value="Sort">
    </form>

    <?php
    if (isset($_POST['sort'])) {
        $numbers = $_POST['numbers'];
        // Convert the string to an array
        $array = explode(',', str_replace(' ', '', $numbers));

        // Convert each array item to an integer
        $array = array_map('intval', $array);

        // Sort the array
        sort($array);

        // Output the sorted array
        echo "<h3>Sorted Array:</h3>";
        echo "<p>" . implode(', ', $array) . "</p>";
    }
    ?>
</body>
</html>
