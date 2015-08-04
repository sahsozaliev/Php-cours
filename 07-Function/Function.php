<?php

Function printHeader ($title = null)
{ 
	global $DEFAULT_HEADER;
	if  (!isset($title))
	{
		$title=$DEFAULT_HEADER; 	
	}
	echo "$title";
	
}
function printFooter ()
{
	echo "Footer";
}

function htmllink($title,$url)

 {    echo "<div><a href= '$url'>$title</a></div>";
	return "<div><a href= '$url'>$title</a></div>";
	}

Function multiply (&$number,$multiplier)

{
	$number *= $multiplier;

}

function proba()

{
	static $count=1;
	$count*=2;
	echo 'count='.$count;
	echo "<br/>";
}


?> 