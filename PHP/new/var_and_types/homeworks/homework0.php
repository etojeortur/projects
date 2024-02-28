<!DOCTYPE html>
<html lang="ru">
   <head>
       <title>PHP-скрипт</title>
       <meta charset="UTF-8">
   </head>
   <body>
   <?php
        echo 'Актуальная дата:';
        echo '<br>';
        echo date(DATE_RSS);
        echo '<br>'; echo 'Юзер агент: ';
        echo $_SERVER['HTTP_USER_AGENT'];
   ?>
   </body>
</html>