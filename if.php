<?php

// if echo
$dana = "Good";
if ($dana == "Good")
    echo "<p>IF+echo: У даны хорошее настроение! </p>"; //если нет совпадение, то ничего не вернется.


// if else echo. IF = true; ELSE = false;
if ($dana == "Good")
{
    echo "<p>IF+ELSE 1: У даны хорошее настроение </p>";
    $age = 25;
}
else
{
    echo "<p>IF+ELSE 2: У даны плохое настроение! </p>";
}


//elseif

$number = 10;
if ($number < 10)
    $discount = 0;
elseif ($number >=10 && $number <=49)
    $discount = 5;
elseif ($number >=50)
    $discount = 10;

echo "<p> <b> ELSEIF: </b> ";
echo "Вы заказали товара: <b>" . $number . "</b> шт. ";
echo "Скидка составит: <b>" . $discount . "</b> % </p>";
?>
