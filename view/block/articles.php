<?
require_once '../../controller/searchPost.controller.php';
// var_dump(mysqli_fetch_assoc(Post::getArticles('id_post')));
if (mysqli_num_rows($posts) === 0) {
    ?>
        <div class="styleBlock">
            <p class="error-message">
                <strong>
                    Посты не найдены
                </strong>
            </p>
        </div>
    <?
} else {
    foreach ($posts as $post):
        ?>
        <article class="styleBlock">
            <a class="article__link" href="post?id=<? echo $post['id_post']; ?>">
                <img class="article__img" src="../upload/<? echo $post['img']; ?>" alt="">
                <div class="article__description">
                    <h3>
                        <? echo $post['title']; ?>
                    </h3>
                    <h6>
                        <? echo $post['date']; ?>
                    </h6>
                    <div class="article__text">
                        <? echo mb_substr($post['text'], 0, 100) . '...'; ?>
                    </div>
                </div>
            </a>
        </article>
        <? endforeach ?>
<? 
}
?>