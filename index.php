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

<div class="container">
	<?php if (!isset($_SESSION['client']['status'])) {
		include 'includes/login.php';
	}
	?>
</div>

<div class="drumkits-container">
	<h2>
		Top Drumkits
	</h2>
	<p>
		The best quality drumkits at a very low price
	</p>
	<div class="container">
		<div class="kits">
			<a href="#">
				<img src="img/kit-1.webp" alt="kit 1" />
				<h3>
					Slump (Drum Kit)
				</h3>
			</a>
			<p>
				$11.00
			</p>
		</div>
		<div class="kits">
			<a href="#">
				<img src="img/kit-2.webp" alt="kit 2" />
				<h3>
					Care (Drum Kit)
				</h3>
			</a>
			<p>
				$11.00
			</p>
		</div>
		<div class="kits">
			<a href="#">
				<img src="img/kit-3.webp" alt="kit 3" />
				<h3>
					Arctic (Drum Kit)
				</h3>
			</a>
			<p>
				$11.00
			</p>
		</div>
	</div>
</div>

<?php
include 'includes/footer.php'
?>