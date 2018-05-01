<?php 
function confirm_query($result_set){
    if(!$result_set){
        die("No results returned from database query.");
    }
}


function searchRows($result){
     confirm_query($result);
    while($row = mysqli_fetch_array($result)){
$id =  $row['id'];
        $returnedDiv = "<div class='card white-bg listing'>";
    $returnedDiv .= "<h4 class='course'> <a href='viewPost.php?id=" . $id . "'>" . $row['course'] . "</a></h4>";
    $returnedDiv .= "<h3 class='title'>" . $row['book'] . "</h3>";
    $returnedDiv .= "<p>". $row['request'] ."</p>";
    $returnedDiv .= " <p>email: <a href='mailto:" . $row['email'] . "'>" .$row['email']."</a></p>";
    $returnedDiv .= '</div>';
    echo $returnedDiv;
    }
}

function xmlRows($result){
    confirm_query($result);
    while($row = mysqli_fetch_array($result)){
        $returnedXML = '<?xml version="1.0" encoding="UTF-8"?><offering>';
        $returnedXML .= "<id>" .  $row['id'] . "</id>" ;
        $returnedXML .= "<course>" .  $row['course'] . "</course>" ;
        $returnedXML .= "<book>" .  $row['book'] . "</book>" ;
        $returnedXML .= "<request>" .  $row['request'] . "</request>" ;
        $returnedXML .= "<type>" .  $row['type'] . "</type>" ;
        $returnedXML .= "<email>" . $row['email'] . "'>" .  $row['email'] . "</email></offering>" ;
        echo $returnedXML;
    
        $xml= new DOMDocument();
$xml->loadXML($returnedXML, LIBXML_NOBLANKS); // Or load if filename required
if (!$xml->schemaValidate('../assets/xml/schema.xsd')) // Or schemaValidateSource if string used.
{
    echo "Invalid, according to schema.";
   // You have an error in the XML file
}
else{
    echo "wooooops";
}

    }
}

?>

