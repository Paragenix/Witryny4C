<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ankieta</title>
    <style>
.error { color:red;}
fieldset{border: 4px solid yellowgreen;}
</style>
</head>
<body>
<fieldset>
<Legend>Ankieta</legend>
<form method="post">
    Imię:<span class="error">*</span>
    <input type="text" name="imie" value="<?php echo isset($_POST['imie']) ? htmlspecialchars($_POST['imie']) : '' ; ?>">
    <?php
    if  ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["imie"])) { echo "<span class='error'>Imię jest wymagane!</span>";}
    ?>
<br>
<br>
Nazwikso:<span class="error">*</span>
    <input type="text" name="nazwisko" value="<?php echo isset($_POST['nazwisko']) ? htmlspecialchars($_POST['nazwisko']) : '' ; ?>">
    <?php
    if  ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["nazwisko"])) { echo "<span class='error'>Nazwisko jest wymagane!</span>";}
    ?>
<br>
<br>
Stanowisko:<span class="error"> *</span><br>
<?php

 if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["stanowisko"]))    {echo "<span class='error'>Proszę wybrać stanowisko!</span>";}     ?> 
 <br>
<br>
<input type="radio" name="stanowisko" value="Uczeń" <?php if(isset($_POST['stanowisko']) && $_POST['stanowisko'] == 'Uczeń') echo "checked"; ?>> Uczeń
<br>
<input type="radio" name="stanowisko" value="Absolwent" <?php if(isset($_POST['stanowisko']) && $_POST['stanowisko'] == 'Absolwent') echo "checked"; ?>> Absolwent
<br>
<input type="radio" name="stanowisko" value="Nauczyciel" <?php if(isset($_POST['stanowisko']) && $_POST['stanowisko'] == 'Nauczyciel') echo "checked"; ?>> Nauczyciel
<br>
<input type="radio" name="stanowisko" value="Pracownik administracji" <?php if(isset($_POST['stanowisko']) && $_POST['stanowisko'] == 'Pracownik administracji') echo "checked"; ?>> Pracownik administracji
<br>

<input type="submit" value="Wyślij">
</form>
</fieldset>    
</body>
</html>