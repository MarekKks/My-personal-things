<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Kalkulačka</title>
</head>

<body>

<form action="">
    <input type="text" name= "num1" placeholder="Number 1" >
    <select name="operator">
        <option>None</option>
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name= "num2" placeholder="Number 2" >
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The answer is:</p>

<?php
    if (isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator){
            case 'None':
                echo 'ERROR';
            break;
            case '+':
                echo $result1 + $result2;
            break;
            case '-':
                echo $result1 - $result2;
            break;
            case '*':
                echo $result1 * $result2;
            break;
            case '/':
                echo $result1 / $result2;
            break;
        }
    }
?>

</body>

</html>