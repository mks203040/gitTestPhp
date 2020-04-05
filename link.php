<?php

// echo '<a href="http://www.website.com/page.html">Click here</a>';

$l1 = '<a href="';
$l2 = 'http://www.website.com/';
$l3 = '">';
$l4 = 'click here';
$l5 = '</a>';
echo "$l1 $l2 $l3 $l4 $l5";


echo '<a href="mycgi?foo=', urlencode($userinput), '">';

?>
