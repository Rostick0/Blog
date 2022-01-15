<?
require_once '../../model/post.model.php';

$recommendation_articles = Post::getArticles('view', 0);
?>

<h4>Рекомендуем</h4>
<ul class="recommendation__article">
<? foreach ($recommendation_articles as $value): ?>
    <li class="recommendation__article_item">
        <a href="../page/post?id=<? echo $value['id_post']?>">
            <?
                echo $value['title'];
            ?>
        </a>
    </li>
<? endforeach; ?>
</ul>