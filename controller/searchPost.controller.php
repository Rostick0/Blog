<?

require_once '../../model/post.model.php';

$search_input = addslashes(htmlspecialchars($_REQUEST['search_input']));
$search_input = str_replace(' ', '%', $search_input);

$search_by = $_REQUEST['search_by'];
$by_param = 'id_post';

switch ($search_by) {
    case 'search_by_name':
        $by_param = 'title';
        break;
    case 'search_by_date':
        $by_param = 'date';
        break;
    case 'search_by_view':
        $by_param = 'view';
        break;
    default:
        $by_param = 'id_post';
        break;
}

if ((int) $_GET['id'] < 2) {
    $get_posts = 0;
} else {
    $get_posts = $_GET['id'] * 10 - 10;
}

$posts = Post::getArticles($by_param, 0);


if (isset($search_input)) {
    $posts = Post::searchPosts($by_param, $search_input, $get_posts);
    // if (mysqli_num_rows($post) === 0) {
    //     echo '0';
    // }
}

$count = Post::searchPostsCount($search_input);

?>