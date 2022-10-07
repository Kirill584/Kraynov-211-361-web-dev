<?php	
	include 'header.html'; 
?>
<footer class="footer">
    <a id="footer-text"></a>
    <div class="footer-wrapper">
            <form class="footer-form" action="home.php" method="get">
                <fieldset class="form-fieldset">
                <p><? echo '<p> Здравствуйте, '.$_POST['name'].'</p>'; 
                                            if ($_POST['type'] == 'propose'){
                                                echo '<p>Спасибо за ваше предложение:</p>';
                                                echo '<textarea>'.$_POST['text'].'</textarea>';
                                            }
                                            else{
                                                echo '<p>Мы рассмотрим Вашу жалобу:</p>';
                                                echo '<textarea>'.$_POST['text'].'</textarea>';
                                                
                                            }
                                            ?></p>
                <p><? if (isset($_POST['file']) & $_POST['file'] != '') echo 'Вы приложили следующий файл: '.$_POST['file']; ?> </p>
                <? echo '<a class="submit" href="index.php?name='.$_POST['name'].'&email='.$_POST['email'].'&radio='.$_POST['radio'].'">Заполнить снова</a>'; ?>
                </fieldset>
            </form>