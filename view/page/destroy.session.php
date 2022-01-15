<?
require_once '../../controller/session.model.php';
$_SESSION['user'] = null;
setcookie('session_login', '', time());
setcookie('cookie_id', '', time());
header('Location: authorization');
?>