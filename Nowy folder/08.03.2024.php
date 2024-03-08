<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style="border: 3px solid pink;">
<legend>Miesiące</legend>
<form method="post">
<?php
$miesiace=array('StyczeN','Luty','Marzec','Kwiecień','Maj','Czerwiec','Lipiec','Sierpień','Wrzesien','Październik','Listopad','Grudzien');
$wybraneMiesiace=isset($_POST['miesiace']) ? $_POST['miesiace'] : [];
foreach ($miesiace as $miesiac) {
echo "<input type='checkbox'id='Miesiac$miesiac'name='miesiace[]'value='$miesiac'".(in_array($miesiac, $wybraneMiesiace)?'checked':'').">";
echo "<label for='litera$miesiac'>$miesiac</label>";
}?>
<br>
<Br>
<input type="submit" value="Wybierz">
</form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($wybraneMiesiace)) {
echo "<p>Te litery zostały wybrane: " . implode(", ", $wybraneMiesiace) . ".</p>";} 
else {echo "<p>Żaden miesiac nie został wybrany.</p>";}}
?>
</fieldset>
    
</body>
</html>