<?php
$title = 'Крайнов К. А.';
date_default_timezone_set("Europe/Moscow");
$today = date('Сформировано d.m.Y в H-i:s');  
$array = array('Замороженное молоко в форме кубиков льда — идеальное решение для охлаждения кофе и чая.','Многим беспроводным мышкам достаточно и одной батарейки вместо двух.','Сверлите потолок? Воспользуйтесь пластиковым стаканчиком для сбора пыли.','Банка из под Pringles с удобной крышечкой — отличная ёмкость для хранения любых других снэков, продающихся в непрактичных шуршащих пакетах.','Магниты, приклеенные к рукоятке шуруповёрта, помогут всегда держать шурупы под рукой, что заметно ускорит вашу работу.','Если у вас слишком большая форма для запекания, её можно уменьшить при помощи фольги.');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="normalize.css" type="text/css" />
    <title>Крайнов Кирилл</title>
</head>
<body>
    <header class="header">
        <div class="header-wrapper">
            <h1 class="header-logo">Крайнов К. А.</h1>
            <nav class="header-nav">
                <ul class="navigation-list">
                    <li class="navigation-item">
                    </li>
            </nav>
        </div>
    </header>
<div class="picture">
    <?php
    include "home.php";
    $sql = "SELECT * FROM table1";
    $result = mysqli_query($mysql, $sql);
    echo '<th>Таблица</th>';
    echo "<table class='table'><tr><th>Термин</th><th>Определение</th></tr>";
    foreach($result as $row){
         echo "<tr>";
            echo "<td>" .  $row["Термин"] . "</td>";
            echo "<td>" .  $row["Определение"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
    $mysql->close();
?> </div>
<footer class="footer">
        <div class="footer-wrapper">
            <div class="contacts-wrapper">
                <h2 class="contacts-heading">Контакты</h2>
                <p class="contact">Telegramm | WhatsApp: +7 987 654 32 10</p>
                <p class="contact">Email: kirilldrakon03@mail.ru <span class="mail"></span></p>
                <p class="contact"><a class="contact-link" href="https://github.com/Kirill584">GitHub</a></p>
                <p><?= $today ?></p>
            </div>
        </div>
    </footer>