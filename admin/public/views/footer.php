<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>
</div>
<!-- Main Footer -->
<!-- <footer class="footer login-footer pt-3">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 px-3">
				<small class="text-dark">
					All contents & rights reserved to © <?php echo date('Y'); ?>
				</small>
			</div>
			<div class="col-12 col-md-6 pt-3 pt-md-0 px-3 text-center text-md-end">
				<small class="text-dark">
					<ul class="links">
						<li><a href="<?php echo URL ?>privacyPolicy"> Privacy policy </a></li>
						<li><a href="<?php echo URL ?>sitemap"> Sitemap </a></li>
					</ul>
				</small>
			</div>
		</div>
	</div>
</footer> -->
<footer class="footer mb-3">
	<div class="footer__container">
		<p>Design And Developed By Pijush kanti mandal</p>
	</div>
</footer>
<script src="<?php echo URL; ?>assets/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- JavaScript Bundle with Popper -->
<script src="<?php echo URL ?>assets/adminlte/js/adminlte.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->

<?php
if (isset($this->js)) {
	foreach ($this->js as $js) {
		echo '<script type="text/javascript" src="' . URL . $js . '"></script>';
	}
}
?>

<script src="assets/js/custom.js"></script>
</body>

</html>