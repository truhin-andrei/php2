<?php

include 'item.php';

class Refrigerator extends Item
{

  private $typeOfCooling;
  private $height;
  private $numberOfChamber;

  function __construct(
    $id,
    string $title,
    int $price,
    int $quantity,
    string $manufacturer,
    int $discount = 0,
    $typeOfCooling,
    $height,
    $numberOfChamber
  ) {
    parent::__construct($id, $title, $price, $quantity, $manufacturer, $discount);
    $this->$typeOfCooling = $typeOfCooling;
    $this->$height = $height;
    $this->$numberOfChamber = $numberOfChamber;
  }

  function getTypeOfCooling()
  {
    return $this->typeOfCooling;
  }
  function getHeight()
  {
    return $this->height;
  }
  function getNumberOfChamber()
  {
    return $this->numberOfChamber;
  }
}
