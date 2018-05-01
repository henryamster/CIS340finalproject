<?php include("../includes/header.php");?>
<?php include('../includes/db-connection.php');?>
<?php include('../includes/functions.php');?>


<?php 

    $course=  mysqli_escape_string($link, $_POST['course']);
    $book=  mysqli_escape_string($link, $_POST['book']);
    $request=  mysqli_escape_string($link, $_POST['request']);
    $email=  mysqli_escape_string($link, $_POST['email']);
    $type=  mysqli_escape_string($link, $_POST['type']);
   
    $query = "INSERT INTO offerings (course, book, request, email, type)
    VALUES('" . $course . "','" .$book . "','" .$request . "','" . $email . "','" . $type . "')";

if (mysqli_query($link, $query)) {
    echo "New record created successfully";
    echo'<div class="card white-bg listing">';
    echo '<h4 class="course">'. $_POST['course'] . '</h4>';
    echo '<h3 class="title">' . $_POST['book'] . '</h3>';
    echo '<p>'. $_POST['request'] .'</p>';
    echo ' <p>email: <a href="' . $_POST['email'] . '">'.$_POST['email'].'</a></p>';
    echo '</div>';
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
?>


<?php include("../includes/footer.php");