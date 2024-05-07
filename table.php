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
    function display(){
    echo '<table>';
    global $table;
    for($y=0; $y < count($table); $y++){
        echo '<tr>';
        for($x=0; $x <  count($table[$y]); $x++){
            echo '<td>'.'<button style="width:25px; height:25px;">'.$table[$y][$x].'</button>'.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    }
?>