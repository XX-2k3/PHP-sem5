<!DOCTYPE html>
<html>

<head>
    <title>Sort Array</title>
</head>

<body>
    <h2>remove duplicates from Array</h2>
    <form method="post" action="">
        <label for="numbers">Enter numbers (comma-separated):</label><br>
        <input type="text" id="numbers" name="numbers" required><br><br>
        <input type="submit" name="remove duplicates" value="remove duplicates">
    </form>

    <?php
    function removeDuplicates($array)
    {
        return array_values(array_unique($array));
    }
    $numbers = $_POST['numbers'];
    // Convert the string to an array
    $array = explode(',', str_replace(' ', '', $numbers));

    // Convert each array item to an integer
    $array = array_map('intval', $array);

    // Sort the array

    sort($array);
    $uniqueArray = removeDuplicates($array);

    echo "Original array: " . implode(', ', $array) . "\n";
    echo "Array without duplicates: " . implode(', ', $uniqueArray) . "\n";
    ?>
</body>

</html>