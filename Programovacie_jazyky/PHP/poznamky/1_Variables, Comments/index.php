<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form method="GET">
    <input type="text" name="person">
    <button>SUBMIT</button>
</form>


<?php
    echo 'hi'; // this is string -> 'text'
    echo '<br>';
    $word = 'hi'; // $ -> means it is a variable 
    echo $word;

    // Example
    $name = $_GET['person'];
    echo '<br>';
    echo  $name. " is a good guy!"; // . -> must use if there is a html code besedes PHP

    //Comments
    // Ways of commenting
    //
    /**/
?>

</body>
</html>