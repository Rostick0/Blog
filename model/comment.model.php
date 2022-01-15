<?
class Comment {
    public static function getComments($post_id) {
        global $connect;
        $query = mysqli_query($connect, "SELECT * FROM `comment` LEFT OUTER JOIN `user` ON `comment`.`author_id` = `user`.`id_user` WHERE `post_id` = '$post_id'");
        return $query;
    }
    public static function addComment($post_id, $author_id, $text) {
        global $connect;
        mysqli_query($connect, "INSERT INTO `comment` (`id_comment`, `post_id`, `author_id`, `text`) VALUES (NULL, '$post_id', '$author_id', '$text')");
    }
    public static function deleteComment($id_comment) {
        global $connect;
        mysqli_query($connect, "DELETE FROM `comment` WHERE `id_comment` = '$id_comment'");
    }
}
?>