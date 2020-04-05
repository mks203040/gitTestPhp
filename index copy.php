<?php 

//#1 - how work echo. 
$memo = '#1 - how work echo.  </br>';
echo $memo; 
$txt = 'Hello echo'; 
echo $txt; 
echo '</br></br>';

//#2 - array test. Print_r test.
$memo = "#2 - array test. Print_r test.</br>";
echo $memo; 
$array1 = array('Дана', 'one', 'two', 'three', 'four'); 
print_r ($array1); 
echo '</br></br>';

//#3 - 
$memo = "#3 - var_dump test</br>";
echo $memo; 
$array1 = array('Дана', 'one', 'two', '3', 'four'); 
var_dump ($array1);
echo '</br></br>';

//#4 - Terminology
$memo = "#4 - Terminology</br>String(8) - это набор символов, где 8 это кол-во символов";
echo $memo; 
echo '</br></br>';

//#5 - Вывод данных из массива.
$memo = "#5 - вывод значения echo из переменной массива </br>";
echo $memo; 
echo $array1[0];
echo '</br></br>';

//#6 - Define nested array. 
echo "#6 - Define nested array.</br>";
$array1 = array(
    array(
        "name" => "Peter Parker", 
        "email" => "peterparker@mail.com"
    ), 
    array(
        "name" => "Clakr Kent", 
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com", 
    ),   
);
echo "Peter Parker's email-id is: " . $array1[0]["email"];
echo "</br>***</br>";
print_r($array1); 
echo "</br>***";

?>



 <?php
//#7 - db connect

$servername = "localhost";
$username = "";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>

<?php
//#8 - test next
echo "</br>";
echo "hello Miroslav.";

?>

<?php
/*
$con=mysqli_connect("localhost","wrong_user","my_password","my_db");
// Check connection
if (!$con)
{
    die("Connection error: " . mysqli_connect_error());
}
*/
?>
