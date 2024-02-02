<?php
session_start();
require_once('common.php');

if (isset($_POST["status"])){
  if (isset($_POST["id"])){
    $id = $_POST["id"];
  }
  if (isset($_POST["name"])){
    $name = $_POST["name"];
  }
  if (isset($_POST["age"])){
    $age = $_POST["age"];
  }
  if (isset($_POST["work"])){
    $work = $_POST["work"];
  }
  if (isset($_POST["old_id"])){
    $old_id = $_POST["old_id"];
  }
  if ($_POST["status"] == "update"){
    if ($id == $old_id && $name == $db->getsyain($old_id)['name'] && $age == $db->getsyain($old_id)['age'] && $work == $db->getsyain($old_id)['work']) {
      header("Location: index.php");
      exit();
  }
    if(check_input($id, $name, $age, $error) === false){
      header("Location: syain_update.php?id={$old_id}&error={$error}");
      exit();
    } 
    if ($id !=$old_id && $db->idexist($id) == true){
      $error = "既に使用されているIDです";
      header("Location: syain_update.php?id={$old_id}&error={$error}");
      exit();
    }
      $result = $db->updatesyain($id, $name, $age, $work,$old_id);
      if($result == false){
        $error = "DBエラー";
        header("Location: syain_update.php?id={$old_id}&error={$error}");
        exit();
      }
    
      header("Location: index.php");
      exit();
    }
    
  
  
  elseif ($_POST["status"] == "create"){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['work'] = $_POST['work'];
    if(check_input($id, $name, $age, $error) === false){
      header("Location: syain_create.php?error={$error}");
      exit();
    } 
    if ($db->idexist($id) == true){
      $error = "既に使用されているIDです";
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    if($db->createsyain($id, $name, $age, $work) == false){
      $error = "DBエラー";
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    $_SESSION['name'] = '';
    $_SESSION['age'] = '';
    $_SESSION['work'] = '';
    header("Location: index.php");
    exit();
  }
  
   
  elseif ($_POST["status"] == "delete"){
    if(isset($_POST["id"])){
      $id = $_POST["id"];
      $result = $db->deletesyain($id);
      if($result == false){
        $error = "DBエラー";
        header("Location: syain_delete.php?id={$id}&error={$error}");
        exit();
      }
    }
    header("Location: index.php");
    exit();
  }
}
?>

