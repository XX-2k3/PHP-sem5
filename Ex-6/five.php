<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Multiplication Table (6x6)</h2>
    <table>
        <?php
        for ($i = 1; $i <= 6; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 6; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
