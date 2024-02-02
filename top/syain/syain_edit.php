<?php
require_once('common.php');

if(isset($_GET["id"])){
  $id = $_GET["id"];

$member = $db->getsyain($id);
 if($member){
  show_top("社員情報");
  show_syain($member);
  echo '<a href="syain_update.php?id=' . $id . '">社員情報の更新</a>';
  echo '<p><a href="syain_delete.php?id=' . $id . '">社員情報の削除</a></p>';
  show_down(true);
 }else{
  echo "該当する社員は見つかりませんでした";
}
}else{
  echo "無効なリクエストです";
}


?>