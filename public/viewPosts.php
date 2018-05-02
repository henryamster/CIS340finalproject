
<?php include('../includes/header.php'); ?>
<?php require_once('../includes/db-connection.php'); ?>
<?php include('../includes/functions.php'); ?>
<div class="container">
    <div class="searchbar">
        <input name="search" id="search" type="text></input>">
        <label for="search" class="searchbar">Begin typing either the course name or book title...</label>
    </div>


<div id="results">
    <?php
$query = "SELECT * FROM offerings";

$result = mysqli_query($link, $query);
// echo $result;

searchRows($result);
?>
</div>


  
</div>
,<script src="js/searchPosts.js"></script>
<?php include('../includes/footer.php'); ?>