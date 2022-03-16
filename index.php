<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>九九表</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>九九表</h2>
  <p>緑色は偶数です。</p>
  <table>
    <tr>
      <th>&nbsp;</th>
      <?php for ($i=1; $i <= 9; $i++) { ?>
        <th><?= $i ?></th>
      <?php } ?>
    </tr>
  <?php for ($i=1; $i <= 9; $i++) { ?>
    <tr>
      <th><?= $i ?></th>
      <?php
      for($j = 1; $j <= 9; $j++) {
      $multiply = $i * $j;
      if($multiply % 2 === 0):
      ?>
        <td class="even"><?= $multiply; ?></td>
      <?php else: ?>
        <td><?= $multiply; ?></td>
      <?php
      endif;
      }
      ?>
    </tr>
  <?php } ?>
    
  </table>
</body>
</html>
