<?php

/**
 * DATABASE
 */
$adventure = [

	[
		'who' => 'Finn the Human',
		'wat' => "Finn is a silly kid who wants to become a great hero one day. He might not look too tough, but if there's evil around, he'll slay it. That's his deal.",
		'comments' => 4,
	],

	[
		'who' => 'Jake the Dog',
		'wat' => "Finn's best friend is a wise, old dog with a big heart. Jake has the magical ability to stretch and grow. When evil's not running amok, he plays viola with Lady Rainicorn.",
		'comments' => 23,
	],

	[
		'who' => 'Ice King',
		'wat' => 'Armed with a magic crown and an icy heart, the Ice King has only one goal: to secure a wife by any means necessary.',
		'comments' => 10,
	],

	[
		'who' => 'Princess Bubblegum',
		'wat' => "As a millionaire nerd enthusiast, Princess Bubblegum immerses herself in every branch of geekdom from rocket science to turtle farming.",
		'comments' => 44,
	],

	[
		'who' => 'Marcy the Vampire',
		'wat' => "Marceline is a wild rocker girl. Centuries of wandering the Land of Ooo have made her a fearless daredevil.",
		'comments' => 10,
	],

];



/**
 * MAKE A SWEET LINK FOR ME
 * - converts spaces " " to dashes -
 * - prints a link
 *
 * @param $dude
 */
function make_a_sweet_link_for_me( $dude )
{
	echo '<a href="dude/'. str_replace(' ', '-', strtolower($dude['who'])) .'">';
	echo    $dude['who'];
	echo '</a>';
}