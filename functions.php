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

?>