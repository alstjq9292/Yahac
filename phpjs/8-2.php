<!DOCTYPE html>
<!--
  특수한 변수인 $_GET[""]는 이전에 입력한 form태그의 name속성에 해당하는 값을 받아온다.
-->
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $password = $_GET["password"];
      if($password == "1111"){
        echo "주인님 환영합니다.";
      }else{
        echo "뉘신지?";
      }
     ?>
  </body>
</html>
