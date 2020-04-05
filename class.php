<?php
class ShopProduct
{
    public $title               = "Стандартный товар";
    public $producerMainName    = "Фамилия автора";
    public $producerFirstName   = "Имя автора";
    public $price               = 0;
}


// ключевое слово public обеспечит доступ к этому свойству за пределеми этого объекта.
// К свойствам переменной можно обращаться с помощью операции "->".

// результат "Стандартный товар.";
$product1 = new ShopProduct ();
print $product1 -> title;
print "</br>";
var_dump($product1);
print "</br>";
print "</br>";

// присвоить новые значения
$product1 = new ShopProduct();
$product2 = new ShopProduct();
$product1->title = "Собачье сердце";
$product2->title = "Ревизор";
var_dump($product1);



?>