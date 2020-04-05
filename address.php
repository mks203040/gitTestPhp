<?php

function simplify_path($path) {

//saves our current working directory to a variable
$oldcwd = getcwd();
//changes the directory to the one to convert
//$path is the directory to convert (clean up), handed over to the //function as a string

chdir($path);
return gstr_replace('\\', '/', getcwd());

//change the cwd back to the old value to not interfere with the script
chdir($oldcwd);

}
?>
