<?php

$title = 'Dashboard';

include 'inc/init.php';

?>

<div class="app-content">

	<section class="section">

		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Blog Dashboard</li>
			<li class="ml-auto d-lg-flex d-none">
				<span class="sparkline_bar mr-2 float-left"></span>
				<span class="float-left border-">
					<span class="mb-0 mt-1 mr-2">1,267</span>
					<small class="mb-0 mr-3">[ Visitors ]</small>
				</span>
				<span class="sparkline_bar1 mr-2 float-left"></span>
				<span class="float-left">
					<span class="mb-0 mt-1 mr-2">215</span><small class="mb-0">[ Chats ]</small>
				</span>
			</li>
		</ol>

		<div class="row">

			<div class="col-sm-12 col-lg-6 col-md-6 col-xl-3">
				<div class="card">
					<div class="card-body p-4">
						<div class="row">
							<div class="col-5 text-center">
								<span class="mini-stat-icon bg-facebook"><i class="fa fa-facebook"></i></span>
							</div>
							<div class="col-7">
								<div class="numbers">
									<div class="font-13 text-muted">Facebook Like</div>
									<h3 class="font-weight-bold">5,762</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-lg-6 col-md-6 col-xl-3">
				<div class="card">
					<div class="card-body p-4">
						<div class="row">
							<div class="col-5 text-center">
								<span class="mini-stat-icon bg-info"><i class="fa fa-twitter"></i></span>
							</div>
							<div class="col-7">
								<div class="numbers">
									<div class="font-13 text-muted">Followers</div>
									<h3 class="font-weight-bold">7,153</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-lg-6 col-md-6 col-xl-3">
				<div class="card">
					<div class="card-body p-4">
						<div class="row">
							<div class="col-5 text-center">
								<span class="mini-stat-icon bg-googleplus "><i class="fa fa-google-plus"></i></span>
							</div>
							<div class="col-7">
								<div class="numbers">
									<div class="font-13 text-muted">Google+ Posts</div>
									<h3 class="font-weight-bold">793</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-lg-6 col-md-6 col-xl-3">
				<div class="card">
					<div class="card-body p-4">
						<div class="row">
							<div class="col-5 text-center">
								<span class="mini-stat-icon bg-bitbucket"><i class="fa fa-bitbucket "></i></span>
							</div>
							<div class="col-7">
								<div class="numbers">
									<div class="font-13 text-muted">Repository</div>
									<h3 class="font-weight-bold">8,932</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row">

			<div class=" col-md-12 col-lg-12 col-xl-5">

				<div class="row">

					<div class="col-sm-12 col-lg-6 col-md-6 ">
						<div class="card">
							<div class="card-body text-center">
								<h5 class="mb-1 counter ">Chrome</h6>
									<div class="mt-3 mb-2">
										<input type="text" class="knob" value="75" data-thickness="0.2" data-width="90"
											data-height="90" data-fgColor="#3454f5">
									</div>
									<span class="text-success">
										<i class="zmdi zmdi-long-arrow-up zmdi-hc-lg mr-2"></i>
										<span>15%</span>
									</span>
									<span class="text-muted ml-2"> Last Month</span>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-lg-6 col-md-6 ">
						<div class="card">
							<div class="card-body text-center">
								<h5 class="mb-1 counter ">Safari</h6>
									<div class="mt-3 mb-2">
										<input type="text" class="knob" value="69" data-thickness="0.2" data-width="90"
											data-height="90" data-fgColor="#01cf6b">
									</div>
									<span class="text-danger">
										<i class="zmdi zmdi-long-arrow-down zmdi-hc-lg mr-2"></i>
										<span>12%</span>
									</span>
									<span class="text-muted ml-2"> Last Month</span>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-lg-6 col-md-6 ">
						<div class="card">
							<div class="card-body text-center">
								<h5 class="mb-1 counter ">FireFox</h6>
									<div class="mt-2 ">
										<input type="text" class="knob" value="45" data-thickness="0.2" data-width="90"
											data-height="90" data-fgColor="#fa292e">
									</div>
									<span class="text-success">
										<i class="zmdi zmdi-long-arrow-up zmdi-hc-lg mr-2"></i>
										<span>10%</span>
									</span>
									<span class="text-muted ml-2"> Last Month</span>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-lg-6 col-md-6 ">
						<div class="card">
							<div class="card-body text-center">
								<h5 class="mb-1 counter ">IE</h6>
									<div class="mt-2 ">
										<input type="text" class="knob" value="38" data-thickness="0.2" data-width="90"
											data-height="90" data-fgColor="#fe7100">
									</div>
									<span class="text-danger">
										<i class="zmdi zmdi-long-arrow-down zmdi-hc-lg mr-2"></i>
										<span>7.2%</span>
									</span>
									<span class="text-muted ml-2"> Last Month</span>
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class=" col-md-12 col-lg-12 col-xl-7">
				<div class="card">
					<div class="card-header">
						<h4 class="">Website Visits</h4>
					</div>
					<div class="card-body">
						<canvas id="canvas" class="h-335"></canvas>
					</div>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-md-12 col-lg-4">

				<div class="card">

					<div class="card-header">
						<h4 class="card-title">Browser Visits</h4>
					</div>

					<div class="card-body">

						<div class="mb-4">
							<p class="mb-2">Chrome<span class="float-right text-muted">80%</span></p>
							<div class="progress">
								<div class="progress-bar bg-primary w-80" role="progressbar"></div>
							</div>
						</div>

						<div class="mb-4">
							<p class="mb-2">Firefox<span class="float-right text-muted">70%</span></p>
							<div class="progress">
								<div class="progress-bar bg-secondary w-70" role="progressbar"></div>
							</div>
						</div>

						<div class="mb-4">
							<p class="mb-2">Safari<span class="float-right text-muted">80%</span></p>
							<div class="progress">
								<div class="progress-bar bg-warning w-80" role="progressbar"></div>
							</div>
						</div>

						<div class="mb-4">
							<p class="mb-2">Opera<span class="float-right text-muted">60%</span></p>
							<div class="progress">
								<div class="progress-bar bg-success w-60" role="progressbar"></div>
							</div>
						</div>

						<div class="mb-3">
							<p class="mb-2">Internet Explore<span class="float-right text-muted">70%</span></p>
							<div class="progress">
								<div class="progress-bar bg-info w-70" role="progressbar"></div>
							</div>
						</div>

					</div>

				</div>

			</div>

			<div class="col-md-12 col-lg-8">
				<div class="card overflow-hidden">
					<div class="card-header ">
						<h4 class="card-title">Facebook Overview</h4>
					</div>
					<div class="card-body">
						<div id="morrisBar2" class="chartsh overflow-hidden"></div>
						<div class="row mt-3 text-center mx-auto">
							<div class=" ml-4 mb-2 mr-5">
								<span class="dot-label bg-primary"></span>Likes
							</div><!-- col -->
							<div class=" mb-2">
								<span class="dot-label bg-success"></span>Shares
							</div><!-- col -->
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row ">

			<div class="col-xs-12 col-sm-12 col-lg-12">

				<div class="card">

					<div class="card-header">
						<h4>Visit Countries</h4>
					</div>

					<div class="card-body text-center">

						<div class="table_style table-responsive">

							<table class="table table-hover table-bordered  border mb-0 text-nowrap">
								<thead>
									<tr>
										<td class="border-top-0">#</td>
										<th class="border-top-0">Country</th>
										<th class="border-top-0">Visits</th>
										<th class="border-top-0">Imports</th>
										<th class="border-top-0">Exports</th>
										<th class="border-top-0">profit</th>
										<th class="border-top-0">Progress</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Canada</td>
										<td>1234</td>
										<td>
											<span class="text-danger">
												<i class="fa fa-arrow-down text-danger"></i>
												25,623
											</span>
										</td>
										<td>
											<span class="text-success">
												<i class="fa fa-arrow-up text-success"></i>
												53,623
											</span>
										</td>
										<td>83%</td>
										<td class="align-content-center justify-content-center">
											<div class="progress mt-2">
												<div class="progress-bar bg-success w-55" role="progressbar"></div>
											</div>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Australia</td>
										<td>2674</td>
										<td>
											<span class="text-danger">
												<i class="fa fa-arrow-down text-danger"></i>
												75,325
											</span>
										</td>
										<td>
											<span class="text-success">
												<i class="fa fa-arrow-up text-success"></i>
												45,625
											</span>
										</td>
										<td>30%</td>
										<td>
											<div class="progress h-2 mt-2">
												<div class="progress-bar bg-primary w-30" role="progressbar"></div>
											</div>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Brazil</td>
										<td>2135</td>
										<td>
											<span class="text-danger">
												<i class="fa fa-arrow-down text-danger"></i>
												65,325
											</span>
										</td>
										<td>
											<span class="text-success">
												<i class="fa fa-arrow-up text-success"></i>
												13,623
											</span>
										</td>
										<td>23%</td>
										<td>
											<div class="progress h-2 mt-2">
												<div class="progress-bar bg-orange w-25" role="progressbar"></div>
											</div>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Mexico</td>
										<td>3896</td>
										<td>
											<span class="text-danger">
												<i class="fa fa-arrow-down text-danger"></i>
												50,623
											</span>
										</td>
										<td>
											<span class="text-success">
												<i class="fa fa-arrow-up text-success"></i>
												153,623
											</span>
										</td>
										<td>90%</td>
										<td>
											<div class="progress h-2 mt-2">
												<div class="progress-bar bg-info w-90" role="progressbar"></div>
											</div>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>New Zealand</td>
										<td>4865</td>
										<td>
											<span class="text-danger">
												<i class="fa fa-arrow-down text-danger"></i>
												32,235
											</span>
										</td>
										<td>
											<span class="text-success">
												<i class="fa fa-arrow-up text-success"></i>
												36,253
											</span>
										</td>
										<td>50%</td>
										<td>
											<div class="progress h-2 mt-2">
												<div class="progress-bar bg-danger w-50" role="progressbar"></div>
											</div>
										</td>
									</tr>
									<tr>
										<td>6</td>
										<td>Russia</td>
										<td>1124</td>
										<td>
											<span class="text-danger">
												<i class="fa fa-arrow-down text-danger"></i>
												32,412
											</span>
										</td>
										<td>
											<span class="text-success">
												<i class="fa fa-arrow-up text-success"></i>
												60,323
											</span>
										</td>
										<td>63%</td>
										<td>
											<div class="progress h-2 mt-2">
												<div class="progress-bar bg-secondary w-65" role="progressbar"></div>
											</div>
										</td>
									</tr>
									<tr>
										<td>7</td>
										<td>South Africa</td>
										<td>2145</td>
										<td>
											<span class="text-danger">
												<i class="fa fa-arrow-down text-danger"></i>
												152,623
											</span>
										</td>
										<td>
											<span class="text-success">
												<i class="fa fa-arrow-up text-success"></i>
												33,325
											</span>
										</td>
										<td>13%</td>
										<td>
											<div class="progress h-2 mt-2">
												<div class="progress-bar bg-warning w-25" role="progressbar"></div>
											</div>
										</td>
									</tr>
									<tr>
										<td>8</td>
										<td>USA</td>
										<td>2345</td>
										<td>
											<span class="text-danger">
												<i class="fa fa-arrow-down text-danger"></i>
												32,458
											</span>
										</td>
										<td>
											<span class="text-success">
												<i class="fa fa-arrow-up text-success"></i>
												40,256
											</span>
										</td>
										<td>55%</td>
										<td>
											<div class="progress h-2 mt-2">
												<div class="progress-bar bg-pink w-55" role="progressbar"></div>
											</div>
										</td>
									</tr>
									<tr class="m-b0">
										<td>9</td>
										<td>UK</td>
										<td>2121</td>
										<td>
											<span class="text-danger">
												<i class="fa fa-arrow-down text-danger"></i>
												15,253
											</span>
										</td>
										<td>
											<span class="text-success">
												<i class="fa fa-arrow-up text-success"></i>
												13,662
											</span>
										</td>
										<td>83%</td>
										<td>
											<div class="progress mt-2">
												<div class="progress-bar bg-primary w-80" role="progressbar"></div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

