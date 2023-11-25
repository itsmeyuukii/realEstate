<?php
function getRandom ($arr){
    
    shuffle($arr); // to shuffle the given number of array from $arr above

    echo end($arr); // to display the shuffle array from $arr
} 