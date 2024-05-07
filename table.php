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
?>