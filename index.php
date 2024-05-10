<script>
    function changeColor(color, id) {
        if (document.getElementById(id).style.background == "yellow"){
            document.getElementById(id).style.removeProperty("background-color");
    } else{
        document.getElementById(id).style.background = color;}
    
}
    function fun(id) {
        changeColor("yellow", id);
    }        
    </script>
<?php
include "./engine.php";
include "./word_dict.php";
init(10,10);
$words = get_words(20);
$added_words = array();
for($i=0; $i<count($words); $i++){
    if (e_add($words[$i])) {
        $added_words[] = $words[$i];
    }
}

fill_with_random($table);

display();
for($i= 0; $i<count($added_words); $i++){
    echo "<input type='checkbox'>$added_words[$i]</input><br>";
}

?>