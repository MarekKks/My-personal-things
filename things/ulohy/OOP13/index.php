<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>fun times php</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>

	
	<?php
	require_once 'inc/adventure.php';
	require_once 'inc/dude.php';

	$adventure = new Adventure();

	$adventure->addDude
	(
		new Dude('Funn','Finn is a silly kid who wants to become a great hero one day. He might not look too tough', 4)
	);
	$adventure->addDude
	(
		new Dude('Funn','Funn is a silly kid who wants to become a great hero one day. He might not look too tough', 8)
	);
	$adventure->addDude
	(
		new Dude('Jake the Dog','Finn s best friend is a wise, old dog with a big heart.', 16)
	);

	
	?>

	<div class="row">

	<?php
	foreach ( $adventure->getDudes() as $dude )
	{
		echo '<article>';
		echo ' <h4>'. $dude->getWho() .'</h4>';
		echo ' <p>'. $dude->getWat() .'<p>';
		echo '</article>';
	}
	?>



	</div>

	<div class="row">
		<p>
			number of dudes: <strong><?php echo $adventure->dudeCount() ?></strong><br>
			number of comments: <strong><?php echo $adventure->commentCount() ?></strong>
		</p>
	</div>

</body>
</html>