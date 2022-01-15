<?
require_once '../../controller/searchPost.controller.php';

//$count /= 10;
$count = floor($count/10);

$search_navigation = floor((integer)$_GET['id'] / 10);

//var_dump($_GET);
// if ($search_navigation === 0) {
//     $search_navigation = 1;
// }

if ($count > 0) {

    if ($search_navigation > 0) {
        $link = ($search_navigation - 1) * 10;
        
        echo '<li class="bottom-article__navigation_item">
                <a href="?id=' . $link . '">
                    <
                </a>
            </li>';
    }
    //<a href="?id=' . $link . '&?search=' . $search_navigation . '">
    //<a href="?search=' . $search_navigation . '&?id=' . $link . '">

    for ($i = 1; $i < $count + 2; $i++) {
        if ($i < 10) {
            $link = $i + ($search_navigation * 10);
            echo '<li class="bottom-article__navigation_item">
                
                <a href="?id=' . $link . '">
                    ' . $link . '
                </a>
            </li>';
        } else {
            $link = ($search_navigation + 1) * 10;

            // <a href="?search=' . $link . '">
            echo '<li class="bottom-article__navigation_item">
                    <a href="?id=' . $link . '">
                        >
                    </a>
                </li>';
            break;
        }
    }
}
?>