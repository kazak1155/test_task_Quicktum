<?php
require_once 'src/function.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>тестовое задание Веб-студия Quicktum</title>

    <link rel="stylesheet" href="/src/style.css">
</head>
<body>
<div>
    <button onclick="onClickButton1" id="button1">button1</button>
    <input id="valueButton1" type="hidden" value="<?= $valueButton1 ?>">
</div>
<div>
    <button onclick="onClickButton2" id="button2">button2</button>
    <input id="valueButton2" type="hidden" value="<?= $valueButton2 ?>">
</div>
<div>
    Hello World
</div>
<script src="/src/script.js"></script>
</body>