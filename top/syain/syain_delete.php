<?php
require_once('common.php');

show_top("社員情報の削除");
if(isset($_GET["id"])){
  $id = $_GET["id"];
  $member = $db->getsyain($id);
  if($member){
   
    show_delete($member);
    
  }else{
    echo "該当する社員は見つかりませんでした";
  }
}else{
  echo "無効なリクエストです";
}
show_down(true);
?>