<?php

$valueButton1 = 'do not push';
$valueButton2 = 'push';

if (isset($_POST['button'])){
    if ($_POST['button'] == 1) {
        $valueButton1 = 'push';
    } else {
        $valueButton2 = 'do not push';
    }
};
