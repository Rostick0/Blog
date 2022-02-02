<?
require_once '../../controller/session.controller.php';
require_once '../../include/connect.php';
require_once '../../controller/authorization.controller.php';
require_once '../../controller/searchPost.controller.php';
require_once '../../model/user.model.php';

// ?id=44
// echo (integer) $_GET['id'];
// echo ($_SERVER["REMOTE_ADDR"]);
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

                <section class="post">

                    <div class="post__search">
                        <?
                            require_once '../block/postSearch.php';
                        ?>
                    </div>

                    <div class="article-container">
                        <?
                            require_once '../block/articles.php';
                        ?>
                    </div>

                    <!-- Нижняя навигация -->
                    <nav class="styleBlock">
                        <ul class="bottom-article__navigation">
                            <?
                                require_once '../block/articleNavigation.php';
                            ?>
                        <ul>
                    </nav>

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