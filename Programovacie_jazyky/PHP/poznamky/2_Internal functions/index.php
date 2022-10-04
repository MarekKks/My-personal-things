<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>Page Title</title>
</head>
<body>

<?php
    // Funkcie
    echo strlen("Hi Mark"); // Vypiše dlžku stringu
    echo '<br>';
    echo str_word_count("Hi Mark"); // vypiše počet slov stringu
    echo '<br>';
    echo strrev("Hi Mark");// napiše string naopak
    echo '<br>';
    echo strpos("Hi Mark", "Mark");//vypise poziciu slova v stringu
    echo '<br>';
    echo str_replace("Mark","Daniel","Hi Mark");// vymeni Mark za daniel v stringu
?>


</body>
</html>