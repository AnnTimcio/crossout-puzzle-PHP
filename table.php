<?php
    $table = array();
    function init($w, $h){
        global $table;
        for($y=0; $y < $h; $y++){
            $table [] = array();
            for($x=0; $x < $w; $x++){
                $table[$y][] = ' ';
            }
        }
    }

    function fill_with_random(){
        $letters= 'abcdefghijklmnoprstuwyz';
        global $table;
        for($y=0; $y < count($table); $y++){
            for($x=0; $x < count($table[$y]); $x++){
                $table[$y][$x] = $letters[rand(0, strlen($letters))-1];
            }
        }
    }
?>