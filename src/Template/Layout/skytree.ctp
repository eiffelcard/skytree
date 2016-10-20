<!DOCTYPE html>
<html lang="ja">
<head>
<title><?= h($this->fetch('title')) ?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<?php
echo $this->Html->css('bootstrap.css');
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>
  <div class="container-fluid"> <!-- 全体を囲むコンテナ-->
<div id=headermenu>
	<div class="row">
	<div class="col-xs-12 ">
<h1 class="text-primary" style="text-align:center" ><?= _($header) ?></h1></div>

</div></div>
<?= $this->fetch('content') ?>


</body>
<div id="footer" class="h7 color:gray"><?= _($footer) ?></div>
</html>
