<?
if ($_SESSION['user']) {
    echo '<form class="add-comment__form" action="#" method="POST" autocomplete="off">
            <input class="add-comment__input" type="text" placeholder="Написать комментарий" name="text_comment">
            <button id="add_comment" name="add_comment">Отправить</button>
        </form>';
} else {
    echo '<p class="error-message">
        <strong>
            Добавление комментариев доступно только авторизованным пользователям
        </strong>
        </p>';
}
?>