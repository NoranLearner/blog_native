<div class="footer">
	<div class="container">
		<div class="col-md-4 footer-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
			<h4 class="text-right"> معلومات عنا </h4>
			<p class="text-right">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،</p>
			<img src="images/t4.jpg" class="img-responsive" alt="">
			<div class="bht1 pull-right" style="direction: rtl">
				<a href="singlepage.html"> قرأءة المزيد </a>
			</div>
		</div>
		<div class="col-md-4 footer-middle wow fadeInDown text-right" data-wow-duration=".8s" data-wow-delay=".2s">
			<h4> روابط هامه </h4>
			<div class="mid-btm">
				<a href="#"> سياسة الخصوصيه </a>
			</div>
			<div class="mid-btm">
				<a href="#"> شروط الاستخدام </a>
			</div>
			<div class="mid-btm">
				<a href="contact-2.html"> اتصل بنا </a>
			</div>
			<div class="mid-btm">
				<a href="about.html"> من نحن </a>
			</div>
		</div>
		<div class="col-md-4 footer-right wow fadeInDown text-right" data-wow-duration=".8s" data-wow-delay=".2s">
			<h4>النشرة البريديه</h4>
			<p> اشترك في النشرة البريديه ليصلك مقالاتنا أولا بأول </p>
			<div class="name text-right">
				<form action="#" method="post">
					<input class="text-right" type="text" placeholder="  الاسم" required="">
					<input class="text-right" type="text" placeholder=" البريد الألكترونى" required="">
					<input type="submit" value=" اشترك الآن ">
				</form>

			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="copyright wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
	<div class="container" style="direction: rtl">
		<p>© 2019. جميع الحقوق محفوظه | بواسطه <a href="https://www.semi-colen.com/" target="_blank">semi-colen</a></p>
	</div>
</div>
<script>
	window.onload = function () {
		window.getinfo = function (urlx, id) {
			$.get(urlx).done(function (data) {
				$(id).html(data);
				$(hide).hide();
			});
		}
	};  
</script>
</body>

</html>