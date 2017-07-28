<!--
  5는 입력값이 되어서 input에 5라는 값을 넣는것이다. 그 후에 input값에 1을 더해서 출력하라는
  명령을 실행해 주는 것이다.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>JavaScript</h1>
    <script>
      function a(input){
        return input+1;
      }
      document.write(a(5));
    </script>

    <h1>php</h1>
    <?php
      function a($input){
        return $input+1;
      }
      echo a(5);
    ?>
  </body>
</html>
