<?php

function getTasksNumber(array $list, string $task): int {
  $count = 0;

  foreach ($list as $item) {
    if ($item['category'] === $task) {
      $count++;
    }
  }

  return $count;
}

function esc($str) {
  $text = htmlspecialchars($str);

  return $text;
}

function getTimeInterval($date): int {
  date_default_timezone_set('Europe/Moscow');
  $secondsInHour = 3600;

  return floor((strtotime($date) - time()) / $secondsInHour);
}

?>
