<?

class View {
    // public static function getViews($id_post) {
    //     global $connect;
    //     $query = mysqli_query($connect, "SELECT `view` FROM `post` WHERE `id_post` = '$id_post'");
    //     $data = mysqli_fetch_assoc($query);
    //     return $data['view'];
    // }
    public static function updateView($post_id) {
        global $connect;
        $query = mysqli_query($connect, "SELECT COUNT(*) FROM `view` WHERE `post_id` = '$post_id'");
        $data = mysqli_fetch_assoc($query);
        $count = $data["COUNT(*)"];
        mysqli_query($connect, "UPDATE `post` SET `view` = '$count' WHERE `id_post` = '$post_id'");
    }
    public static function checkView($post_id, $user_id) {
        global $connect;
        $query = mysqli_query($connect, "SELECT * FROM `view` WHERE `post_id` = '$post_id' AND `user_id` = '$user_id'");
        return $query;
    }
    public static function addView($post_id, $user_id) {
        global $connect;
        mysqli_query($connect, "INSERT INTO `view` (`id_view`, `post_id`, `user_id`) VALUES (NULL, '$post_id', '$user_id')");
    }
}

?>