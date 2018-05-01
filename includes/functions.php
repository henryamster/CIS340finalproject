<?php 
function confirm_query($result_set){
    if(!$result_set){
        die("No results returned from database query.");
    }
}
?>