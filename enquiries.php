<?php
include 'includes/header.php'
?>

<?php
if (isset($_SESSION['error'])) {
	echo '<font color="red">' . $_SESSION['error'] . '</font>';
	unset($_SESSION['error']);
}
if (isset($_SESSION['done'])) {
	echo '<font color="green">' . $_SESSION['done'] . '</font>';
	unset($_SESSION['done']);
}
?>

<h1 class="form-h1">Enquiries</h1>
<form class="enquiry-form" name="enquiries" action="enquiries_process.php" method="POST">
	<div class="container">

		<label for="userid"><b> Name:</b></label>
		<input type="text" placeholder="Enter  your name" name="userid" size="12">
		<div class="status" id="status"></div>

		<label for="phone"><b>Number:</b></label>
		<input type="number" placeholder="Enter Phone number" name="phone" size="12">

		<label for="email"><b>Email:</b></label>
		<input type="text" class="form-control" placeholder="Enter Email" name="email">
		<div class="help-block with-errors"></div>

		<label for="enquiries"><b>Enquiry:</b></b></label>
		<textarea name="enquiries" placeholder="Type Here" class="txt-area"></textarea>

		<div class="clearfix">
			<button class="btn btn-danger" type="submit" class="signupbtn">Submit</button>
		</div>
	</div>
</form>

<?php
include 'includes/footer.php'
?>