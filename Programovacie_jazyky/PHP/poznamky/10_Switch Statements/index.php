<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php

    //Switch Statements

    $x = 9;

    switch ($x) {
         case 1:                         // starts case
            echo 'The answer is 1';
        break;                         //ends case
        case '2':
            echo 'The answer is 2';
        break;
        case '3':
            echo 'The answer is 3';
        break;
        case '4':
            echo 'The answer is 4';
        break;
        default:                        // ak nie je to jeden z case tak to spravi čo je tu napisane
            echo 'There is no answer';
    }

?>

</body>
</html>