</div>

<?php include $App . 'footer.php'; ?>

<!--Jquery.min js-->
<script src="assets/js/jquery.min.js"></script>

<!--popper js-->
<script src="assets/js/popper.js"></script>

<!--Tooltip js-->
<script src="assets/js/tooltip.js"></script>

<!--Bootstrap.min js-->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!--Jquery.nicescroll.min js-->
<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

<!--Scroll-up-bar.min js-->
<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

<!--mCustomScrollbar js-->
<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--Sidemenu js-->
<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

<!--Jquery.knob js-->
<script src="assets/plugins/othercharts/jquery.knob.js"></script>

<!--Jquery.sparkline js-->
<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

<!--Chart.min js-->
<!-- <script src="assets/js/chart.min.js"></script> -->

<!--othercharts js-->
<script src="assets/js/othercharts.js"></script>

<!-- Chart.js -->
<script src="assets/plugins/Chart.js/dist/Chart.bundle.js"></script>

<!--Morris js-->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/morris/raphael.min.js"></script>

<!-- ECharts -->
<script src="assets/plugins/echarts/echarts.js"></script>

<!-- Chartist.js -->
<script src="assets/plugins/chartist/chartist.js"></script>

<!--mCustomScrollbar js-->
<!-- <script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script> -->

<!--Min Calendar -->
<script src="assets/plugins/fullcalendar/calendar.min.js"></script>

<!--Scripts js-->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/dashboard5.js"></script>
<script src="assets/js/sparkline.js"></script>

<!--DataTables js-->
<script src="assets/plugins/Datatable/js/jquery.dataTables.js"></script>
<script src="assets/plugins/Datatable/js/dataTables.bootstrap4.js"></script>

<!--Toastr js-->
<script src="assets/plugins/toastr/build/toastr.min.js"></script>
<script src="assets/plugins/toaster/garessi-notif.js"></script>

</body>

</html>