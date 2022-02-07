<?
require_once '../../controller/session.controller.php';
require_once '../../include/connect.php';
require '../../socket/index.php';

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
    <?
        require_once '../block/scripts.php';
    ?>
</body>
</html>
<?
header('Refresh: 5; url="./"');
?>