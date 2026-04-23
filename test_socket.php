<?php
echo "Testing socket creation...\n";
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    echo 'Failed to create socket: ' . socket_strerror(socket_last_error()) . "\n";
} else {
    echo "Socket created successfully\n";
    socket_close($socket);
}
?>