<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кудинов Данил</title>
    <link rel="stylesheet" href="./style.css">
    <?php $hello = 'Hello World!' ?>
    <?php $end = 'Предмет: основы серверной веб разработки' ?>
</head>
<body>
    <header class="header">
      <?php 
        echo '<img src="https://papik.pro/uploads/posts/2022-01/1643631757_29-papik-pro-p-politekh-logotip-32.jpg" alt="">';
      ?>
        <h1>Лабараторная работа № 1</h1>
    </header>
      <main>
          <?php
            echo $hello;
          ?>
      </main>
    <footer>
      <h3>
        <?php  
          echo $end;
        ?>
      </h3>
    </footer>
</body>
</html>