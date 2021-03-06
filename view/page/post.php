<?
require_once '../../controller/session.controller.php';
require_once '../../controller/post.controller.php';
require_once '../../model/post.model.php';
require_once '../../include/connect.php';
require_once '../../controller/comment.controller.php';
require_once '../../controller/view.controller.php';

$url_id = (integer) $_GET['id'];
$posts = Post::getPost($url_id);

if (!$posts) {
    header("Location: ./");
}

if (isset($_REQUEST['delete_post'])) {
    deletePost($posts);
}

viewController($url_id);

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

                <section class="selected-post styleBlock">
                    <div class="selected-post__short-info">
                        <div class="selected-post__author">
                            <img class="selected-post__author_img" src="../upload/<? echo $posts['avatar']; ?>" alt="">
                            <span class="selected-post__author_name">
                                <?
                                    echo $posts['login'];
                                ?>
                            </span>
                        </div>
                        <div>
                            <div class="selected-post__date">
                                <?
                                    if ($posts['date'] != $posts['date-update']) {
                                        echo '<p>Редактирован ' . $posts['date-update'] . '</p>';
                                    }

                                    echo $posts['date'];
                                ?>
                            </div>
                            <div class="selected-post__view">Просмотры:
                                <?
                                    getViews($posts['view']);
                                ?>
                            </div>
                        </div>
                    </div>
                    <h3 class="selected-post__title">
                        <p>
                            <?
                                echo $posts['title'];
                            ?>
                        </p>
                        <?
                            if ($posts['id_user'] === $_SESSION['user']['id_user']) {
                                echo '<form class="selected-post__form-edit" action="#" method="POST">
                                        <button>
                                            <a href="./editPost?id=' . $url_id . '">Изменить</a>
                                        </button>
                                        <button name="delete_post">Удалить</button>
                                    </form>';
                            }
                        ?>
                    </h3>
                    <img class="selected-post__img-post" src="../upload/<? echo $posts['img']; ?>" alt="">
                    <div class="selected-post__text">
                        <?
                            echo $posts['text'];
                        ?>
                    </div>

                    <div class="selected-post__comment">
                        <h3>Комментарии:</h3>
                       <!-- Показ комментариев -->
                        <?
                            require_once '../block/comment.php';
                        ?>
                        <!-- Форма для добавления комменатрия -->
                        <?
                            require_once '../block/commentAdd.php';
                        ?>
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