<?php

declare(strict_types=1);
date_default_timezone_set('Europe/Moscow');
define("SECONDS_IN_HOUR", 3600);

require_once('helpers.php');
require_once('data.php');
require_once('functions.php');

$show_complete_tasks = rand(0, 1);

$page_content = include_template('main.php', [
  'tasksList' => $tasksList,
  'categories' => $categories,
  'show_complete_tasks' => $show_complete_tasks
]);

$layout_content = include_template('layout.php', [
  'content' => $page_content,
  'title' => 'Дела в порядке - Главная страница'
]);

print($layout_content);

?>
