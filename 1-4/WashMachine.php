<?php

include 'item.php';

class WashMachine extends Item
{

  private $type;
  private $power;

  function __construct(
    $id,
    string $title,
    int $price,
    int $quantity,
    string $manufacturer,
    int $discount = 0,
    $type,
    $power
  ) {
    parent::__construct($id, $title, $price, $quantity, $manufacturer, $discount);
    $this->$type = $type;
    $this->$power = $power;
  }

  function getType()
  {
    return $this->type;
  }
  function getPower()
  {
    return $this->power;
  }
}
