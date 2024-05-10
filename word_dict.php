<?php
    $WORDS = array('kot', 'pies', 'suwak', 'pilka', 'nietoperz', 'kubek',
    'balon', 'lampa', 'firana', 'komputer', 'mysz', 'maj',
    'drzwi', 'dzwon', 'sklep', 'pomidor', 'czekolada', 'cytryna',
    'baterie', 'chusta', 'kapusta', 'woda', 'szklanka', 'makaron',
    'cukier', 'gra', 'mucha', 'susza', 'ucho', 'pusto', 'drabina');

    function get_words($n){
        global $WORDS;
        $words = array();
        while(count($words)<$n){
            $words[] = $WORDS[array_rand($WORDS)];
            $words = array_unique($words);
        }
        return $words;
    }
?>

