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
);br();



echo $e[var].$br.$e[work][2].$br;

$first_name = "Nick"; $last_name = "Williamson";
echo $first_name.' '.$last_name.$br;
echo "If your developer stage less than 1 year, ";
$stage = 2; # years
if ($stage<2) {
	echo "You are a beginner";
} else {
	echo "Your stage is 2 years, your are good";
}br();br();



function weather()
{
	echo "<h2>Weather</h2>";
}
weather();
$weather = "snowy";
if ($weather == "snowy")
{
	echo "It's cold, just wear more clothes and hat.";
}br();
if ($e['name'] == 'Nick')
{
	echo "Welcome, Nick";
}br();



function access_granted(){echo "<h3>Access granted!</h3>";}
function access_denied(){echo "<h3>Access Access denied!</h3>";}

if ($stage<2 and $name != 'Nick'){access_granted();}else{access_denied();}



$temperature= -8;
if ($temperature >= 69 and $temperature <=80){echo "That's very comfortable temperature for human!";}br();

if ($temperature <=32 and $temperature <= 69){echo "It's very cold!";}br();

if ($temperature >= -40 and $temperature <= 32){echo "You can die without warm clothing!";}br();



/*
$while_name = 3;
while ($while_name <= 5) {
	echo "This text repeats 5 times.";
	echo $br;
}
*/


/*
echo "Foreach".$br;
foreach ($variable as $key => $value) {
  # code...
}
*/



function get_bigger($first,$second)
{
	if ($first > $second)
	{
		return $first;
	} else {
		return $second;
	}
}br();
$get_bigger = get_bigger(2002,2017);
echo $get_bigger.$br.$br;



# abs, round, ceil, floor, rand, min, max

echo abs(-228)."Absolute value".$br;
echo round(227.7)."Round value".$br;
echo ceil(227.1)."Rounding up".$br;
echo floor(228.8)."Rounding down".$br;
echo rand(1,229)."Generating random value from 1 to 229".$br;
echo min(809,908,605,228,555,2017).$br;
echo max(809,908,605,228,555,2017).$br;
br();br();



$d = array
(
  'Milk' => 'Milk',
  'Cookies' => 'Cookies',
  'Code' => array
  (
      'How_to_develop_software' => 'Use GitHub to develop software',
      'How_to_make_tasty_coffee' => 'Easy'
  ),
  'Sleep' => 'Sleep'
);
echo $d[Code][How_to_develop_software];