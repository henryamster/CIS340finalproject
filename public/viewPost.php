
    <div class="card white-bg singleItem">
    
    <?php
$id = $_GET['id'];
include('../includes/header.php'); 
 require_once('../includes/db-connection.php'); 
 include('../includes/functions.php'); 
$query = "SELECT * FROM offerings WHERE (id like  " .  $id . ");" ;

     $result = mysqli_query($link, $query);
// echo $result;

xmlRows($result);
include('../includes/footer.php');
?>


    </div>

