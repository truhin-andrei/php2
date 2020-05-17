<?php

include 'TV.php';
//include 'Refrigerator.php';
//include 'WashMachine.php';

$tv1 = new TV(1, 'us19tyu', 500, 1, 'samsung', 10, 19, true);
$tv1->setDiscount(20);
echo $tv1->getFinalPrice();
