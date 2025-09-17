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

