<?php



// !isset
echo "<p><b>Start test #2: !isset </b></p>";

$name="Дана"; $first_name="Соловьёва"; $age=33;
if (!isset($name) && !isset ($first_name) && !isset($age) )
{
    echo "Просим вас ввести все данные!";
    exit;
}
else
{
    echo "Все данные получены: ";
    echo $name . ", ". $first_name . ", " . $age . ' года';
}
?>