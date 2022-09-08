<?php

require 'config.php';

extract($_POST);

$content = file_get_contents('https://raw.githubusercontent.com/laravel/docs/9.x/database.md');

echo $markdown($content);
