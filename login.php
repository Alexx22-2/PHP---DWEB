<?php
SESSION_START();
$_SESSION['username'] = $_POST['username'];
echo "<h1>Bem-vindo(a), " . $_SESSION['username'] . "!</h1>";
?>
<a href="logout.php">Logout</a>