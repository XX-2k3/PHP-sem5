<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        table {
            width: 400px;
            border-collapse: collapse;
        }
        td {
            width: 30px;
            height: 30px;
            border: 1px solid black;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <h2>Chess Board</h2>
    <table>
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
                if (($row + $col) % 2 == 0) {
                    echo "<td class='white'></td>";
                } else {
                    echo "<td class='black'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
