<?php include_once 'header/header.php'?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel='stylesheet' type='text/css' href='css/demo.css' />
<link rel='stylesheet' type='text/css' href='css/reset.css'/>
<link rel='stylesheet' type='text/css' href='css/style.css'/>
<link rel='stylesheet' type='text/css' href='css/tictoctoe.css' />
<h1>Hraj na vlastnú zodpovednosť !!!</h1>
<p>Táto jednoduchá hra slúži na odíchnutie od náročneho učenia. </p>   
<?php
$winner = 'n';
$box = array('','','','','','','','','');
if (isset($_POST["submitbtn"])){
    $box[0] = $_POST['box0'];
    $box[1] = $_POST["box1"];
    $box[2] = $_POST["box2"];
    $box[3] = $_POST["box3"];
    $box[4] = $_POST["box4"];
    $box[5] = $_POST["box5"];
    $box[6] = $_POST["box6"];
    $box[7] = $_POST["box7"];
    $box[8] = $_POST["box8"];
    //print_r($box);
    // check if player wins
    if (($box[0]=='x' && $box[1]=='x' && $box[2]=='x') 
    || ($box[3]=='x' && $box[4]=='x' && $box[5]=='x') 
    || ($box[6]=='x' && $box[7]=='x' && $box[8]=='x') 
    || ($box[0]=='x' && $box[4]=='x' && $box[6]=='x') 
    || ($box[1]=='x' && $box[4]=='x' && $box[7]=='x') 
    || ($box[2]=='x' && $box[5]=='x' && $box[8]=='x') 
    || ($box[0]=='x' && $box[4]=='x' && $box[8]=='x') 
    || ($box[2]=='x' && $box[4]=='x' && $box[6]=='x')) {
        $winner = 'x';
        print("Player Wins");
    }
    
?>
    

<?php

    //UI
    $blank = 0;
    for ($i=0; $i<=8; $i++){ 
        if($box[$i] == ''){
            $blank = 1;
        }
    }
    if ($blank == 1 && $winner == 'n'){
        $i = rand() % 8;
        while ($box[$i] != ''){
            $i = rand() % 8;
        }
        $box[$i] = 'o';
      // check if PC wins
        if (($box[0]=='o' && $box[1]=='o' && $box[2]=='o') 
        || ($box[3]=='o' && $box[4]=='o' && $box[5]=='o') 
        || ($box[6]=='o' && $box[7]=='o' && $box[8]=='o') 
        || ($box[0]=='o' && $box[3]=='o' && $box[6]=='o') 
        || ($box[1]=='o' && $box[4]=='o' && $box[7]=='o') 
        || ($box[2]=='o' && $box[5]=='o' && $box[8]=='o') 
        || ($box[0]=='o' && $box[4]=='o' && $box[8]=='o') 
        || ($box[2]=='o' && $box[4]=='o' && $box[6]=='o')) {
            $winner = 'o';
            print("PC Wins");
        }
    } else if ($winner == 'n') {
        $winner = 'o';
        echo 'Draw';
    }
};
?>

<body>
    
<form name="tictactoe" method="post" action="2.php">
<?php
//Game
for ($i=0; $i<=8; $i++){
   printf('<input type="text" name="box%s" value="%s">', $i, $box[$i]);
   if ($i == 2 || $i == 5 || $i == 8 ) {
       echo '<br>';
   }
};
// Play again button (aby hra nepokračovala do nekonečna)
echo '<div class="buttons">';
if ($winner == 'n'){ 
echo '<input type="submit" name="submitbtn" value="Go" class="btn-hover color-1">';
} else {
    echo '<input class="btn-hover color-1" type="button" name="newgame" value="Play Again" onclick="window.location.href=\'2.php\'">';
}
echo '</div>';

?>
</form>

</body>





<?php include_once 'footer/fot.php'?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>