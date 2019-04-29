<meta charset="utf-8">
<?php
  include "include/dbcon.php";


  //POST 값 저장
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  //넘어온 데이터 패스워드 암호화
  $pass2 = sha1($pass);

  //select 쿼리
  $query = "select * from member where member_id = '$email'";

  //쿼리전송
  $result = mysqli_query($conn,$query);

  //배열로 변환
  while($row = mysqli_fetch_array($result)){
     //넘어온 아이디 데이터와 데이터베이스 비교
    if($email == $row[1]){
      //넘어온 패스워드 데이터와 데이터베이스 비교
      if($pass2 == $row[2]){
        //세션생성 후 페이지 이동
        $_SESSION['id'] = $email;
        $_SESSION['name'] = $row[3];
        $_SESSION['lv'] = $row[4];
        header('Location: ./main.php');
      }else{
        echo "아이디 또는 패스워드를 확인하세요";
        header('Location: /');
      }
    }else{
      echo "아이디 또는 패스워드를 확인하세요<br>";
      header('Location: /');
    }
  }
?>
