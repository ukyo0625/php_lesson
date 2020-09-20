<?php
 if(isset($_POST['exe'])){
  $name = $_POST['username'];
  $name = "<p>{$name}さんですね。</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Practice</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <h1>動的なWEBページの作成</h1>
  <form method="post" action="">
    <label>名前<input type="text" name="username" required></label>
    <input type="submit" name="exe" value="実行">
  </form>
  <?php echo $name; ?>

</body>
</html>