<?
require_once '../../controller/session.model.php';
require_once '../../include/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/style.css">
    <title>Blog</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <?
                require_once './../block/header.php'
            ?>
        </header>

        <main>
            <div class="container main__container">

                <section class="styleBlock">
                    <div class="error">
                        <div class="error__title">Произошла ошибка</div>
                        <div class="error__subtitle">Через 5 секунд вы будете перенаправлены на главную страницу</div>
                    </div>
                </section>

                <aside class="recommendation styleBlock">
                    <?
                        require_once './../block/aside.php'
                    ?>
                </aside>
            </div>

        </main>
    </div>
</body>
</html>
<?
header('Refresh: 5; url="./"');
?>