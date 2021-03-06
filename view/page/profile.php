<?
require_once '../../controller/session.controller.php';
require_once '../../include/connect.php';
require_once '../../model/user.model.php';
require_once '../../model/post.model.php';
require_once '../../controller/online.controller.php';

$user = User::getUserById((integer) $_GET['id']);

if (!$user) {
    header("Location: ./error");
}

// var_dump($user);
?>

<!DOCTYPE html>
<html lang="ru">
<?
    require_once '../block/head.php';
?>
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
                                <p>Количество постов:</p>
                                <p>
                                    <?
                                        echo Post::countPosts($user['id_user']);
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
    <?
        require_once '../block/scripts.php';
    ?>
</body>
</html>