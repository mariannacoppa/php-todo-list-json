<?php
    function filterNameCallback($item) {
        return $item->name;
    }

    $string = file_get_contents('./data/todo-list.json');
    $todolist = json_decode($string);
    $mapArray = array_map('filterNameCallback', $todolist);
    
    header('Content: application/json');
    //echo join("<br>", $mapArray);
?>