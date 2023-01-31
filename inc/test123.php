<?php

$first_date = '2020-01-02';
$second_date = '2022-01-01';
$third_date = '';

$num = 0;
$dates = [];
$count = 0;

while ($first_date <$second_date)
{
	echo $num.'</br>';
	$first_date = date('Y-m-d', strtotime("+3 months", strtotime($first_date)));
	$num++;
	
}
if ($third_date) {
	$first_date = $third_date;
}
while ($num >$count)
{
	
	echo $first_date.'</br>';
	$first_date = date('Y-m-d', strtotime("+3 months", strtotime($first_date)));
	$count++;
	
}


?>