<?php

abstract class Good
{
  protected $price;

  function __construct($price)
  {
    $this->price = $price;
  }

  function getPrice()
  {
    return $this->price;
  }
  function setPrice($price)
  {
    $this->price = $price;
  }

  abstract function getFinalPrice();

  abstract function getProfit();

  function sale()
  {
    $this->getProfit();
  }
}

class DigitalGood extends Good
{
  static $profit = 0;

  function __construct($price)
  {
    parent::__construct($price);
  }

  function getFinalPrice()
  {
    return $this->price / 2;
  }

  function getProfit()
  {
    $this->profit += $this->getFinalPrice();
    return $this->commonProfit;
  }
}

class PieceGood extends Good
{
  static $profit = 0;

  function __construct($price)
  {
    parent::__construct($price);
  }

  function getFinalPrice()
  {
    return $this->price;
  }

  function getProfit()
  {
    $this->profit += $this->getFinalPrice();
    return $this->commonProfit;
  }
}

class WeightGood extends Good
{
  static $profit = 0;
  private $quantity;

  function __construct($price, $quantity)
  {
    parent::__construct($price);
    $this->quantity = $quantity;
  }

  function getQuantity()
  {
    return $this->quantity;
  }
  function setQuantity($quantity)
  {
    $this->price = $quantity;
  }

  function getFinalPrice()
  {
    return $this->price * $this->quantity;
  }

  function getProfit()
  {
    $this->profit += $this->getFinalPrice();
    return $this->commonProfit;
  }
}

$obj = new WeightGood(100, 0.4);
$obj->sale();
echo $obj->profit;
