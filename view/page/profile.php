<?
require_once '../../controller/session.model.php';
require_once '../../include/connect.php';
require_once '../../model/user.model.php';

$user = User::getUserById($_GET['id'] + 0);

var_dump($user);

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
                            <p>
                                <?
                                    echo time();
                                    echo "<br/>";
                                    echo $user['login'];
                                ?>
                            </p>
                        </h3>
                        <div class="profile__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In vel nulla, at id, praesentium architecto voluptates hic dolores porro odio recusandae iure, sit nemo maiores laboriosam. Doloribus, cumque? Ipsam, illum!
                        </div>
                        <ul class="profile__short-info">
                            <li class="profile__short-info_item">
                                <p>Количество друзей:</p>
                                <p>10</p>
                            </li>
                            <li class="profile__short-info_item">
                                <p>Количество постов:</p>
                                <p>10</p>
                            </li>
                        </ul>
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