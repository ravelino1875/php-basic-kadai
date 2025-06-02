<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset=UTF-8>
  <title>PHP基礎編課題</title>
</head>

<p>
  <?php
   $items_detail = [
      '名前' => '玉ねぎ',
      '値段' => 200,
      '産地' => '北海道'];
    foreach ($items_detail as $key => $value) {
      echo "{$key}：{$value}<br>";
    }
  ?>
</p>

</html>