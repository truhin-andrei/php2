<?

class A
{
  public function foo()
  {
    static $x = 0;
    echo ++$x;
  }
}
class B extends A
{
}

$a1 = new A;
$b1 = new B;

$a1->foo(); // 1
$b1->foo(); // 1
$a1->foo(); // 2
$b1->foo(); // 2


/* так как $x - static, то она принадлежит классу, а не объекту,
 и является общей для всех экземпляров данного класса. 
 Но для разных классов, это разные переменные */

 /*Не понял отличий заданий 6 и 7.
  Единственное отличие, которое нашёл - в задании 7 экземпляры объявляются без скобочек.
  Но так как аргументы для передачи в конструктор отсутствуют, то это допускается
