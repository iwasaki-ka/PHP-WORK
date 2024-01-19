<?php
class Staff{
  private $name;
  private $age;
  private $sex;
  private $id;
  protected static $nextId = 1;

  public function __construct($name,$age,$sex){
    $this -> name = $name;
    $this -> age = $age;
    $this -> sex = $sex;
    $this -> id = $this -> number();
  }

  public function number(){
    $staffid ='S'. sprintf('%04d',self::$nextId);
    self::$nextId++;
    return $staffid;
  }


  public function show() {
    printf("%s %s %d歳 %s\n<br>", $this->id, $this->name, $this->age, $this->sex);
}
}

  class PartStaff extends Staff{
   private $name;
   private $age;
   private $sex;
   private $jikyu;
   private $id;

  

  public function __construct($name, $age, $sex, $jikyu) {
    $this -> name = $name;
    $this -> age = $age;
    $this -> sex = $sex;
    $this->jikyu = $jikyu;
    $this->partId = $this->number();
    $this->id = $this->partId;
  }

  public function number(){
    $partId ='P'. sprintf('%04d',parent::$nextId++) ;
    return $partId;
  }

  public function show() {
    printf("%s %s %d歳 %s 時給：%s円\n<br>", $this->id, $this->name, $this->age, $this->sex,$this->jikyu);
}
}




$staff1 = new Staff("佐藤 一郎", 31, "男性");
$staff2 = new Staff("山田 花子", 25, "女性");
$staff3 = new Staff("鈴木 次郎", 27, "男性");
$partStaff1 = new PartStaff("田中 友子",24,"女性","900");
$staff4 = new Staff("中村 三郎", 27, "男性");

$staff1->show(); 
$staff2->show(); 
$staff3->show(); 
$partStaff1->show(); 
$staff4->show();

?>