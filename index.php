<?php

session_start();

$title = 'الرئيسية';

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

<!--****** Start Banner ******-->
<div class="banner" style="background: url(images/3794556.jpg);
						background-size: cover;
						-webkit-background-size: cover;
						-o-background-size: cover;
						-ms-background-size: cover;
						-moz-background-size: cover;">

	<div class="container">
		<h2>اكبر مجتمع عربى للمدونين</h2>
		<p>ابدأ الان فى ربح المال من كتابة المقالات ونشر الأفلام فنحن نوفر لك المكان الذى يمكن أن تبدع فيه , هناك 13190
			عضو ينتظرون إبداعك . كن جزءً منا و ابدأ الان بالتدوين واربح حتى 5$ لكل مقال فهناك الكثيرون متشوقين لقراءة
			مقالاتك ! ماذا تنتظر ابدأ الان
		</p>
		<a href="sign-up.php"> انضم لنا </a>
	</div>

</div>
<!--****** End Banner ******-->

<!--****** Start Ads ******-->

<div class="services w3l wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
	<div class="container">

		<div class="grid_3 grid_5">

			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

				<ul id="myTab" class="nav nav-tabs" role="tablist">

					<li role="presentation" class="active">
						<a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab"
							aria-controls="expeditions" aria-expanded="true"> اعلان </a>
					</li>

					<li role="presentation" class="">
						<a href="#safari" role="tab" id="safari-tab" data-toggle="tab" aria-controls="safari"> اعلان
						</a>
					</li>

					<li role="presentation" class="">
						<a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab" aria-controls="trekking">
							اعلان </a>
					</li>

				</ul>

				<div id="myTabContent" class="tab-content">

					<div role="tabpanel" class="tab-pane fade" id="expeditions" aria-labelledby="expeditions-tab">

						<div class="col-md-4 col-sm-5 tab-image">
							<!-- <img src="images/f2.jpg" class="img-responsive" alt="Wanderer"> -->
							<!-- <ul class="grid cs-style-3">
								<li>
									<figure>
										<img src="images/f2.jpg" class="img-responsive" alt="Wanderer">
										<figcaption>
											<h4>PROGRAMS</h4>
										</figcaption>
									</figure>
								</li>
							</ul> -->
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="images/f2.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Add title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up
										the bulk of the card's content.</p>
									<br />
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-5 tab-image">
							<img src="images/f4.jpg" class="img-responsive" alt="Wanderer">
						</div>

						<div class="col-md-4 col-sm-5 tab-image">
							<img src="images/f3.jpg" class="img-responsive" alt="Wanderer">
						</div>

						<div class="clearfix"></div>

					</div>

					<div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">

						<div class="col-md-4 col-sm-5 tab-image">
							<img src="images/t1.jpg" class="img-responsive" alt="Wanderer">
						</div>

						<div class="col-md-4 col-sm-5 tab-image">
							<img src="images/t2.jpg" class="img-responsive" alt="Wanderer">
						</div>

						<div class="col-md-4 col-sm-5 tab-image">
							<img src="images/t3.jpg" class="img-responsive" alt="Wanderer">
						</div>

						<div class="clearfix"></div>

					</div>

					<div role="tabpanel" class="tab-pane fade active in" id="trekking" aria-labelledby="trekking-tab">

						<div class="col-md-4 col-sm-5 tab-image">
							<img src="images/m2.jpg" class="img-responsive" alt="Wanderer">
						</div>

						<div class="col-md-4 col-sm-5 tab-image">
							<img src="images/m1.jpg" class="img-responsive" alt="Wanderer">
						</div>

						<div class="col-md-4 col-sm-5 tab-image">
							<img src="images/m3.jpg" class="img-responsive" alt="Wanderer">
						</div>

						<div class="clearfix"></div>

					</div>

				</div>

			</div>

		</div>

	</div>
</div>

<!--****** End Ads ******-->

