
<?php

trait NewDB
{
  private static $db;
  public static function getObject()
  {
    if (empty(self::$db)) {
      self::$db = new self();
    }
    return self::$db;
  }
}

trait MySelect
{
  public function select()
  {
  }
}

class DB
{
  use NewDB;
  use MySelect;

  private function __construct()
  {
  }
  // Защищаем от создания через клонирование
  private function __clone()
  { /* ... @return Singleton */
  }
  // Защищаем от создания через unserialize
  private function __wakeup()
  { /* ... @return Singleton */
  }
  // Возвращает единственный экземпляр класса. @return Singleton

}

?>
