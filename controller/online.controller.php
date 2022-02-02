<?
require_once '../../model/online.model.php';

Online::updateOnline($_SESSION['user']['id_user']);
?>