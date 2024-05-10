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
$words = get_words(10);
for($i=0; $i<count($words); $i++){
    e_add($words[$i]);
}

#fill_with_random($table);

display();
for($i= 0; $i<count($words); $i++){
    echo "<input type='checkbox'>$words[$i]</input><br>";
}

?>