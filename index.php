<?php
session_start();
    $_SESSION['color'] = 'red';
    $_SESSION['firstCall'] = 'John';

?>

<h1>Let's start now.</h1>

<?php

$first = 1;

echo $first . '. <strong>Start. I\'m ready.</strong>';

echo '<br>' . $_SERVER['SCRIPT_NAME'];
?>

<form action="index.php" method="post">
    <p>Name: <input type="text" name="name"></p>
    <p>Birthyear: <input type="text" name="birthyear"></p>
    <p><input type="submit" name="submit" value="submit"></p>
</form>
<p>
    Welcome <?php
    $_SESSION['name'] = $_POST['name'];
    $age = 2018 - $_POST['birthyear'];
    $_SESSION['age'] = $age;
    echo $_POST['name']; ?>

</p>

<p>
    <?php
    if($_POST['birthyear']) {
        echo 'You are ' . (2018 - $_POST['birthyear'] . ' years old');
    }

    ?>
</p>
<p> <?= $_SESSION['color'] ?></p>