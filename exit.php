<?php

// exit: прекращение выполнения оставшегося кода;
echo "<p><b>Start test #1:</b> </p>";

$name="Дана"; $first_name="Соловьёва"; $age=33;

if (!$name || !$first_name || !$age )
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