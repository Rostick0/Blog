<?

require_once '../../model/view.model.php';

function getViews($view) {
    if ($view < 1000) {
        echo $view;
    } else if ($view < 1000000) {
        echo round($view/1000, 1, PHP_ROUND_HALF_EVEN) . 'К';
    } else {
        echo round($view/1000000, 3, PHP_ROUND_HALF_EVEN) . 'M';
    }
}

function viewController($post_id) {
    $checkView = View::checkView($post_id, $_SESSION['user']['id_user']);
    if (mysqli_num_rows($checkView) === 0) {
        View::addView($post_id, $_SESSION['user']['id_user']);
        View::updateView($post_id);
    }
}
?>