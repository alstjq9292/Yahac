<!DOCTYPE html>
<!--
  prompt로 사용자 입력을 받고 그걸 변수에 저장할 수 있다.
-->
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <script>
      password = prompt("비밀번호");
      if(password == 1111){
        document.write("안녕하세요. 주인님");
      }else{
        document.write("뉘신지?");
      }
    </script>
  </body>
</html>
