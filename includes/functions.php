<?php 
function confirm_query($result_set){
    if(!$result_set){
        die("No results returned from database query.");
    }
}


function searchRows($result){
     confirm_query($result);
    while($row = mysqli_fetch_array($result)){

        $returnedDiv = "<div class='card white-bg listing'>";
    $returnedDiv .= "<h4 class='course'>". $row['course'] . "</h4>";
    $returnedDiv .= "<h3 class='title'>" . $row['book'] . "</h3>";
    $returnedDiv .= "<p>". $row['request'] ."</p>";
    $returnedDiv .= " <p>email: <a href='" . $row['email'] . "'>" .$row['email']."</a></p>";
    $returnedDiv .= '</div>';
    echo $returnedDiv;
    }
}

?>