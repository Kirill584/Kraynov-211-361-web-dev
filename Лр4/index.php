<?php	
	include 'header.html'; 
    
?>
<footer class="footer">
    <a id="footer-text"></a>
    <div class="footer-wrapper">
    <p class="footer-text">Форма обратной связи</p>
            <form class="footer-form" action="index.php" method="post">
                <fieldset class="form-fieldset">
                    <input type="hidden" name="user_id" value="6">
					<label>ФИО<input class="form-input" type="text" name="name" placeholder="Ваше ФИО" value="<?php	if(isset($_GET['name'])){echo($_GET['name']);} else{echo("");} ?>" required></label>
                    <label>Email<input class="form-input" type="email" name="email" placeholder="Ваш email" value="<?php if(isset($_GET['email'])){echo($_GET['email']);} else{echo("");} ?>" required></label>
                    <label>Источник информации<input class="form-input" type="radio" name="radio" value="reklama" required <?php if(isset($_GET['radio']) and $_GET['radio']="reklama"){echo('checked');} else{echo("");} ?>> Реклама из интернета <input class="form-input" type="radio" name="radio" value="talk" required <?php if(isset($_GET['radio']) and $_GET['radio']="talk"){echo('checked');} else{echo("");} ?>> Рассказали друзья </label>
                    <label>Тип обращения<select class="form-input" name="type">
                        <option value="propose">Жалоба</option>
                        <option value="message">Предложение</option>
                      </select></label>
                    <label>Текст<textarea class="form-input" name="text" placeholder="Введите текст" required></textarea></label>
                    <label>Файл<input class="form-input" type="file" name="file"></label>
                    <label><span class="checkbox-wrapper"><input class="form-checkbox" type="checkbox" name="checked" value="1" required>Даю согласие на обработку персональных данных</label></span>
                    <button class="submit" type="submit" formaction="home.php"> Отправить </button>
                </fieldset>
            </form>
	</div>

