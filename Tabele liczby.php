<!DOCTYPE html>
<html lang="pl">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Liczby</title>
<style>

label { margin-right: 20px;}

</style>

</head>

<body>

<fieldset style="border: 3px solid green;">

<legend>Liczby</legend>

<form method="post">

<?php

$liczby = range(0, 100, 10);

$wybraneLiczby = isset($_POST['liczby']) ? $_POST['liczby'] : [];

foreach ($liczby as $liczba) 

{

echo "<input type='checkbox' id='liczba$liczba' name='liczby[]' value='$liczba'" . (in_array($liczba, $wybraneLiczby) ? ' checked' : '') . ">";

echo "<label for='liczba$liczba'>$liczba</label>";

}
?>
<br>
<input type="submit" value="Wybierz">
