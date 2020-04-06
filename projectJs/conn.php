<?php 



defined('DB_HOST') or define ('DB_HOST', 'localhost');
defined('DB_USER') or define ('DB_USER', 'root');
defined('DB_PASS') or define ('DB_PASS', 'root');
defined('DB_NAME') or define ('DB_NAME', 'projectjs');
// what is defined or define? how to get data from define? 

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

If(!$link){die ("error".mysqli_connect_error());};



?>