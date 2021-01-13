<?php

include_once 'connect.php';

class Words extends Connect{
    
    function getWords(){
        $query = $this->connect()->query('SELECT * FROM Words');
        return $query;
    }

}

?>