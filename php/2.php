<!--
  php 내장함수인 file_get_contents는 파일을 읽어서 출력해준다.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      echo file_get_contents($_GET['id'].".txt");
     ?>
  </body>
</html>
