<!doctype html>
<html>
<head>
    <title>Opdracht 5</title>
    <style>
        li{
            color: blue;text-decoration:underline;
        }
    </style>
</head>
<body>
<!--form input text -->
<form action="" method="post">
    <input type="hidden" name="remove" value="0">
    <input type="text" name="boodschap"><br><br>
    <input type="submit" name="submit" value="Verstuur">
</form>

<!--Javascript removing item-->
<script>

    function remove(item) {

        document.getElementsByName('remove')[0].value = 'true';

        document.getElementsByName('boodschap')[0].value = item;

        document.getElementsByName('submit')[0].click();

    }

</script>

<!-- PHP submit -->
<?php session_start(); ?>
<ul>
    <?php

    if (!empty($_POST['submit'])) {


        if($_POST['remove']) {

            // Search array
            $pos = array_search($_POST['boodschap'], $_SESSION['boodschappen']);

            // Remove from array
            unset($_SESSION['boodschappen'][$pos]);

        } else {

            // Else set as new item
            $_SESSION['boodschappen'][] = $_POST['boodschap'];

        }

        foreach ($_SESSION['boodschappen'] as $boodschap) {
            echo "<li onclick=\"remove('".$boodschap."');\" >".$boodschap."</li>";
        }

    } else {
        $_SESSION['boodschappen'] = [];
    }

    ?>
</ul>
</body>
</html>

