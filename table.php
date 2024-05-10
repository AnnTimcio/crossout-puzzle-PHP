<?php
    $table = array();
    $WIDTH = 0;
    $HEIGHT = 0;

    function init($w, $h){
        global $table, $WIDTH, $HEIGHT;

        for($y=0; $y < $h; $y++){
            $table [] = array();
            for($x=0; $x < $w; $x++){
                $table[$y][] = ' ';
            }
        }

        $HEIGHT = $h;
        $WIDTH = $w;
    }

    function fill_with_random(){
        $letters= 'abcdefghijklmnoprstuwyz';
        global $table, $WIDTH, $HEIGHT;

        for($y=0; $y < count($table); $y++){
            for($x=0; $x < count($table[$y]); $x++){
                if ($table[$y][$x] == ' '){
                $table[$y][$x] = $letters[rand(0, strlen($letters))-1];
            }}
        }
    }
    function display(){
    echo '<table>';
    global $table;
    for($y=0; $y < count($table); $y++){
        echo '<tr>';
        for($x=0; $x <  count($table[$y]); $x++){
            $button_id = "b".$x."_".$y;
            echo '<td>'."<button style='width:25px; height:25px;' onclick='fun(\"$button_id\")' id='$button_id'> "
                .$table[$y][$x].'</button>'.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    }
    function add($x, $y, $word, $dir){
        if ($dir ==  'nw'){
            add_nw($x, $y, $word);
        }
        else if ($dir ==  'e'){
            add_e($x, $y, $word);
        }
        else if ($dir ==  'e'){
            add_e($x, $y, $word);
        }
        else if ($dir ==  'n'){
            add_n($x, $y, $word);
        }
        else if ($dir ==  'ne'){
            add_ne($x, $y, $word);
        }
        else if ($dir ==  'se'){
            add_se($x, $y, $word);
        }
        else if ($dir ==  's'){
            add_s($x, $y, $word);
        }
        else if ($dir ==  'w'){
            add_w($x, $y, $word);
        }
        else if ($dir ==  'sw'){
            add_sw($x, $y, $word);
        }
    }


    function add_e($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($x + $a < $WIDTH){
                $table[$y][$x + $a] = $word[$i];
            }
            $a++;
        }
    }
    function can_add_e($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($x + $a < $WIDTH){
                if ($table[$y][$x + $a] != ' ' && $table[$y][$x + $a] != $word[$i])
                    return FALSE;
            }
            $a++;
        }
        return TRUE;
    }

    function add_n($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($y + $a >= 0){
                $table[$y + $a][$x] = $word[$i];
            }
            $a--;
        }
    }
    function can_add_n($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($y + $a >= 0){
                if ($table[$y + $a][$x] != ' ' && $table[$y + $a][$x] != $word[$i]){
                    return FALSE;
                }
            }
            $a--;
        }
        return true;
    }
    function add_ne($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $b = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($x + $a < $WIDTH && $y + $b >=0){
                $table[$y + $b][$x + $a] = $word[$i];
            }
            $a++;
            $b--;
        }
    }
    function can_add_ne($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $b = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($x + $a < $WIDTH && $y + $b >=0){
                if($table[$y + $b][$x + $a] != ' ' && $table[$y + $b][$x + $a] != $word[$i]){
                    return false;
                }
            }
            $a++;
            $b--;
        }
        return true;
    }
    function add_se($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $b = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($x + $a < $WIDTH && $y + $b < $HEIGHT){
                $table[$y + $b][$x + $a] = $word[$i];
            }
            $a++;
            $b++;
        }
    }
    function can_add_se($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $b = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($x + $a < $WIDTH && $y + $b < $HEIGHT){
                if ($table[$y + $b][$x + $a] != ' ' && $table[$y + $b][$x + $a] != $word[$i]){
                    return FALSE;
                }
            }
            $a++;
            $b++;
        }
        return true;
    }
    function add_s($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($y + $a <=  $HEIGHT){
                $table[$y + $a][$x] = $word[$i];
            }
            $a++;
        }
    }
    function can_add_s($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($y + $a <=  $HEIGHT){
                if ($table[$y + $a][$x] != ' ' && $table[$y + $a][$x] != $word[$i]){
                    return false;
                }
            }
            $a++;
        }
        return true;
    }
    function add_sw($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $b = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($x + $a >=0 && $y + $b <=  $HEIGHT){
                $table[$y + $b][$x + $a] = $word[$i];
            }
            $a--;
            $b++;
        }
    }
    function can_add_sw($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $b = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($x + $a >=0 && $y + $b <=  $HEIGHT){
                if($table[$y + $b][$x + $a] != ' ' && $table[$y + $b][$x + $a] != $word[$i]){
                return false;}
            }
            $a--;
            $b++;
        }
        return true;
    }
    function add_w($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($x + $a >=0){
                $table[$y][$x + $a] = $word[$i];
            }
            $a--;
        }
    }
    function can_add_w($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($x + $a >=0){
                if($table[$y][$x + $a] != ' ' && $table[$y][$x + $a] != $word[$i]){
                    return false;
                }
            }
            $a--;
        }
        return true;
    }
    function add_nw($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $b = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($x + $a >=0 && $y + $b >= 0){
                $table[$y + $b][$x + $a] = $word[$i];
            }
            $a--;
            $b--;
        }
    }
    function can_add_nw($x, $y, $word){
        global $table, $WIDTH, $HEIGHT;
        $a = 0;
        $b = 0;
        $len = strlen($word);
        for ($i = 0; $i < $len; $i++){
            if($x + $a >=0 && $y + $b >= 0){
                if($table[$y + $b][$x + $a] != ' ' && $table[$y + $b][$x + $a] != $word[$i]){
                    return false;
                }
            }
            $a--;
            $b--;
        }
        return true;
    }
?>