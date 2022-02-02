<?
if ($_SESSION['errors']['authorization'] === 'none') {
    echo '<div class="authorization__input">
            <label for="confirm_email">Код из email</label>
            <input type="text" id="confirm_email" name="confirm_email">
        </div>
        <div class="authorization__buttons">
                <button name="do_confirm-email">Подтвердить</button>
                <button name="dont_get_mail">Не пришло</button>
        </div>';
} else {
    echo '<div class="authorization__input">
            <label for="login">Логин</label>
            <input type="text" id="login" name="login">
        </div>
        <div class="authorization__input">
            <label for="email">Почта</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="authorization__input">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div class="authorization__buttons">
            <button name="do_registration">Зарегистрироваться</button>
            <button name="transition_log">Войти</button>
        </div>';
}
?>

<!-- <div>
            <label for="img">
                <p class="imgButton">
                    <span class="inputFileText">Загрузка вашей фотографии</span>
                    <input class="inputFile" type="file" id="img" name="avatar" name="avatar">
                </p>
            </label>
        </div> -->