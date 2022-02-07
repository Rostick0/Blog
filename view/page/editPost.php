<?
require_once '../../controller/session.controller.php';
require_once '../../controller/post.controller.php';
require_once '../../model/post.model.php';
require_once '../../include/connect.php';
require_once '../../controller/comment.controller.php';

$url_id = (integer) $_GET['id'];
$post = Post::getPost($url_id);

// if (!$post) {
//     header("Location: ./");
// }

if ($_SESSION['user']['id_user'] !== $post['id_user']) {
    header("Location: ./post?id=" . $url_id . "");
}

$url_id = (integer) $_GET['id'];
$post = Post::getPost($url_id);

if (isset($_REQUEST['edit-button'])) {
    updatePost($post);
}

// if (isset($_REQUEST['edit-button'])) {
//     updatePost($post);
// }

// var_dump($_REQUEST);

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

            <section class="styleBlock">
                    <form class="edit-post" action="#" method="POST" enctype="multipart/form-data">
                        <h2>Изменение поста</h2>
                        <h3 class="edit-post__title">
                            <input class="edit-post__title-input" type="text" value="<?
                                echo $post['title'];
                            ?>" name="title">
                        </h3>
                        <div class="edit-post__text">
                            <textarea class="edit-post__text-textarea" name="text"><?
                                echo $post['text'];
                            ?></textarea>
                        </div>
                        <div>
                            <label for="img">
                                <p class="imgButton">
                                    <span class="inputFileText">Хотите изменить картинку?</span>
                                    <input class="inputFile" type="file" id="img" name="img">
                                </p>
                            </label>
                        </div>
                        <button name="edit-button">Изменить</button>
                    </form>
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