<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

printf('Hostname: %s'.PHP_EOL, Request::hostname());
printf('Server Name: %s'.PHP_EOL, Request::serverName());
printf('Server Address: %s'.PHP_EOL, Request::serverAddress());
