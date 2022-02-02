<?
require_once '../include/connect.php';
require_once '../model/post.model.php';
require_once 'functions.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *, Authorization');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER['REQUEST_METHOD'];

$q = addslashes(htmlspecialchars($_GET['q']));
$param = explode('/', $q);
$type = $param[0] . '/' . $param[1];
$method_url = $param[2];
$id = (integer) $param[3];

if ($method_url == ''); {
    $id = (integer) $param[2];
}

if ($type === 'api/posts') {
    switch ($method) {
        case 'GET':
            if (empty($id)) {
                getArticles($method_url);
            } else {
                getPost($id);
            }

            // $res = [
            //     'id' => 1,
            //     'name' => 'Egor',
            //     'age' => 19
            //  ];
            // echo json_encode($res);

            // if (!empty($id)) {
            //     getPost($connect, $id);
            // } else {
            //     getPosts($connect);
            // }
            break;
        case 'POST':
            // if (empty($id)) {
            //     createPost($connect, $_POST);
            // } else {
            //     updatePost($connect, $_POST, $id);
            // }
            break;
        // case 'DELETE':
        //     deletePost($connect, $id);
        //     break;
    }
}
// $res = [
//     'id' => 1,
//     'name' => 'Egor',
//     'age' => 19
// ];
?>