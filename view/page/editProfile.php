<?
require_once '../../controller/session.controller.php';
require_once '../../include/connect.php';
require_once '../../model/user.model.php';
require_once '../../controller/online.controller.php';

$id = $_SESSION['user']['id_user'];

$user = User::getUserById($id);

if (!$_SESSION['user']['id_user']) {
    header("Location: ./");
}

var_dump($_SESSION['user'])

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
                    <?
                        require_once '../block/editProfile/edit.php';
                    ?>
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