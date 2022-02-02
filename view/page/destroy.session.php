<?
require_once '../../controller/session.controller.php';
$_SESSION['user'] = null;
setcookie('session_login', '', time());
setcookie('cookie_id', '', time());
header('Location: authorization');
?>