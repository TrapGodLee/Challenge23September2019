<html>
<body>

<form method="post" action="">
    Voeg toe: <input type="text" name="something" value="<?= isset($_POST['something']) ? htmlspecialchars($_POST['something']) : '' ?>" />
    <input type="submit" name="submit" />
</form>

<?php
if(isset($_POST['submit'])) {
    echo 'Toe gevoegd: ', htmlspecialchars($_POST['something']);
}
?>

</body>
</html>


