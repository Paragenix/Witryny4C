<!DOCTYPE html>
<html>
<head>
    <title>Tabelka 3x3</title>
</head>
<body>

<table border="1">
    <?php
    for ($i = 1; $i <= 3; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 3; $j++) {
            echo "<td>Wiersz " . $i . ", Kolumna " . $j . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
