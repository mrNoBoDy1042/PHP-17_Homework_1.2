<?php
$x = $_GET['x'];
$one = $two =  1;
$flag = false;

while(!$flag)
{
	if ($one > $x)
	{
		echo "Задуманное число НЕ входит в числовой ряд";
		$flag = true;
	}
	else 
	{
		if ($one == $x) 
		{
			echo "Задуманное число входит в числовой ряд";
			$flag = true;
		}
		else
		{
			$three = $one;
			$one += $two;
			$two = $three;
		}
	}
}
?>

<meta charset="UTF-8" />