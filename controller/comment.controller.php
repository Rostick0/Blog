<?
require_once '../../model/comment.model.php';

$text_comment = addslashes(htmlspecialchars($_REQUEST['text_comment']));

$url_id = (integer) $_GET['id'];

if (isset($_REQUEST['add_comment'])) {
    if (strlen($text_comment) > 0) {
        Comment::addComment($url_id, $_SESSION['user']['id_user'], $text_comment);
        $text_comment = '';
    }
}

function deleteComment($comment_id) {
    Comment::deleteComment($comment_id);
}
?>