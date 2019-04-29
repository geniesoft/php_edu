<meta charset="utf-8">
<?php
  include "include/dbcon.php";

  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];

  if($password == $cpassword){
    //패스워드 암호화
    $pass = sha1($password);

    $query = "insert into member values('','$email','$pass','$username','1')";
    $result = mysqli_query($conn,$query);
    if($result){
      header('Location: /');
    }else{
      header('Location: ./signup.php');
    }
  }
?>
