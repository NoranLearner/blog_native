<?php

include 'inc/db/connect.php';
include 'inc/app/head.php';

if (isset($_SESSION['id'])) {
	header("location:admin_panel/");
} 

?>

<!-- banner -->
<!-- technology-left -->
<div class="technology">
	<div class="container">
		<div class="col-md-12 col-lg-2"></div>
		<div class="col-md-12 col-lg-8 ">
			<div class="contact-section text-right">
				<h2 class="w3 text-center">استعادة كلمة المرور</h2>
				<div class="contact-grids">
					<div class="col-md-12 contact-grid">
						<div id="success"></div>
						<form id="login">
							<div class="form-group text-right">
								<label>البريد الإلكترونى</label>
								<input type="text" name="email">
							</div>
							<div class="form-group">
								<button type="submit" class="btn-form" style="width:100%;"> ارسل </button>
							</div>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>

<script>
	$(document).on('submit', '#login', function (e) {
		e.preventDefault();
		var Form = $(this);
		$.ajax({
			type: 'POST',
			url: 'inc/rest-pass/send.php',
			data: new FormData(this),
			contentType: false,
			processData: false,
			success: function (data) {
				$("#success").html(data);
			}
		})
	});
</script>