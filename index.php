<?php

$a = 100;
$b = 18.88;
$title = "Nick Williamson's Cake";
$t = true;
$f = false;
$br = "<br/>";

function br()
{
	$br = "<br/>";
	echo $br;
}

// Page title
echo $title;
$names = array(
	"John",
	"Adam",
	"Lincoln",
	"Nick",
	"Benjamin"
);
echo $names[3];

$e = array(
	'name' => 'Nick' ,
	'surname' => 'Williamson',
	'age' => '15',
	'birth_year' => '2002',
	'var' => $c,
	'array' => $names[3],
	'work' => array(
				'Freelance','GitHub','GitHub and Staws'
			),
	'married' => $f, #false
	'geek' => $t # true
);



br();
echo $e[var].$br.$e[work][2].$br;
