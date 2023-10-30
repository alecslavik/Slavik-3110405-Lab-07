<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    echo "<h2>Multiplication Table for $number</h2>";
    echo "<table border='1'>";
    
    echo "<tr><td></td>";
    for ($j = 1; $j <= $number; $j++) {
        echo "<td><strong>$j</strong></td>";
    }
    echo "</tr>";

    for ($i = 1; $i <= $number; $i++) {
        echo "<tr>";
        echo "<td><strong>$i</strong></td>";
        for ($j = 1; $j <= $number; $j++) {
            $result = $i * $j;
            echo "<td>$result</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

