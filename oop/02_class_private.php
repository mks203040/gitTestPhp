<?php

class Shop {
  Private $name;

  public function naming () {
      $this -> name = "Adidas";
      echo $this->name;

  }
}

$product = new Shop;
$product->naming();
?>
