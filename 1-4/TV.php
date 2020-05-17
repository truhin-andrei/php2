<?php

include 'item.php';

class TV extends Item
{

  private $screenSize;
  private $isSmartTV;

  function __construct($id, string $title, int $price, int $quantity, string $manufacturer, int $discount = 0, $screenSize, bool $isSmartTV)
  {
    parent::__construct($id, $title, $price, $quantity, $manufacturer, $discount);
    $this->$screenSize = $screenSize;
    $this->$isSmartTV = $isSmartTV;
  }

  function getScreenSize()
  {
    return $this->screenSize;
  }
  function getIsSmartTV()
  {
    return $this->isSmartTV;
  }
}
