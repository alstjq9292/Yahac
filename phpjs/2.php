 <!DOCTYPE html>
 <!--
   두 언어에서 "" 안에 들어가는 숫자는 결국 문자열이다.
   php에서 더할때 +를 쓰면 사용자가 실수한줄 알고 알아서 문자열을 숫자로 바꿔서 제대로 계산해준다.
   php에서 문자를 더할때는 . 을 사용해서 더해준다.
  -->
 <html>
 <head>
   <meta charset="utf-8">
 </head>
 <body>
   <h1>JavaScript</h1>
   <script>
     document.write("10"+"10");
   </script>
   <h2>php</h2>
   <?php
    echo "10"."10";
   ?>
 </body>
 </html>
