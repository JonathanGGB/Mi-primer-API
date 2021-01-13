<?php

include_once 'words.php';

class RecoveryWords{


    function getAll(){
        $word = new Words();
        $words = array();
        $words["items"] = array();
        $words["english"] = array();

        $res = $word->getWords();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "id" => $row['wordId'],
                    "word" => $row['word'],
                    "lenguaje" => $row['languageID'],
                );
                array_push($words["items"], $item);
            }
        
            echo json_encode($words);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
    
}

?>