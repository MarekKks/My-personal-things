<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Page Title</title>
</head>

<body>

    <?php
        $dayofweek = date("w");

        switch ($dayofweek) {
            case 1:
                echo '<p>It is Monday!</p>';
                break;
            case 2:
                echo '<p>It is Tuesday!</p>';
                break;
            case 3:
                echo '<p>It is Wednesday!</p>';
                break;
            case 4:
                echo '<p>It is Thursday!</p>';
                break;
            case 5:
                echo '<p>It is Friday!</p>';
                break;
            case 6:
                echo '<p>It is Saturday!</p>';
                break;
            case 0:
                echo '<p>It is Sunday!</p>';
                break;
        }
    ?>

</body>

</html>