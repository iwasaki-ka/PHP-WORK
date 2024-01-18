<?php
class Staff{
  private $name;
  private $age;
  private $sex;
  private $id;
  private static $nextId = 001;

  public function __construct($name,$age,$sex){
    $this -> name = $name;
    $this -> age = $age;
    $this -> sex = $sex;
    $this -> id = $this -> number();
  }

  public function number(){
    $id ='S '.self::$nextId++;
    return $id;
  }


  public function show() {
    printf("%s %s %s %d歳 %s\n", $this->id, $this->name, $this->age, $this->sex);
}

}

$staff1 = new Staff("佐藤 一郎", 31, "男性");
$staff2 = new Staff("山田 花子", 25, "女性");
$staff3 = new Staff("鈴木 次郎", 27, "男性");

$staff1->show(); 
$staff2->show(); 
$staff3->show(); 

?>