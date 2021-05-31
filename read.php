<?php

$str = '';
$file = fopen('data/data.csv', 'r');
flock($file, LOCK_EX);

if($file){
  while($line = fgets($file)){
    $str .= "<tr><td>{$line}</td></tr>";
  }
}

flock($file, LOCK_UN);
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>送信の中身</title>
</head>
<style>
body{
  width: 600px;
}
</style>
<body>

<fieldset style="border: 10px double #FF0099; padding: 10px;"><legend style="background-color: #FF0099; padding: 3px 10px; border-radius: 5px; color: white;">（一覧画面）</legend>
    <a href="input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>名前,Email,性別,年齢,趣味</th>
        </tr>
      </thead>
      <tbody>
         <?= $str ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>