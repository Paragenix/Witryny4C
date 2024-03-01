<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    label { margin-right: 20px;}
</style>

</head>
<body>
<fieldset style="border: 3px solid blue;">
<legend>Alfabeto</legend>
<form method="post">
<?php
$litery=range('a','z');
$wybraneLitery=isset($_POST['litery']) ? $_POST['litery'] : [];
foreach ($litery as $litera) {
echo "<input type='checkbox'id='litera$litera'name='litery[]'value='$litera'".(in_array($litera, $wybraneLitery)?'checked':'').">";
echo "<label for='litera$litera'>$litera</label>";
}?>
<br>
<Br>
<input type="submit" value="Wybierz">
</form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($wybraneLitery)) {
echo "<p>Te litery zostały wybrane: " . implode(", ", $wybraneLitery) . ".</p>";} 
else {echo "<p>Żadna litera nie została wybrana.</p>";}}
?>
</fieldset>
</body>
</html>