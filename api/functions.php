<?
require_once '../include/connect.php';
require_once '../model/post.model.php';

function getArticles($method_url) {
    $query = Post::getArticles($method_url, 0);

    $res = [
        'status' => false
    ];

    if ($query) {
        $posts = [];

        while ($post = mysqli_fetch_assoc($query)) {
            $posts[] = $post;
        }

        $res = $posts;
    }

    echo json_encode($res);
}

function getPost($id) {
    $query = Post::getPost($id);

    $res = [
        'status' => false,
        'message' => 'Post not found'
    ];

    if ($query) {
        $res = $query;
    }

    echo json_encode($res);
}

function searchPosts($method_url, $num) {
    $query = Post::searchPosts(null, $method_url, $num);
}
?>