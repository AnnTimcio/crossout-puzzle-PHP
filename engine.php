<?php
$TRY = 40;
include "./table.php";

function _try_add($word){
    global $table, $WIDTH, $HEIGHT;
    $pos_dir = array('n','w', 'e', 's', 'nw', 'ne', 'se', 'sw');
    $x = rand(0, $WIDTH - 1);
    $y = rand(0, $HEIGHT - 1);
    $dire = $pos_dir[array_rand($pos_dir)];
    $i = _can_add($x, $y, $word, $dire);
    if( $i){
        add($x, $y, $word, $dire);
        #echo "$x  $y  $word  $dire     /";
    }

    return $i;
}

function e_add($word){
    global $TRY;
    for($i=0; $i < $TRY; $i++){
        if (_try_add($word)){
            return true;
        }
    }
    return false;
}
function _can_add($x, $y, $word, $direction){
    global $table, $WIDTH, $HEIGHT;
    if ($direction == 'nw' || $direction == 'w' || $direction == 'sw'){
        if (strlen($word) > $x + 1){
            return False;}}
    if ($direction == 'sw' || $direction == 's' || $direction == 'se'){
        if (strlen($word) + $y > $HEIGHT){
            return False;}}
    if ($direction == 'se' || $direction == 'e' || $direction == 'ne'){
        if (strlen($word) + $x > $WIDTH){
            return False;}}
    if ($direction == 'ne' || $direction == 'n' || $direction == 'nw'){
        if (strlen($word) > $y + 1){
            return False;}} 

    if ($direction == 'e'){
        return can_add_e($x, $y, $word);}

    if ($direction == 's'){
        return can_add_s($x, $y, $word);}

    if ($direction == 'w'){
        return can_add_w($x, $y, $word);}

    if ($direction == 'n'){
        return can_add_n($x, $y, $word);}

    if ($direction == 'sw'){
        return can_add_sw($x, $y, $word);}

    if ($direction == 'se'){
        return can_add_se($x, $y, $word);}

    if ($direction == 'ne'){
        return can_add_ne($x, $y, $word);}

    if ($direction == 'nw'){
        return can_add_nw($x, $y, $word);}

    die("XXX");
}


?>