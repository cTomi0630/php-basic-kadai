<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
      // ソート関数(引数1：対象配列、引数2：昇順降順)
      function sort_2way ($array , $order) {
        // true　だったら昇順
        if ($order) {
          echo '昇順にソートします。<br>';
          sort($array);
        } else {
          echo '降順にソートします。<br>';
          arsort($array);
        }
        foreach ($array as $value) {
          echo $value . '<br>'; 
        }
      }

      // ソートする配列
      $num = [15, 4, 18, 23, 10];

      // 関数呼び出し
      // 昇順ソート
      sort_2way($num, true);

      // 降順ソート
      sort_2way($num, false);

    ?>
  </p>
</body>
</html>