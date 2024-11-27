<?php
require_once 'src/function.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>тестовое задание Веб-студия Quicktum</title>

    <link rel="stylesheet" href="/src/style.css">
    <script src="/src/script.js"></script>
</head>
<body>
<div>
    <button onclick="clickButton('<?php echo $valueButton1; ?>')" id="button1">button1</button>
    <input id="valueButton1" type="hidden" value="<?= $valueButton1 ?>">
</div>
<div>
    <button onclick="clickButton('<?php echo $valueButton2; ?>')" id="button2">button2</button>
    <input id="valueButton2" type="hidden" value="<?= $valueButton2 ?>">
</div>
<div>
    Hello World
</div>
<div>
    <button onclick="showButton1Value()" id="buttonvalue1">show button 1 value</button>
</div>


</body>