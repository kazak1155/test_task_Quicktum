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
    <button onclick="clickButton1()" class="button_do_not_push" id="button1">button1</button>
</div>
<div>
    <button onclick="clickButton2()" class="button_do_not_push" id="button2">button2</button>
</div>
<div id="text_in_div" class="inactive">
    Hello World
</div>
<div>
    <form action="/" method="post">
        <input name="inputText" id="string">
        <button>send input text to check</button>
    </form>
</div>

<script src="/src/script.js"></script>
</body>
