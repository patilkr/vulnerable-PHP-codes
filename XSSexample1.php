<?php

if (PHP_SAPI === 'cli') {
    parse_str(implode('&', array_slice($argv, 1)), $_GET);
}

if (NULL == $_GET['name']) $_GET['name'] = "GuestUser! ";

echo 'Hello, welcome ' . $_GET['name'];
