<?php

echo 'Startsida';

?>

<head>
    
    <?php wp_head();
    ?>

</head>

<form action="http://localhost:8080/inlamning2/wp-admin/admin-ajax.php">;

    <input name="mfirstname" type="text">
    <input type="submit" value="skicka">

    <input type="hidden" name="action" value="skicka-form">


</form>

