<?php
$title = 'Крайнов К. А.';
date_default_timezone_set("Europe/Moscow");
$today = date('Сформировано d.m.Y в H-i:s');  
$array = array('Замороженное молоко в форме кубиков льда — идеальное решение для охлаждения кофе и чая.','Многим беспроводным мышкам достаточно и одной батарейки вместо двух.','Сверлите потолок? Воспользуйтесь пластиковым стаканчиком для сбора пыли.','Банка из под Pringles с удобной крышечкой — отличная ёмкость для хранения любых других снэков, продающихся в непрактичных шуршащих пакетах.','Магниты, приклеенные к рукоятке шуруповёрта, помогут всегда держать шурупы под рукой, что заметно ускорит вашу работу.','Если у вас слишком большая форма для запекания, её можно уменьшить при помощи фольги.');
?>
<!DOCTYPE html>
<html lang="ru">
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
            <h1 class="header-logo"><?= $title ?></h1>
            <nav class="header-nav">
                <ul class="navigation-list">
                <li class="navigation-item">
                        <a href="#picture" class="navigation-link">Картинка</a>
                    </li>
                    <li class="navigation-item">
                        <a href="#lifehak" class="navigation-link">Лайфхаки</a>
                    </li>
                    <li class="navigation-item">
                        <a href="#table" class="navigation-link">Прогноз погоды</a>
                    </li>
                    <li class="navigation-item">
                        <a href="#footer-text" class="navigation-link">Форма обратной связи</a>
                    </li>
                    <li class="navigation-item">
                        <a href="#contacts" class="navigation-link">Контакты</a>
                    </li>
                    <li class="navigation-item">
                        <a href="form.html" class="navigation-link">Регистрация</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main">
        <section class="picture">
            <a id="picture"></a>
            <div class="picture1">
                <h2 class="section-heading">Картинка</h2>
                    <img class="tree" src="images/картинка.jpeg" alt="Дерево">
            </div>
        </section>
        <section class="lifehak">
            <a id="lifehak"></a>
            <div class="lifehak">
            <h2 class="section-heading">Лайфхаки</h2>
            <? foreach ($array as $n => $row) {
	            echo ($n + 1) . '.' . $row . "<br>\r\n";
            } ?>
            <a class="asd" href="<?php	
            $name='Больше лайфхаков'; 
            $link='https://lifehacker.ru/12-bytovyx-lajfxakov/';	
            $current_page=true;	

            echo $link;	

            ?>"><?php	

            if( $current_page )	
            echo $name;	
                ?>
            </a>
            </div>
        </section>
        <section class="picture">
            <a id="table"></a>
            <div class="weather">
                <h2 class="section-heading">Прогноз погоды</h2>
                <img class="sun" src="images/солнце.png" align="center" 
                  vspace="0" hspace="0">
                <table class="table">
                    <tr>
                     <th class="table">23 сентября</th>
                     <th class="table">24 сентября</th>
                     <th class="table">25 сентября</th>
                     <th class="table">26 сентября</th>
                     <th class="table">27 сентября</th>
                    </tr>
                    <tr>
                     <td class="table">14 градусов</td>
                     <td class="table">10 градусов</td>
                     <td class="table">9 градусов</td>
                     <td class="table">11 градусов</td>
                     <td class="table">13 градусов</td>
                   </tr>
                  </table>
            <a class="asd" href="<?php	
            $name='Погода в Москве'; 
            $link='https://www.gismeteo.ru/weather-moscow-4368/';	
            $current_page=true;	

            echo $link;	

            ?>"><?php	

            if( $current_page )	
            echo $name;	
                ?>
            </a>
            </div>
        </section>
        <section class="contacts">
        </section>
    </main>
    <footer class="footer">
        <a id="footer-text"></a>
        <div class="footer-wrapper">
            <p class="footer-text">Форма обратной связи</p>
            <form class="footer-form" action="#" method="post">
                <fieldset class="form-fieldset">
                    <label>ФИО<input class="form-input" type="text" name="text-field" placeholder="Ваше ФИО" required></label>
                    <label>Email<input class="form-input" type="email" name="text-field" placeholder="Ваш email" required></label>
                    <label>Источник информации<input class="form-input" type="radio" name="text-field" required>Из интернета <input class="form-input" type="radio" name="text-field" required> Рассказал друг <input class="form-input" type="radio" name="text-field" required> Из телевизора </label>
                    <label>Тип обращения<select class="form-input" name="user_profile_color_1">
                        <option value="1">Жалоба</option>
                        <option value="2">Предложение</option>
                        <option value="3">Отзыв</option>
                      </select></label>
                    <label>Текст<textarea class="form-input" placeholder="Введите текст" required> </textarea>></label>
                    <label>Файл<input class="form-input" type="file" name="tel" placeholder="Жалоба/предложение" required></label>
                    <label><span class="checkbox-wrapper"><input class="form-checkbox" type="checkbox" name="checked" value="1">Даю согласие на обработку персональных данных</label></span>
                    <input class="submit" type="submit" value="Отправить">
                </fieldset>
            </form>
            <a id="contacts"></a>
            <div class="contacts-wrapper">
            <? echo '<img class = "difpicture" src="images/foto'.(date('s') % 2+1).'.jpeg" align="right" alt="Меняющаяся фотография">'; ?>
                <h2 class="contacts-heading">Контакты</h2>
                <p class="contact">Telegramm | WhatsApp: +7 987 654 32 10</p>
                <p class="contact">Email: kirilldrakon03@mail.ru <span class="mail"></span></p>
                <p class="contact"><a class="contact-link" href="https://github.com/Kirill584">GitHub</a></p>
                <p><?= $today ?></p>
            </div>
        </div>
    </footer>
</body>
</html>