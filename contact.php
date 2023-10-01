<?php

session_start();

$title = 'راسلنا';

include 'inc/init.php';

if (!isset($_SESSION['id'])) {
    header('location:login.php');
}

?>

<!--****** Start Main ******-->
<div class="header-bottom">
	<div class="container">
		<div class="logo wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
			<h1><a href="index.php"> Avatar Script - سكربت أفاتار</a></h1>
			<p style="margin-top: 30px;">
				<label class="of"></label>
				<img src="images/Blogger.svg.png" alt="" srcset="" width="50px" height="50px">
				<label class="on"></label>
			</p>
		</div>
	</div>
</div>
<!--****** End Main ******-->

<!--****** Start Contact Us ******-->

	<div class="container">

		<div class="row" style="direction:rtl;">

			<div class="col-md-12 ">

				<div class="contact-section">

					<h2 class="w3"> تواصل معنا </h2>

					<div class="contact-grids">

						<div class="col-md-8 contact-grid">

							<p> فى حالة بادرك اية اسئله حولنا او اي استفسارات لا تترد و تواصل معنا وسوف يقوم احد موظفينا
								بالرد عليك علي الفور للاجابه علي اسئلتكم و استفساراتكم نعمل علي مدار الاسبوع عادا
								الاجازات الرسميه . </p>

							<form action="#" method="post">

								<input type="text" name="Name" value="الاسم " onfocus="this.value = '';"
									onblur="if (this.value == '') {this.value = 'الاسم';}" required="">

								<input type="email" name="Email" value="البريد الالكترونى" onfocus="this.value = '';"
									onblur="if (this.value == '') {this.value = 'البريد الالكترونى';}" required="">

								<input type="text" name="Phone" value="رقم التليفون" onfocus="this.value = '';"
									onblur="if (this.value == '') {this.value = 'رقم التليفون';}" required="">

								<textarea type="text" name="textarea" onfocus="this.value = '';"
									onblur="if (this.value == '') {this.value = 'تعليمات خاصة/تعليقات ...';}"
									required="">تعليمات خاصة/تعليقات ...</textarea>

								<input type="submit" value="ارسل">

							</form>

						</div>

						<div class="col-md-4 contact-grid1">

							<h4>معلومات التواصل</h4>

							<div class="contact-top">
								<div class="clearfix"></div>
							</div>

							<ul>
								<li>
									<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> 643751855
								</li>
								<li>
									<i class="glyphicon glyphicon-phone" aria-hidden="true"></i> 1090250088
								</li>
								<li>
									<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> 
									<a href="#"></a>
									<a href="mailto: engelshafiy6@gmail.com"> blog@gmail.com</a>
								</li>
								<li>
									<i class="glyphicon glyphicon-print" aria-hidden="true"></i> 643751855
								</li>
							</ul>

						</div>

						<div class="clearfix"></div>

					</div>


				</div>

			</div>

		</div>

		<div class="clearfix"></div>

	</div>


<!--****** End Contact Us ******-->


<?php include $App . 'footer.php'; ?>