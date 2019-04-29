<meta charset="utf-8">
<?php
  include_once("./include/dbcon.php");

  if($_SESSION['id']){
    echo "환영합니다";
  }else {
    header('Location: /');
  }
?>
