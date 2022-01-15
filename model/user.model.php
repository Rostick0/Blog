<?

class User {
    public static function addUser($login, $password, $email, $avatar) {
        global $connect;
        mysqli_query($connect, "INSERT INTO `user` (`id_user`, `login`, `password`, `email`, `cookie`, `avatar`, `is_banned`) VALUES (NULL, '$login', '$password', '$email', NULL, '$avatar', '0')");
        mysqli_query($connect, "INSERT INTO `user-info` (`user_id`, `description`, `date_registration`, `last_online`, `is_online`, `is_banned`) VALUES (NULL, NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '1', '0');");
    }

    public static function getUser($login) {
        global $connect;
        $query = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login'");
        $data = mysqli_fetch_assoc($query);
        return $data;
    }

    public static function getUserById($id) {
        global $connect;
        $query = mysqli_query($connect, "SELECT * FROM `user` WHERE `id_user` = '$id'");
        $data = mysqli_fetch_assoc($query);
        return $data;
    }

    public static function checkLogin($login) {
        global $connect;
        $query = mysqli_query($connect, "SELECT COUNT(*) FROM `user` WHERE `login` = '$login'");
        $data = mysqli_fetch_assoc($query);
        // foreach ($data as $value) {
        //     return $value;
        // }
        return $data["COUNT(*)"];
    }

    public static function getPassword($login) {
        global $connect;
        $query = mysqli_query($connect, "SELECT `password` FROM `user` WHERE `login` = '$login'");
        $data = mysqli_fetch_assoc($query);
        return $data['password'];
    }

    public static function setCookie($login, $cookie) {
        global $connect;
        mysqli_query($connect, "UPDATE `user` SET `cookie` = '$cookie' WHERE `login` = '$login'");
    }

    public static function getCookie($login, $cookie) {
        global $connect;
        $query = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND `cookie` = '$cookie'");
        $data = mysqli_fetch_assoc($query);
        return $data['cookie'];
    }

    public static function checkCookie($login, $cookie) {
        global $connect;
        $query = mysqli_query($connect, "SELECT COUNT(*) FROM `user` WHERE `login` = '$login' AND `cookie` = '$cookie'");
        $data = mysqli_fetch_assoc($query);
        // if ($data["COUNT(*)"] === '1') {
        //     return true;
        // }
        // return false;
        return $data["COUNT(*)"];
    }
}

?>