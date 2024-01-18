<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
class Staff{
  private $name;
  private $age;
  private $sex;
  private $id;
  private static $nextId = 1;

  public function __construct($name,$age,$sex){
    $this -> name = $name;
    $this -> age = $age;
    $this -> sex = $sex;
    $this -> id = $this -> number();
  }

  public function number(){
    $staffid ='S'. sprintf('%03d',self::$nextId);
    self::$nextId++;
    return $staffid;
  }


  public function show() {
    printf("%s %s %d歳 %s\n", $this->id, $this->name, $this->age, $this->sex);
}

}

$staff1 = new Staff("佐藤 一郎", 31, "男性");
$staff2 = new Staff("山田 花子", 25, "女性");
$staff3 = new Staff("鈴木 次郎", 27, "男性");

$staff1->show(); 
$staff2->show(); 
$staff3->show(); 

?>
</body>
</html>