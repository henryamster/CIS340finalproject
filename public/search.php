<?php
include('../includes/functions.php');
$q = $_GET['q'];
if (isset($q)){
               
               include('../includes/db-connection.php');
       $query = "SELECT * FROM offerings WHERE course LIKE '%" . mysqli_real_escape_string($link, $q) . "%' or book LIKE  '%" . mysqli_real_escape_string($link, $q) . "%'  LIMIT 10";

     $result = mysqli_query($link, $query);
// echo $result;

searchRows($result);
}


?>