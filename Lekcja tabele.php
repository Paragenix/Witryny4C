<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $wpisanyTekst = $_POST['tekst'];



    echo "<fieldset style='border: 2px solid black;'>";

    echo "<legend>lorem50</legend>";

    echo "<p>Oto wpisany tekst:</p>";

    echo "<p style='font-style: italic; color: red;'>$wpisanyTekst</p>";

    echo "</fieldset>";

} else {

    

?>

<fieldset style='border: 2px solid black;'>

    <legend>lorem50</legend>

    <form method="post">

        <textarea name="tekst" rows="5" cols="50">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>

        <br>

        <input type="submit" value="Wyślij">

    </form>

</fieldset>

<?php

}

?>

