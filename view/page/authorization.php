<?
require_once '../../controller/session.controller.php';
require_once '../../include/connect.php';
require_once '../../model/user.model.php';
if ($_SESSION['user']['login']) {
    header('Location: ./');
}
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
                require_once '../block/header.php'
            ?>
        </header>

        <main>
            <div class="container main__container">

                <section class="authorization">
                    <form class="authorization__form styleBlock" action="#" method="POST" enctype="multipart/form-data">
                        
                        <strong class="authorization__status">
                            <?
                                require_once '../../controller/authorization.controller.php';
                            ?>
                        </strong>

                        <?  
                            if ($_SESSION['authorization_registration']) {
                                require_once '../block/authorization/registration.php';
                            } else {
                                require_once '../block/authorization/log.php';
                            }
                        ?>
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
</body>
</html>