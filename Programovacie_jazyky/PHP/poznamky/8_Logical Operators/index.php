<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php

    //Logical Operators možem skombinovať viacero statements/kondicie
    $x = 20;
    $y = 20;
    // or/|| bud jedno alebo druhe je pravdive
    // and/&& a sucasne je prve aj druhe pravdive
    // xor jedna z tich dvoch musi byt pravdiva ale može byt len jedna ktora je pravdiva
    if ($x == $y xor 1 == 1){
        echo 'true';
    }

?>

</body>
</html>