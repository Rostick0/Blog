<?

class Post {
    public static function getArticles($method, $num) {
        global $connect;
        if ($method === 'title') {
            $query = mysqli_query($connect, "SELECT * FROM `post` ORDER BY `$method` LIMIT 0, 10");
        } else {
            $query = mysqli_query($connect, "SELECT * FROM `post` ORDER BY `$method` DESC LIMIT 0, 10");
        }
        return $query;
    }

    public static function searchPosts($method, $title, $num) {
        global $connect;
        if ($method === 'title') {
            $query = mysqli_query($connect, "SELECT * FROM `post` WHERE `title` LIKE '%$title%' UNION SELECT * FROM `post` WHERE `text` LIKE '%$title%' ORDER BY `$method` DESC LIMIT $num, 10");
        } else {
            $query = mysqli_query($connect, "SELECT * FROM `post` WHERE `title` LIKE '%$title%' UNION SELECT * FROM `post` WHERE `text` LIKE '%$title%' ORDER BY `$method` DESC LIMIT $num, 10");
        }
        return $query;
    }

    public static function searchPostsCount($title) {
        global $connect;
        $query = mysqli_query($connect, "SELECT COUNT(*) FROM `post` WHERE `title` LIKE '%$title%' OR `text` LIKE '%$title%'");
        $data = mysqli_fetch_assoc($query);
        return $data["COUNT(*)"];
    }

    public static function getPost($id) {
        global $connect;
        $query = mysqli_query($connect, "SELECT * FROM `post` LEFT OUTER JOIN `user` ON `post`.`user_id` = `user`.`id_user` WHERE `id_post` = '$id'");
        $data = mysqli_fetch_assoc($query);
        return $data;
    }

    public static function addPost($user_id, $title, $text, $img) {
        global $connect;
        mysqli_query($connect, "INSERT INTO `post` (`id_post`, `title`, `text`, `img`, `date`, `data-update`, `user_id`, `view`) VALUES (NULL, '$title', '$text', '$img', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '$user_id', '0')");
    }

    public static function deletePost($id_post, $user_id) {
        global $connect;
        mysqli_query($connect, "DELETE FROM `comment` WHERE `post_id` = '$id_post'");
        mysqli_query($connect, "DELETE FROM `view` WHERE `post_id` = '$id_post'");
        mysqli_query($connect, "DELETE FROM `post` WHERE `id_post` = '$id_post' AND `user_id` = '$user_id'");
    }

    public static function editPost($id_post, $title, $text, $img) {
        global $connect;
        return mysqli_query($connect, "UPDATE `post` SET `title` = '$title', `text` = '$text', `img` = '$img', `data-update` = CURRENT_TIMESTAMP WHERE `id_post` = '$id_post'");
    }

    public static function countPosts($id_user) {
        global $connect;
        $query = mysqli_query($connect, "SELECT COUNT(*) FROM `post` WHERE `user_id` = '$id_user'");
        $data = mysqli_fetch_assoc($query);
        return $data["COUNT(*)"];
    }
}

?>