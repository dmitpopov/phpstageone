<?php
session_start();

?>

<marquee direction="down" scrollamount="3"><h1>Hi!!!</h1></marquee>

<marquee direction="right" scrollamount="15"><a href="/indexone.php">Your name is <?php echo $_SESSION['name'] ?></a></marquee>

<p><?php var_dump($_SESSION['name'])?></p>

<p><?php echo $_SESSION['name'] . ', ' . $_SESSION['age'] ?></p>


