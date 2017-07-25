<!DOCTYPE html>
<!--
  php에서 출력할때는 echo 라는 문법을 사용한다.
  php 엔진에 의해서 동작했고 그 소스의 출력된 결과를 보여주는 것이다.
  웹브라우저가 자바스크립트를 해석해서 html로 보여주는 것.
  두개가 다른 이유는 php는 서버쪽에서 실행되는 언어이므로 서버에서 그 소스의 결과를 주기 때문에 결과값이 나오고
  자바스크립트는 웹브라우저가 해석해서 처리하기 때문에 코드 그대로 출력된다.
-->
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <h1>php</h1>
  <?php
    echo 10+10;
  ?>
  <h1>JavaScript</h1>
  <script>
    document.write(10+10);
  </script>
</body>
</html>
