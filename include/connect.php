<?

require_once 'config.php';

$connect = mysqli_connect($config['hostname'], $config['username'], $config['password'], $config['database']);

if (!$connect) {
    die("error connect");
}

mysqli_set_charset($connect, 'utf8');
// mysqli_query($connect, "SET NAMES 'utf8'");
?>