<div class="technology">

	<div class="container">

		<div class="row text-right">

			<!--****** Start Technology Left ******-->

			<div class="col-md-9 technology-left">

				<div class="blog">

					<h2 class="w3"> احدث المواضيع </h2>

					<div class="blog-grids1">
						<div class="tc-ch wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">

							<div class="tch-img">
								<a href="singlepage.html">
									<img src="images/t4.jpg" class="img-responsive" alt="">
								</a>
							</div>

							<h3>
								<a href="singlepage.html">القوالب الحديثة والإبداعية لأي غرض تجاري</a>
							</h3>

							<h6>
								بواسطه
								&nbsp;
								<a href="singlepage.html"> <i class="fa fa-user" aria-hidden="true"></i> ادم ابراهيم
								</a>
								&nbsp;
								<i class="fa fa-calendar" aria-hidden="true"></i> 10/1/2019
								&nbsp;
								<i class="fa fa-tags" aria-hidden="true"></i> التصنيف
							</h6>

							<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس
								المساحة،
								لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من
								النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
								إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما
								تريد،
								النص لن يبدو مقسما ولا يحوي أخطاء</p>


							<div class="bht1">
								<a href="singlepage.html"> قراءة المزيد </a>
							</div>

							<div class="clearfix"></div>

						</div>
					</div>


					<div class="w3ls">
						<div class="col-md-6 w3ls-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">

							<div class="tc-ch">

								<div class="tch-img">
									<a href="singlepage.html">
										<img src="images/m4.jpg" class="img-responsive" alt=""></a>
								</div>

								<h3>
									<a href="singlepage.html"> 10 طرق رائعة لبدء موقع الويب الخاص بك</a>
								</h3>

								<h6>
									بواسطه
									&nbsp;
									<a href="singlepage.html"> <i class="fa fa-user" aria-hidden="true"></i> مريم ماجد
									</a>
									&nbsp;
									<i class="fa fa-calendar" aria-hidden="true"></i> 10/2/2019
									&nbsp;
									<i class="fa fa-tags" aria-hidden="true"></i> التصنيف
								</h6>

								<p>
									هذا النص هو مثال لنص يمكن أن يستبدل في نفس
									المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص
									أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
								</p>

								<div class="bht1">
									<a href="singlepage.html"> قراءة المزيد </a>
								</div>

								<div class="clearfix"></div>

							</div>

						</div>

						<div class="col-md-6 w3ls-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">

							<div class="tc-ch">

								<div class="tch-img">
									<a href="singlepage.html">
										<img src="images/m5.jpg" class="img-responsive" alt="">
									</a>
								</div>

								<h3>
									<a href="singlepage.html">
										كيف تكسب أموال ضخمة دون أي استثمار
									</a>
								</h3>

								<h6>
									بواسطه
									&nbsp;
									<a href="singlepage.html"> <i class="fa fa-user" aria-hidden="true"></i> مى عزيز
									</a>
									&nbsp;
									<i class="fa fa-calendar" aria-hidden="true"></i> 10/2/2019
									&nbsp;
									<i class="fa fa-tags" aria-hidden="true"></i> التصنيف
								</h6>

								<p>
									هذا النص هو مثال لنص يمكن أن يستبدل في نفس
									المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص
									أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
								</p>

								<div class="bht1">
									<a href="singlepage.html"> قراءة المزيد </a>
								</div>

								<div class="clearfix"></div>

							</div>

						</div>

						<div class="clearfix"></div>

					</div>

					<div class="wthree">

						<div class="col-md-6 wthree-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
							<div class="tch-img">
								<a href="singlepage.html">
									<img src="images/f1.jpg" class="img-responsive" alt="">
								</a>
							</div>
						</div>

						<div class="col-md-6 wthree-right wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">

							<h3 class="text-right">
								<a href="singlepage.html">الأساليب تأتي وتذهب. التصميم لغة ، وليس أسلوب</a>
							</h3>

							<h6>
								بواسطه
								&nbsp;
								<a href="singlepage.html"> <i class="fa fa-user" aria-hidden="true"></i> ادم
								</a>
								&nbsp;
								<i class="fa fa-calendar" aria-hidden="true"></i> 13/3/2019
								&nbsp;
								<i class="fa fa-tags" aria-hidden="true"></i> التصنيف
							</h6>

							<p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
								العربى، </p>

							<div class="bht1">
								<a href="singlepage.html"> قراءة المزيد </a>
							</div>

							<div class="clearfix"></div>

						</div>

						<div class="clearfix"></div>

					</div>


					<nav class="paging">
						<ul class="pagination pagination-lg">
							<li>
								<a href="blog4658.html?page=2" aria-label="Previous">
									<span aria-hidden="true">
										<i class="fa fa-angle-left" aria-hidden="true"></i>
									</span>
								</a>
							</li>
							<li class="active">
								<a href="blog2679.html?page=1">1</a>
							</li>
							<li>
								<a href="blog4658.html?page=2">2</a>
							</li>
							<li>
								<a href="blog2679.html?page=1" aria-label="Next">
									<span aria-hidden="true">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</span>
								</a>
							</li>
						</ul>
					</nav>

				</div>

			</div>

			<!--****** End Technology Left ******-->


			<!--****** Start Technology Right ******-->

			<div class="col-md-3 technology-right">

				<div class="blo-top1">

					<div class="tech-btm">

						<h4> المقالات الرائجه </h4>

						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html">
									<img style="height: 60px;" src="images/blog/3170143.jpg" class="img-responsive"
										alt="">
								</a>
							</div>
							<div class="blog-grid-right">
								<h5 style="font-size: 12px;">
									<a
										href="singlepage608d.html?t=%d8%aa%d8%b9%d9%84%d9%85_%d9%83%d9%8a%d9%81_%d8%aa%d9%86%d8%b8%d9%85_%d9%88%d9%82%d8%aa%d9%83_%d9%84%d8%a7%d9%86%d8%ac%d8%a7%d8%b2_%d8%a7%d9%83%d8%a8%d8%b1_%d9%82%d8%af%d8%b1_%d9%85%d9%86_%d8%a7%d9%84%d9%85%d9%87%d8%a7%d9%85">تعلم
										كيف تنظم وقتك لانجاز اكبر قدر من المهام </a>
								</h5>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html">
									<img style="height: 60px;" src="images/blog/1719360.jpg" class="img-responsive"
										alt="">
								</a>
							</div>
							<div class="blog-grid-right">
								<h5 style="font-size: 12px;">
									<a
										href="singlepage8016.html?t=%d8%aa%d8%b9%d8%b1%d9%81_%d8%b9%d9%84%d9%89_%d8%ac%d9%8a%d9%81_%d8%a8%d9%8a%d8%b2%d9%88%d8%b3_%d9%85%d8%a4%d8%b3%d8%b3_%d9%85%d9%88%d9%82%d8%b9_%d8%a7%d9%85%d8%a7%d8%b2%d9%88%d9%86">تعرف
										على جيف بيزوس مؤسس موقع امازون </a>
								</h5>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html">
									<img style="height: 60px;" src="images/blog/3301086.jpg" class="img-responsive"
										alt="">
								</a>
							</div>
							<div class="blog-grid-right">
								<h5 style="font-size: 12px;">
									<a
										href="singlepage9373.html?t=12_%d9%86%d8%b5%d9%8a%d8%ad%d9%87_%d9%84%d8%b1%d9%81%d8%b9_%d8%aa%d8%b1%d8%aa%d9%8a%d8%a8_%d9%85%d9%88%d9%82%d8%b9%d9%83_%d9%81%d9%8a_%d8%ac%d9%88%d8%ac%d9%84">
										12 نصيحه لرفع ترتيب موقعك في جوجل </a>
								</h5>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html">
									<img style="height: 60px;" src="images/blog/3301086.jpg" class="img-responsive"
										alt="">
								</a>
							</div>
							<div class="blog-grid-right">
								<h5 style="font-size: 12px;">
									<a
										href="singlepage9373.html?t=12_%d9%86%d8%b5%d9%8a%d8%ad%d9%87_%d9%84%d8%b1%d9%81%d8%b9_%d8%aa%d8%b1%d8%aa%d9%8a%d8%a8_%d9%85%d9%88%d9%82%d8%b9%d9%83_%d9%81%d9%8a_%d8%ac%d9%88%d8%ac%d9%84">
										12 نصيحه لرفع ترتيب موقعك في جوجل </a>
								</h5>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html">
									<img style="height: 60px;" src="images/blog/403640.jpg" class="img-responsive"
										alt="">
								</a>
							</div>
							<div class="blog-grid-right">
								<h5 style="font-size: 12px;">
									<a
										href="singlepage608d.html?t=%d8%aa%d8%b9%d9%84%d9%85_%d9%83%d9%8a%d9%81_%d8%aa%d9%86%d8%b8%d9%85_%d9%88%d9%82%d8%aa%d9%83_%d9%84%d8%a7%d9%86%d8%ac%d8%a7%d8%b2_%d8%a7%d9%83%d8%a8%d8%b1_%d9%82%d8%af%d8%b1_%d9%85%d9%86_%d8%a7%d9%84%d9%85%d9%87%d8%a7%d9%85">
										تعلم كيف تنظم وقتك لانجاز اكبر قدر من المهام </a>
								</h5>
							</div>
							<div class="clearfix"> </div>
						</div>

						<br />

						<h4> الأقسام </h4>

						<div class="row">
							<div class="col-xs-12 text-right">
								<a href="blog1cd2.html?cat=10"
									style="direction:rtl;margin-top:15px;margin-bottom:15px;">
									<h5 style="color: #fa4b2a;">
										<i class="fa fa-tags" aria-hidden="true"></i>
										برمجه
									</h5>
								</a>
								<div class="row" style="margin-right: 5px; border-right: 1px solid #fa4b2a;">
									<div class="col-xs-12 text-right">
										<a href="blog127a.html?subcat=9"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> php </h5>
										</a>
									</div>
									<div class="col-xs-12 text-right">
										<a href="blog8ef7.html?subcat=10"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> javascript </h5>
										</a>
									</div>
									<div class="col-xs-12 text-right">
										<a href="blogc5fa.html?subcat=11"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> مسارات التعلم </h5>
										</a>
									</div>
									<div class="col-xs-12 text-right">
										<a href="blogbe40.html?subcat=12"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> اسأله واستفسارات </h5>
										</a>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="row">
							<div class="col-xs-12 text-right">
								<a href="blog29c7.html?cat=11"
									style="direction:rtl;margin-top:15px;margin-bottom:15px;">
									<h5 style="color: #fa4b2a;">
										<i class="fa fa-tags" aria-hidden="true"></i>
										تصميم
									</h5>
								</a>
								<div class="row" style="margin-right: 5px; border-right: 1px solid #fa4b2a;">
									<div class="col-xs-12 text-right">
										<a href="blog672e.html?subcat=13"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> فوتوشوب </h5>
										</a>
									</div>
									<div class="col-xs-12 text-right">
										<a href="bloge0d4.html?subcat=14"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> الاستريتور </h5>
										</a>
									</div>
									<div class="col-xs-12 text-right">
										<a href="blogf3e8.html?subcat=15"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> 3d </h5>
										</a>
									</div>
									<div class="col-xs-12 text-right">
										<a href="blogad62.html?subcat=16"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> فيديوهات ومونتاج </h5>
										</a>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="row">
							<div class="col-xs-12 text-right">
								<a href="blog5b0d.html?cat=12"
									style="direction:rtl;margin-top:15px;margin-bottom:15px;">
									<h5 style="color: #fa4b2a;">
										<i class="fa fa-tags" aria-hidden="true"></i>
										تسويق الكترونى
									</h5>
								</a>
								<div class="row" style="margin-right: 5px; border-right: 1px solid #fa4b2a;">
									<div class="col-xs-12 text-right">
										<a href="blog05f6.html?subcat=17"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> اعلانات فيس بوك </h5>
										</a>
									</div>
									<div class="col-xs-12 text-right">
										<a href="blogcdca.html?subcat=18"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> google adword </h5>
										</a>
									</div>
									<div class="col-xs-12 text-right">
										<a href="blogdb92.html?subcat=19"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> SEO </h5>
										</a>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="row">
							<div class="col-xs-12 text-right">
								<a href="blog376e.html?cat=13"
									style="direction:rtl;margin-top:15px;margin-bottom:15px;">
									<h5 style="color: #fa4b2a;">
										<i class="fa fa-tags" aria-hidden="true"></i>
										ريادة اعمال
									</h5>
								</a>
								<div class="row" style="margin-right: 5px; border-right: 1px solid #fa4b2a;">
									<div class="col-xs-12 text-right">
										<a href="blog5c4f.html?subcat=20"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> مشاريع </h5>
										</a>
									</div>
									<div class="col-xs-12 text-right">
										<a href="blog71de.html?subcat=21"
											style="direction:rtl;margin-top:15px;margin-bottom:15px;">
											<h5> دراسة جدوى </h5>
										</a>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>


						<!-- <div class="insta">
							<h4> مساحه اعلانيه </h4>
						</div> -->

					</div>

				</div>

			</div>

			<!--****** End Technology Right ******-->

		</div>

	</div>

</div>



<?php include $App . 'footer.php'; ?>