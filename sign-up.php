<?php

// include 'inc/init.php';

session_start();
include 'inc/db/connect.php';
include 'inc/app/head.php';

if (isset($_SESSION['id'])) {
    header("location:admin_panel/");
}

?>

<!--start-main-->
<!-- <div class="header-bottom">
    <div class="container">
        <div class="logo wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
            <h1><a href="index-3.html"> (V1.0) Avatar Script - سكربت أفاتار</a></h1>
            <p><label class="of"></label> ضع شعار موقعك هنا<label class="on"></label></p>
        </div>
    </div>
</div> -->

	<!-- banner -->
	<!-- technology-left -->
	<div class="technology">
		<div class="container">
			<div class="col-md-12 col-lg-2"></div>
			<div class="col-md-12 col-lg-8 ">
				<div id="content" class="contact-section text-right">
					<h2 class="w3 text-center">انشاء حساب</h2>
					<div class="contact-grids">
						<div class="col-md-12 contact-grid">
							<div id="success"></div>
							<form id="register" method="post">
								<div class="form-group text-right">
									<label> اسم المستخدم </label>
									<input type="text" class="text-right" style="direction:rtl;" name="name" required="">
								</div>
								<div class="form-group text-right">
									<label> البريد الإلكترونى </label>
									<input type="email" class="text-right" style="direction:rtl;" name="email" required="">
								</div>
								<div class="form-group">
									<label> كلمة المرور </label>
									<br>
									<input type="password" class="text-right" style="direction:rtl;" name="pass" required="">
								</div>
								<div class="form-group">
									<label> تأكيد كلمة المرور </label>
									<br>
									<input type="password" class="text-right" style="direction:rtl;" name="confirm" required="">
								</div>
								<div class="form-group">
									<input type="submit" style="width:100%;" value="انشاء حساب">
								</div>
							</form>
						</div>
						<div class="clearfix"></div>
						<div id="success"></div>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>
			<!-- technology-right -->
		</div>
	</div>

<!-- <?php include $App . 'footer.php'; ?> -->

<script>
	$(document).on('submit', '#register', function (e) {
		e.preventDefault();
		var Form = $(this);
		$.ajax({
			type: 'POST',
			url: 'inc/sign-up/insert.php',
			data: new FormData(this),
			contentType: false,
			processData: false,
			success: function (data) {
				$("#success").html(data);
			}
		})
	});
</script>
