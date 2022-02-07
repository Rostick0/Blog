<?
require_once './../model/online.model.php';

$globalIP = '127.0.0.1';

$socket = stream_socket_server("tcp://blog/socket/index.php", $errno, $errstr);

if (!$socket) {
    die("$errstr ($errno)\n");
}

while ($connect = stream_socket_accept($socket, -1)) {
    fwrite($connect, "HTTP/1.1 200 OK\r\nContent-Type: text/html\r\nConnection: close\r\n\r\nПривет");
    fclose($connect);
}

fclose($socket);

?>