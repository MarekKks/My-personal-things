<?php
    session_start(); // zapamätá si údaje (variable) na tejto stránke, dajú sa tím pádom použiť na každej
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php


$_SESSION['username'] = "dani948a";
echo $_SESSION['username'];


if (!isset($_SESSION['username'])) {
    echo "You are not logged in!";
}   else {
    echo 'You are logged in!';
}
?>


</body>



</html>