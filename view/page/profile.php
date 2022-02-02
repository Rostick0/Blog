<?
require_once '../../controller/session.controller.php';
require_once '../../include/connect.php';
require_once '../../model/user.model.php';
require_once '../../controller/online.controller.php';

$user = User::getUserById((integer) $_GET['id']);

if (!$user) {
    header("Location: ./error");
}

// var_dump($user);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Blog</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <?
                require_once '../block/header.php';
            ?>
        </header>

        <main>
            <div class="container main__container">

                <section class="profile styleBlock">
                    <div class="">
                        <img class="profile__avatar" src="../upload/<? echo $user['avatar']; ?>" alt="">
                    </div>
                    <div class="profile__info">
                        <h3 class="profile__name">
                            <?
                                echo $user['login'];
                            ?>
                            <p class="profile__online">
                                <?
                                    echo $user['last_online'];
                                ?>
                            </p>
                        </h3>
                        <div class="profile__description">
                            <?
                                echo $user['description'];
                            ?>
                        </div>
                        <ul class="profile__short-info">
                            <li class="profile__short-info_item">
                                <p>Количество друзей:</p>
                                <p>
                                    <?
                                        echo $user['count_friend'];
                                    ?>
                                </p>
                            </li>
                            <li class="profile__short-info_item">
                                <p>Количество постов:</p>
                                <p>
                                    <?
                                        echo $user['count_post'];
                                    ?>
                                </p>
                            </li>
                        </ul>
                        <form method="POST" class="profile__interaction">
                            <?
                                if ($_SESSION['user']['id_user'] === $user['id_user']) {
                                    echo '
                                        <button class="profile__interaction_button" name="profile_setting">
                                            <a href="./editProfile">Настройки</a>
                                        </button>
                                        ';
                                } else {
                                    echo '
                                        <button class="profile__interaction_button" name="write_letter">Написать сообщение</button>
                                        <button class="profile__interaction_button" name="add_frined">Добавить в друзья</button>
                                        ';
                                }
                            ?>
                        </form>
                    </div>
                </section>

                <aside class="recommendation styleBlock">
                    <?
                        require_once '../block/aside.php';
                    ?>
                </aside>
            </div>

        </main>
    </div>
</body>
</html>