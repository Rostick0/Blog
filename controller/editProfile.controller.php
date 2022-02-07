<?
require_once '../../model/user.model.php';

$avatar = $_FILES['avatar'];
$description = addslashes(htmlspecialchars($_REQUEST['user_edit-description']));

if (isset($_REQUEST['user__edit-save'])) {
    $_SESSION['errors']['user_edit'] = [];

    if ($avatar['name'] !== '') {
        if ($avatar['type'] !== 'image/jpeg' && $avatar['type'] !== 'image/png' && $avatar['type'] !== "") {
            $_SESSION['errors']['user_edit'][] = 'Не поддерживается формат картинки';
        }

        $path_avatar = '../upload/';
        $upload_img = random_int(1000, 9000) . time() . '.png';
        $_SESSION['user']['avatar'] = $upload_img;

        if ($_SESSION['user']['avatar'] !== 'no-avatar.png') {
            unlink($path_avatar . $_SESSION['user']['avatar']);
        }

        move_uploaded_file($avatar['tmp_name'], $path_avatar . $upload_img);
    }

    if (empty($errors)) {
        User::editUser($_SESSION['user']['id_user'], $_SESSION['user']['avatar'], $description);
        header('Location: ./profile?id=' . $_SESSION['user']['id_user']);
    } else {
        echo array_shift($_SESSION['errors']['user_edit']);
    }
}

?>