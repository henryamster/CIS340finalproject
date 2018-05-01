
<?php include('../includes/header.php'); ?>

<div class="container" role="main">
<div class="card white-bg" >
<h1>Post your book or request</h1>
<form action="submit.php" method="post" onsubmit="return checkForm()">
    <input type="text" id="course" name="course" maxlength="6">
    </input><label for="course">Course</label>
<input type="text" id="book" name="book"></input>
<label for="book">Book title</label>
<textarea name="request" id="request" cols="30" rows="10"></textarea>
<label for="request">What are you looking for? What do you have to offer? What would you like in return? If you would like to 
    include extra information like additional ways to get in touch, please leave them here.
</label>
<input type="email" name="email" id="email" ></input> <label for="email">Email address</label>
<fieldset> 
    <legend>Is this a request, an offer, or both?</legend>
<input type="radio" name="type" id="typeRequest" value="Request"></input>
<label for="typeRequest" class="center">Request</label>
<input type="radio" name="type" id="typeOffer" value="Offer"></input>
<label for="typeOffer" class="center">Offer</label>
<input type="radio" name="type" id="typeBoth" value="Both"></input>
<label for="typeBoth" class="center">Both</label>
</fieldset>
<input type="submit" id="submit"></input>
</form>
</div>

</div>
<script src="js/validatePost.js"></script>
<?php include('../includes/footer.php'); ?>