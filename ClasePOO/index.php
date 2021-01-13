<?php

    header('Content-Type: application/json');
    
    include_once 'recoveryWords.php';

    $api = new RecoveryWords();

    $api->getAll();
    
?>