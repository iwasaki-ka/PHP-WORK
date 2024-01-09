<?php
class Staff{
  private $name;
  private $age;
  private $sex;
  private $id;
  private static $nextId = 001;

  class PartStaff extends Staff{
    private static $nextId = 001;
    private $jikyu;
    private $partId;

  

  public function __construct($name, $age, $sex, $jikyu) {
    parent::__construct($name, $age, $sex);
    $this->jikyu = $jikyu;
    $this->partId = $this->number();
    $this->id = $this->partId;
  }

  public function number(){
    $id ='P '.self::$nextId++;
    return $id;
  }
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
$partStaff1 = new PartStaff("田中 友子",24,"女性","900")
$staff4 = new Staff("中村 三郎", 27, "男性");

$staff1->show(); 
$staff2->show(); 
 
$partStaff1->show(); 
$staff4->show();

?>