<?

class Online {
    public static function getOnline($id) {
        global $connect;
        $query = mysqli_query($connect, "SELECT `last_online`,`is_online` FROM `user-info` WHERE `user_id` = '{$id}'");
        $data = mysqli_fetch_assoc($query);
        return $data;
    }

    public static function updateOnline($id) {
        global $connect;
        mysqli_query($connect, "UPDATE `user-info` SET `last_online` = CURRENT_TIMESTAMP WHERE `user_id` = '$id'");
    }
}

?>