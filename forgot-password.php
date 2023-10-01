<?php

session_start();

include 'inc/db/connect.php';

$title = 'استعاده كلمه المرور';

// include 'inc/init.php';
include 'inc/app/function.php';
include 'inc/app/head.php';

if (isset($_SESSION['id'])) {
	header("location:admin_panel/");
} 

?>

<div class="technology">
	<div class="container">
		<div class="col-md-12 col-lg-2"></div>
		<div class="col-md-12 col-lg-8 ">
			<div class="contact-section text-right" style="direction:rtl;">
				<h2 class="w3 text-center">
					<i class="fa fa-key" aria-hidden="true"></i>
					&nbsp;
					استعادة كلمة المرور
				</h2>
				<div class="contact-grids">
					<div class="col-md-12 contact-grid">
						<div id="success"></div>
						<form id="login" method="post">
							<div class="form-group">
								<label> البريد الإلكترونى </label>
								<input type="email" name="email" style="margin: 1em 0;">
                            </div>
							<div class="form-group">
								<input type="submit" style="width:100%;" value="ارسل">
							</div>
							<hr/>
							<div class="form-group">
                                <a href="login.php" class="btn btn-info" style="margin:10px auto;"> تذكرت كلمه المرور </a>
                            </div>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
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