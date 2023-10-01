<?php

session_start();

include 'inc/db/connect.php';

$title = 'انشاء حساب';

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
					<i class="fa fa-user-plus" aria-hidden="true"></i>
					&nbsp;
					انشاء حساب
				</h2>
				<div class="contact-grids">
					<div class="col-md-12 contact-grid">
						<div id="success"></div>
						<form id="register" method="post">
							<div class="form-group">
								<label> اسم المستخدم </label>
								<input type="text" name="name" style="margin: 1em 0;">
							</div>
							<div class="form-group">
								<label> البريد الإلكترونى </label>
								<input type="email" name="email" style="margin: 1em 0;">
							</div>
							<div class="form-group">
								<label> كلمة المرور </label>
								<input type="password" name="pass" style="margin: 1em 0;">
							</div>
							<div class="form-group">
								<label> تأكيد كلمة المرور </label>
								<input type="password" name="confirm" style="margin: 1em 0;">
							</div>
							<div class="form-group">
								<input type="submit" style="width:100%;" value="انشاء حساب">
							</div>
							<p>
								ستتلقى بريدًا إلكترونيًا لتنشيط حسابك. إذا كان لديك أي مشكلة
								<a href="contact.php">تواصل معنا</a>
							</p>
							<hr/>
							<div class="form-group">
                                <a href="login.php" class="btn btn-info" style="margin:10px auto;"> دخول </a>
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
			},
		})
	});
</script>