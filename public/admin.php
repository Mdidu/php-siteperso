<?php
    require __DIR__ . '/../lib/functions.php';
    getPart('header');
    $lastMessage = file_get_contents("../data/last_message.json");

    echo $lastMessage;

    getPart('footer');