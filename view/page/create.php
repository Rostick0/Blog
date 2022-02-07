<?
require_once '../../controller/session.controller.php';
require_once '../../include/connect.php';
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
                require_once '../block/header.php'
            ?>
        </header>

        <main>
            <div class="container main__container">

                <section class="create-post styleBlock">
                    <?
                        require_once '../../controller/post.controller.php';
                    ?>
                    <h2>Создание статьи</h2>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <p class="create-post__input">
                            <label for="title">Заголовок</label>
                            <input type="text" name="title" id="title">
                        </p>
                        <p class="create-post__input">
                            <label for="text">Текст статьи</label>
                            <textarea class="create-post__textarea" type="text" name="text" id="text"></textarea>
                        </p>
                        <div>
                            <label for="img">
                                <p class="imgButton">
                                    <span class="inputFileText">Картинка</span>
                                    <input class="inputFile" type="file" id="img" name="img">
                                </p>
                            </label>
                        </div>
                        <button name="create-button">Отправить</button>
                    </form>
                </section>

                <aside class="recommendation styleBlock">
                    <?
                        require_once '../block/aside.php'
                    ?>
                </aside>
            </div>

        </main>
    </div>
    <script src="../js/imgButton.js"></script>
    <?
        require_once '../block/scripts.php';
    ?>
</body>
</html>