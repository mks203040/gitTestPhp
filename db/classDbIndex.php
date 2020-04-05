<?php

/*https://codeshack.io/super-fast-php-mysql-database-class/*/

//how to use
include 'classDb.php.php';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'example';

$db = new db($dbhost, $dbuser, $dbpass, $dbname);


//Fetch a record from a database:
$account = $db->query('SELECT * FROM accounts WHERE username = ? AND password = ?', 'test', 'test')->fetchArray();
echo $account['name'];


// Or you could do:
$account = $db->query('SELECT * FROM accounts WHERE username = ? AND password = ?', array('test', 'test'))->fetchArray();
echo $account['name'];

//Fetch multiple records from a database:
$accounts = $db->query('SELECT * FROM accounts')->fetchAll();
foreach ($accounts as $account) {
    echo $account['name'] . '<br>';
}

//Checking the number of rows:
$accounts = $db->query('SELECT * FROM accounts');
echo $accounts->numRows();

//Checking the affected number of rows:
$insert = $db->query('INSERT INTO accounts (username,password,email,name) VALUES (?,?,?,?)', 'test', 'test', 'test@gmail.com', 'Test');
echo $insert->affectedRows();

//Close the database:
$db->close();

//Checking the total number of queries:
echo $db->query_count;*/

?>
