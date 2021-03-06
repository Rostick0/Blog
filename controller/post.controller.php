<?
require_once '../../model/post.model.php';

$title = addslashes(htmlspecialchars($_REQUEST['title']));
$text = addslashes(htmlspecialchars($_REQUEST['text']));
$img = $_FILES['img'];

if (isset($_REQUEST['create-button'])) {
    $errors = [];
    $author = $_SESSION['user']['id_user'];
    if (strlen(trim($title)) < 5) {
        $errors[] = 'Заголовок меньше 5 символов';
    }

    if (strlen(trim($title)) > 200) {
        $errors[] = 'Заголовок больше 200 символов';
    }

    if (strlen(trim($text)) < 150) {
        $errors[] = 'Текст статьи меньше 150 символов';
    }

    if (strlen(trim($text)) > 5000) {
        $errors[] = 'Текст статьи больше 5000 символов';
    }

    if ($img['name'] !== '') {
        if ($img['type'] !== 'image/jpeg' && $img['type'] !== 'image/png' && $img['type'] !== "") {
            $errors[] = 'Не поддерживается формат картинки';
        }
    }

    if (!empty($errors)) {
        echo '<p class="error-message">' . array_shift($errors) . '</p>';
    } else {
        if ($img['name'] !== '') {
            $path_img = '../upload/';
            $upload_img = random_int(10000, 99999) . time() . '.png';

            move_uploaded_file($img['tmp_name'], $path_img . $upload_img);
        } else {
            $upload_img = 'no-img.png';
        }

        Post::addPost($author, $title, $text ,$upload_img);

        echo '<p class="successful-message">Ваш пост успешно создан</p>';
    }
}

function deletePost($post) {
    Post::deletePost($post['id_post'], $_SESSION['user']['id_user']);
    if ($post['img'] !== 'no-img.png') {
        unlink('../../view/upload/' . $post['img']);
    }
    header('Location: ./');
}

function updatePost($post) {
    $title = addslashes(htmlspecialchars($_REQUEST['title']));
    $text = addslashes(htmlspecialchars($_REQUEST['text']));
    $img = $_FILES['img'];
    $url_id = (int) $_GET['id'];

    if ($_SESSION['user']['id_user'] === $post['id_user']) {
        if ($img['name'] != '') {
            if ($post['img'] != 'no-img.png') {
                unlink('../../view/upload/' . $post['img']);
            }

            $path_img = '../upload/';
            $upload_img = random_int(10000, 99999) . time() . '.png';

            move_uploaded_file($_FILES['img']['tmp_name'], $path_img . $upload_img);
        } else 
        {
            $upload_img = $post['img'];
        }
    
        $query = Post::editPost($url_id, $title, $text, $upload_img);

        if ($query) {
            header("Location:  ./post?id=" . $url_id . "");
        }
    }
}

?>