<?php
    $string = file_get_contents('./data/todo-list.json');
    $todolist = json_decode($string);
    var_dump($todolist);
?>