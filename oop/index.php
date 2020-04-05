<?php
if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {


            // echo '<a href="http://www.website.com/page.html">Click here</a>';

            $l1 = '<a href="';
            $l2 = 'http://localhost:8888/test/oop/';
            $l3 = '">';
            $l4 = 'click here';
            $l5 = '</a>';

            echo "$l1", "$l2", "$entry", "$l3", "$entry $l5";
            echo "</br>";

            // var_dump ($entry);

            // echo '<a href="mycgi?foo=', urlencode($userinput), '">';
            // echo "$entry\n";
            // echo getcwd() . "\n";


        }
    }

    closedir($handle);
}
?>
