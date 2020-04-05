<?php

class KonstantinsAge {
    public $age = "enter your age";
    public function echoAge() {
        echo $this->age;
    }
}

$browser = new KonstantinsAge();
$browser->age=30;
$browser->echoAge();
$browser->age=40;
echo $browser->age;
?>