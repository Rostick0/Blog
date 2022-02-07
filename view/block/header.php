<div class="container header__container">
    <h1><a href="/view/page">Блог</a></h1>
    <nav>
        <div class="header__burger">
            <span class="header__burger-button">x</span>
            <ul class="header__navigation">
                <? if ($_SESSION['user']['login']) {
                    echo '
                        <li class="header__navigation_item"><a href="create">Создать статью</a></li>
                        <li class="header__navigation_item"><a href="">Сообщения</a></li>
                        <li class="header__navigation_item"><a href="profile?id=' . $_SESSION['user']['id_user'] . '">Профиль</a></li>
                        <li class="header__navigation_item"><a href="destroy.session">Выйти</a></li>
                        ';
                    } else {
                        echo '<li class="header__navigation_item"><a href="authorization">Вход</a></li>';
                    }
                ?>
            </ul>
        </div>
    </nav>
</div>