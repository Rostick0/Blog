<?
require_once '../../model/comment.model.php';
require_once '../../controller/comment.controller.php';
require_once '../../model/comment.model.php';
$url_id = (integer) $_GET['id'];
$comments = Comment::getComments($url_id);
foreach ($comments as $comment):
?>

<div class="comment">
    <div class="comment__item">
        <a>
            <img class="comment__img" src="../upload/<? echo $comment['avatar']; ?>" alt="">
        </a>
        <div class="comment__content">
            <h4 class="comment__author">
                <? echo $comment['login']; ?>
                <?
                    if ($_SESSION['user']['id_user'] === $comment['id_user']) {
                        echo '<form action="../page/post?id='. $url_id .'" method="POST">
                                <button id="delete_comment" name="delete_comment'. $comment['id_comment'] .'">Удалить</button>
                            </form>';
                        if (isset($_REQUEST['delete_comment' . $comment['id_comment']])) {
                            deleteComment($comment['id_comment']);
                        }
                    }
                ?>
            </h4>
            <div class="comment__text">
                <? echo $comment['text']; ?>
            </div>
        </div>
    </div>
</div>
<? endforeach; ?>