<?php
// цикличная функция до 10 раз включительно с применением операции break;
$i = 0; $j = "солнце светит";
while ($j != "солнце село")
{
    echo "Муравей прошёл $i шагов, ";
    if ($i >= 10) break;
    $i++;
    echo $j . "</br>";
}
echo "<br>"; echo "<br>";

// do .. while

$i = 0;
do
{
    echo $i;
} while ($i > 0);


?>