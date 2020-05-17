<?php

class Item
{
  private $id;
  private $title;
  private $price;
  private $quantity;
  private $manufacturer;
  private $discount;

  function __construct($id, string $title, int $price, int $quantity, string $manufacturer, int $discount = 0)
  {
    $this->id = $id;
    $this->title = $title;
    $this->price = $price;
    $this->quantity = $quantity;
    $this->manufacturer = $manufacturer;
    $this->discount = $discount;
  }
  function getId()
  {
    return $this->id;
  }
  function getTitle()
  {
    return $this->title;
  }
  function getPrice()
  {
    return $this->price;
  }
  function getQuantity()
  {
    return $this->quantity;
  }
  function getManufacturer()
  {
    return $this->manufacturer;
  }
  function getDiscount()
  {
    return $this->discount;
  }

  function setDiscount($discount)
  {
    $this->discount = $discount;
  }

  function getFinalPrice()
  {
    if (isset($this->discount) && isset($this->price)) {
      return $this->price * (1 - $this->discount / 100);
    }
    echo "Not enough data";
  }
}
