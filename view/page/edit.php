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

                <section class="styleBlock">
                    <form class="edit-post" action="#" method="POST">
                        <h2>Изменение поста</h2>
                        <h3 class="edit-post__title">
                            <input class="edit-post__title-input" type="text" value="Заголовок">
                        </h3>
                        <div class="edit-post__text">
                            <textarea class="edit-post__text-textarea" name="" id="">Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: понимание сути ресурсосберегающих технологий предопределяет высокую востребованность позиций, занимаемых участниками в отношении поставленных задач. Разнообразный и богатый опыт говорит нам, что убеждённость некоторых оппонентов однозначно фиксирует необходимость экспериментов, поражающих по своей масштабности и грандиозности. Есть над чем задуматься: диаграммы связей являются только методом политического участия и заблокированы в рамках своих собственных рациональных ограничений. Постоянное информационно-пропагандистское обеспечение нашей деятельности напрямую зависит от кластеризации усилий. Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции напрямую зависит от форм воздействия. В своём стремлении повысить качество жизни, они забывают, что разбавленное изрядной долей эмпатии, рациональное мышление прекрасно подходит для реализации экономической целесообразности принимаемых решений!</textarea>
                        </div>
                        <div>
                            <label for="img">
                                <p class="imgButton">
                                    <span class="inputFileText">Хотите изменить картинку?</span>
                                    <input class="inputFile" type="file" id="img">
                                </p>
                            </label>
                        </div>
                        <button name="create-button">Изменить</button>
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
</body>
</html>