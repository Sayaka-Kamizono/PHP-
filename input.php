<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題</title>
</head>

<style>
body{
 width: 600px;
}
</style>

<body>
  <form action="create.php" method="POST">
    <!-- <fieldset>
      <legend>アンケート</legend> -->


      <fieldset style="border: 10px double green; padding: 10px;"><legend style="background-color: green; padding: 3px 10px; border-radius: 5px; color: white;">アンケート</legend>

      
      <a href="read.php">一覧画面</a>
      <div>
        名前: <input type="text" name="fullname">
      </div>
      <div>
      Eメール: <input type="email" name="Email">

      </div>
      <div>
      性別: <input type="radio" name="gender" id="male" value="1">
    <label for="male"> 男性 </label>  
  <input type="radio" name="gender" id="female"  value="2">
    <label for="female"> 女性 </label>
      </div>

      <div>
<label for="age"> 年齢 </label>
<select name="age" id="age">
<option value="0" selected>選択してください。</option>
<?php
for($num = 1; $num <= 7; $num++) {
  echo '<option value="' . $num . '">' . $num . '0代</option>' . "\n";
}
?>
<option value="8">80代以上</option>
</select>
</div>
<div>
<p>趣味</p>
<?php
$hobby = array(0 => "スポーツ",
               1 => "映画",
               2 => "車",
               3 => "音楽",
               4 => "旅行",
               5 => "カメラ",
               6 => "読書",
               7 => "その他");
$ids = array('sports', 'movie', 'car', 'music', 'travel', 'camera', 'book', 'other');
foreach($hobby as $key => $value) {
  echo '<label for="' . $ids[$key] .'"><input type="checkbox" name="hobby[]" value="' 
  .$key . '" id="' . $ids[$key] . '">' . $value . '</label>' . "\n";
}
 
?>
</div>


      <div>
        <button>送信</button>
      </div>
    </fieldset>
  </form>

</body>

</html>