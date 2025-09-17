<?php
if (isset($_POST['number'])) {
    $number = (int)$_POST['number'];
    if ($number > 0) {
        echo '<style>table { border-collapse: collapse; } th, td { padding: 10px; text-align: center; border: 1px solid black; }</style>';
        echo '<table>';
        echo '<tr><th>*</th>';
        for ($i = 1; $i <= $number; $i++) {
            echo '<th>' . $i . '</th>';
        }
        echo '</tr>';

        for ($i = 1; $i <= $number; $i++) {
            echo '<tr><th>' . $i . '</th>';
            for ($j = 1; $j <= $number; $j++) {
                echo '<td>' . ($i * $j) . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p style="color: red;">Please enter a positive integer.</p>';
    }
}
?>

<form action="" method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" required>
    <input type="submit" value="Generate Table">
</form>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Multiplication Table</title>
</head>
<body>
<h1>Multiplication Table</h1>

<form method="post" action="">
    Enter a number: <input type="number" name="num" min="1" required>
    <input type="submit" value="Generate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n = intval($_POST["num"]);
    if ($n > 0) {
        echo "<table border='1' cellpadding='5'>";
        // header row
        echo "<tr><th>*</th>";
        for ($col = 1; $col <= $n; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";

        // table body
        for ($row = 1; $row <= $n; $row++) {
            echo "<tr><th>$row</th>";
            for ($col = 1; $col <= $n; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
</body>
</html>