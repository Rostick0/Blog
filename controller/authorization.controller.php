<?

require_once '../../model/user.model.php';

$login = addslashes(htmlspecialchars($_REQUEST['login']));
$password = addslashes(htmlspecialchars($_REQUEST['password']));
$email = addslashes(htmlspecialchars($_REQUEST['email']));
$avatar = ($_FILES['avatar']);

$hashPassword = password_hash($password, PASSWORD_DEFAULT);

$confirm_email = (integer) $_REQUEST['confirm_email'];

if (isset($_REQUEST['do_log'])) {
    $getHashPassword = User::getPassword($login);
    
    if (password_verify($password, $getHashPassword)) {
        $user = User::getUser($login);
        $_SESSION['user'] = $user;

        $cookie = md5(random_int(1245321, 99999999));

        setcookie('session_login', $user['login'], time() + 60*60*24*30);
        setcookie('cookie_id', $cookie, time() + 60*60*24*30);

        User::setCookie($login, $cookie);

        header('Location: ./');
    } else {
        echo '<p class="error-message">Неверный логин или пароль</p>';
    }
}

if (isset($_REQUEST['do_registration'])) {
    $_SESSION['errors']['authorization'] = [];

    if (strlen(trim($login)) < 3) {
        $_SESSION['errors']['authorization'][] = 'Логин меньше 3 символов';
    }

    if (strlen(trim($login)) > 15) {
        $_SESSION['errors']['authorization'][] = 'Логин больше 15 символов';
    }

    if (!preg_match("#^[aA-zZ0-9\-_]+$#", $login)) {
        $_SESSION['errors']['authorization'][] = 'В логине поддерживаются только английские буквы, цифры';
    }

    if (strlen($email) < 5) {
        $_SESSION['errors']['authorization'][] = 'Email слишком короткий';
    }

    $count = User::checkLogin($login);

    if ($count != 0) {
        $_SESSION['errors']['authorization'][] = 'Такой логин существует';
    }

    if (strlen($password) < 8) {
        $_SESSION['errors']['authorization'][] = 'Пароль меньше 8 символов';
    }

    if (!empty($avatar)) {
        if ($avatar['type'] !== 'image/jpeg' && $avatar['type'] !== 'image/png' && $avatar['type'] !== "") {
            $_SESSION['errors']['authorization'][] = 'Не поддерживается формат картинки';
        }
    }

    if (!empty($_SESSION['errors']['authorization'])) {
        echo '<p class="error-message">' . array_shift($_SESSION['errors']['authorization']) . '</p>';
    } else {
        $_SESSION['errors']['authorization'] = 'none';

        $_SESSION['email_token'] = random_int(000000, 999999);

        $to = $email;
        $from = "zajcevav30@gmail.com";
        $subject = "Регистрация";
        $message = "Ваш код для авторизации: {$_SESSION['email_token']}";
        // $subject = "?uft-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from" . "\r\n" . 
        "Reply-To: $from" . "\r\n" . 
        "X-Mailer: PHP/" . phpversion();

        mail($to, $subject, $message, $headers);
    }
}

if (isset($_REQUEST['do_confirm-email'])) {
    $errors = [];

    if ($_SESSION['email_token'] != $confirm_email) {
        $errors[] = 'Неправильный код';
    }

    if (!empty($errors)) {
        echo '<p class="error-message">' . array_shift($errors) . '</p>';
    } else {
        // if (!empty($avatar)) {
        //     $path_avatar = '../upload/';
        //     $upload_img = random_int(1000, 9000) . time() . '.png';

        //     move_uploaded_file($avatar['tmp_name'], $path_avatar . $upload_img);
        // }

        //User::addUser($login, $hashPassword, $email ,$upload_img);

        $_SESSION['email_token'] = null;

        echo '<p class="successful-message">Ваш аккаунт успешно зарегистрирован</p>';
    }
}

if (isset($_REQUEST['transition_registration'])) {
    $_SESSION['authorization_registration'] = true;
}

if (isset($_REQUEST['transition_log'])) {
    $_SESSION['authorization_registration'] = false;
}

if (!$_SESSION['user']) {
    $session_login = addslashes($_COOKIE['session_login']);
    $cookie_id = addslashes($_COOKIE['cookie_id']);
    if ($_COOKIE['session_login'] && $cookie_id) {
        if (User::checkCookie($session_login, $cookie_id) === '1') {
            $user = User::getUser($session_login);
            $_SESSION['user'] = $user;
    
            $cookie = md5(random_int(1245321, 99999999));
            User::setCookie($session_login, $cookie);
    
            $_SESSION['user']['cookie'] = $cookie;

            setcookie('session_login', $session_login, time() + 60*60*24*30);
            setcookie('cookie_id', $cookie, time() + 60*60*24*30);
        }
    }
}

if ($_COOKIE['cookie_id']) {
    $cookie = md5(random_int(1245321, 99999999));
    User::setCookie($_SESSION['user']['login'], $cookie);
    
    $_SESSION['user']['cookie'] = $cookie;

    setcookie('cookie_id', $cookie, time() + 60*60*24*30);
}

?>