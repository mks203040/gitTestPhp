<?php

/*https://codeshack.io/super-fast-php-mysql-database-class/*/

//how to use
include 'db.php';

$dbhost = 'localhost';
$dbuser = 'admin';
$dbpass = 'admin';
$dbname = 'skopins';

$db = new db($dbhost, $dbuser, $dbpass, $dbname);

////Fetch a record from a database:
// $account = $db->query('SELECT * FROM content')->fetchArray();

$account = $db->query('SELECT * FROM content');

var_dump($account);
echo '</br></br></br>';
print_r($account);
echo $account;

//
//
//// Or you could do:
//$account = $db->query('SELECT * FROM accounts WHERE username = ? AND password = ?', array('test', 'test'))->fetchArray();
//echo $account['name'];
//
////Fetch multiple records from a database:
//$accounts = $db->query('SELECT * FROM accounts')->fetchAll();
//foreach ($accounts as $account) {
//    echo $account['name'] . '<br>';
//}
//
////Checking the number of rows:
//$accounts = $db->query('SELECT * FROM accounts');
//echo $accounts->numRows();
//
////Checking the affected number of rows:
//$insert = $db->query('INSERT INTO accounts (username,password,email,name) VALUES (?,?,?,?)', 'test', 'test', 'test@gmail.com', 'Test');
//echo $insert->affectedRows();

////Close the database:
//$db->close();
//
////Checking the total number of queries:*/
//echo $db->query_count;

?>
