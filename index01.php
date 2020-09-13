<?php
 $msg = "<p>毎日プログラミングの勉強を頑張る！</p>";
 $msg .= "<p>まずはPHPだ！</p>";
 $age = 28;
 $age = "<p>私は{$age}の男です。</p>";
 $mission = <<<eof
  <h2>学習内容</h2>
  <ul>
    <li>PHP</li>
    <li>java</li>
    <li>java script</li>
  </ul>
eof;
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP</title>
  <meta charset="utf-8">
</head>
<body>
<h1>PHP</h1>
<?php
  echo $msg;
  echo $age;
  echo $mission;
?>
</body>
</html>