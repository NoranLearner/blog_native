<?php

include 'inc/init.php';

?>

<div class="app-content">

	<section class="section">

		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#" class="text-muted">Home</a></li>
			<li class="breadcrumb-item active text-" aria-current="page">Sales Dashboard</li>
			<li class="ml-auto d-lg-flex d-none">
				<span class="sparkline_bar mr-2 float-left"></span>
				<span class="float-left border-">
					<span class="mb-0 mt-1 mr-2">1,267</span>
					<small class="mb-0 mr-3">[ Visitors ]</small>
				</span>
				<span class="sparkline_bar1 mr-2 float-left"></span>
				<span class="float-left">
					<span class="mb-0 mt-1 mr-2">215</span>
					<small class="mb-0">[ Chats ]</small>
				</span>
			</li>
		</ol>

		<div class="row row-deck">

			<div class="col-12 col-md-12 col-lg-12 col-xl-6 ">
				<div class="card sales">
					<div class="card-header">
						<h4>Sales Report</h4>
					</div>
					<div class="card-body border-bottom">
						<div class="">
							<canvas id="Chart" class="dropshadow"></canvas>
						</div>
					</div>
					<div class="card-footer p-0 border-top-0">
						<div class="row p-3 ">
							<div class="col-4 text-center">
								<label class="tx-12 text-muted">Today</label>
								<h4 class="font-weight-bold ">$3,256</h4>
							</div><!-- col -->
							<div class="col-4 border-left text-center">
								<label class="tx-12 text-muted">This Week</label>
								<h4 class="font-weight-bold">$25,321</h4>
							</div><!-- col -->
							<div class="col-4 border-left text-center">
								<label class="tx-12 text-muted">This Month</label>
								<h4 class="font-weight-bold">$53,625</h4>
							</div><!-- col -->
						</div><!-- row -->
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-6 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title m-b-15">Earnings</h4>
					</div>
					<div class="card-body p-0 border-bottom">
						<div class="text-center ">
							<div class="position-relative d-inline-block p-1">
								<canvas class="canvasDoughnut dropshadow" width="200" height="220"></canvas>
								<div class="col">
									<label class="tx-12 text-muted">Total earnings of this month</label>
									<h4 class="font-weight-bold">$25,321.34</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<div class=" revenue">
							<ul class="list-items p-3">
								<li class="p-2">
									<span class="list-label bg-danger"></span>This Week
									<span class="list-items-percentage float-right">60%</span>
								</li>
								<li class="p-2">
									<span class="list-label bg-primary"></span>Last Week
									<span class="list-items-percentage float-right">45%</span>
								</li>
								<li class="p-2">
									<span class="list-label bg-success">
									</span>Last Month <span class="list-items-percentage float-right">30%</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-xl-3 col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title float-left">Revenue</h4>
						<h4 class="float-right"><i class="fa fa-caret-up text-success mr-1 "></i>15%</h4>
					</div>
					<div class="card-body ">
						<div class="mb-2 text-center">
							<label class="tx-12 text-muted">Total Revenue of the Year</label>
							<h4 class="font-weight-bold">$75436</h4>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col text-center ">
							<label class="tx-12 text-muted">weekly</label>
							<h5 class="font-weight-bold">2.34%</h5>
						</div><!-- col -->
						<div class="col text-center border-left">
							<label class="tx-12 text-muted">Monthly</label>
							<h5 class="font-weight-bold">10.34%</h5>
						</div><!-- col -->
					</div>
					<div class="sparkline card-body" data-type="bar" data-width="100%" data-height="165px"
						data-bar-Width="10" data-bar-Spacing="7" data-bar-Color="#3454f5">
						15, 17, 16, 11, 12, 15, 10, 19, 16, 13, 12, 15, 17, 16, 11
					</div>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-xl-3 col-lg-6 col-sm-6 col-md-12">
				<div class="card">
					<div class="card-body knob-chart">
						<div class="row mb-0">
							<div class="col-6">
								<div class="card-icon d-flex">
									<input type="text" class="knob" value="33" data-thickness="0.15" data-width="80"
										data-height="80" data-fgColor="#01cf6b">
								</div>
							</div>
							<div class="col-6">
								<div class="dash3 text-center">
									<small class="text-muted mt-0">New Users</small>
									<h2 class="text-success mb-0">612</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-6 col-sm-6 col-md-12">
				<div class="card">
					<div class="card-body knob-chart">
						<div class="row mb-0">
							<div class="col-6">
								<div class="card-icon d-flex">
									<input type="text" class="knob" value="85" data-thickness="0.15" data-width="80"
										data-height="80" data-fgColor="#3454f5">
								</div>
							</div>
							<div class="col-6">
								<div class="dash3 text-center">
									<small class="text-muted mt-0">Sales</small>
									<h2 class="text-primary mb-0">458</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-6 col-sm-6 col-md-12">
				<div class="card">
					<div class="card-body knob-chart">
						<div class="row mb-0">
							<div class="col-6">
								<div class="card-icon d-flex">
									<input type="text" class="knob" value="74" data-thickness="0.15" data-width="80"
										data-height="80" data-fgColor="#f9282b">
								</div>
							</div>
							<div class="col-6">
								<div class="dash3 text-center">
									<small class="text-muted mt-0">Profit</small>
									<h2 class="text-danger mb-0">$132</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-6 col-sm-6 col-md-12">
				<div class="card">
					<div class="card-body knob-chart">
						<div class="row mb-0">
							<div class="col-6">
								<div class="card-icon d-flex">
									<input type="text" class="knob" value="45" data-thickness="0.15" data-width="80"
										data-height="80" data-fgColor="#fe7100">
								</div>
							</div>
							<div class="col-6">
								<div class="dash3 text-center">
									<small class="text-muted mt-0">Tax</small>
									<h2 class="text-warning mb-0">$876</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-xl-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Statistics</h4>
					</div>
					<div class="card-body overflow-hidden">
						<canvas id="myChart" width="800" height="300"></canvas>
					</div>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-md-12 col-lg-12 col-xl-4">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Browsing Status</h4>
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
							<p class="mb-2">Safari<span class="float-right text-muted">70%</span></p>
							<div class="progress">
								<div class="progress-bar bg-warning w-70" role="progressbar"></div>
							</div>
						</div>
						<div class="mb-4">
							<p class="mb-2">Opera<span class="float-right text-muted">60%</span></p>
							<div class="progress">
								<div class="progress-bar bg-success w-60" role="progressbar"></div>
							</div>
						</div>

						<div class="mb-3">
							<p class="mb-2">Internet Explore<span class="float-right text-muted">60%</span>
							</p>
							<div class="progress">
								<div class="progress-bar bg-danger w-60" role="progressbar"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-12 col-xl-4">
				<div class="card">
					<div class="card-header">
						<h4>Activity Overview</h4>
					</div>
					<div class="card-body">
						<div id="line-chart" class="overflow-hidden h-300"></div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-12 col-xl-4">
				<div class="card">
					<div class="card-body box profile">
						<div class="img">
							<img src="assets/img/avatar/avatar-2.jpeg" alt="">
						</div>
						<h3 class="name mt-2">Steven Jones</h3>
						<p class="title">Javascript Developer</p>
						<p class="mb-0"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor.</p>
					</div>
					<div class="card-body bg-light profile p-3">
						<div class="social-icons col-12">
							<div class="icon col-4">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<h4>12.8k</h4>
								<p class="mb-0">Followers</p>
							</div>
							<div class="icon  col-4">
								<a href="#"><i class="fa fa-google"></i></a>
								<h4>14.8k</h4>
								<p class="mb-0">Followers</p>
							</div>

							<div class="icon col-4">
								<a href="#"><i class="fa fa-twitter"></i></a>
								<h4>10.8k</h4>
								<p class="mb-0">Followers</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-xs-12 col-lg-7 col-md-12 col-xl-5 widgetb">
				<div class="card ">
					<div class="card-body weather text-white pt-5 pb-5">
						<h4 class="mb-0">MONDAY <br />
							<span class="text-white-transaprent h5"> 22 October</span>
						</h4>
						<div class="fs-45 text-white pt-2 ">
							32<sup>o</sup>
							<span class="h3 ">Rainy</span>
						</div>
						<div class="d-none d-lg-block">
							<div class="rainy"></div>
						</div>
					</div>
					<div class="card-footer bg-white text-center pt-4 pb-4">
						<div class="row">
							<div class="col-4 col-md-4 col-xl-2 mt-2 pb-2">
								<h6 class="text-muted mb-3">TUE</h6>
								<i class="fe fe-cloud-rain"></i>
								<p class="mb-0 text-muted">18<sup>o</sup>c</p>
							</div>
							<div class="col-4 col-md-4 col-xl-2 mt-2 pb-2">
								<h6 class="text-muted mb-3">WED</h6>
								<i class="fe fe-cloud"></i>
								<p class="mb-0 text-muted">22<sup>o</sup>c</p>
							</div>
							<div class="col-4  col-md-4 col-xl-2 mt-2 pb-2">
								<h6 class="text-muted mb-3">THU</h6>
								<i class="fe fe-cloud-snow"></i>
								<p class="mb-0 text-muted">15<sup>o</sup>c</p>
							</div>
							<div class="col-4  col-md-4 col-xl-2  mt-2 pb-2">
								<h6 class="text-muted mb-3">FRI</h6>
								<i class="fe fe-cloud-rain"></i>
								<p class="mb-0 text-muted">19<sup>o</sup>c</p>
							</div>
							<div class="col-4  col-md-4 col-xl-2  mt-2 pb-2">
								<h6 class="text-muted mb-3">SAT</h6>
								<i class="fe fe-cloud"></i>
								<p class="mb-0 text-muted">29<sup>o</sup>c</p>
							</div>
							<div class="col-4  col-md-4 col-xl-2 mt-2 pb-2">
								<h6 class="text-muted mb-3">SUN</h6>
								<i class="fe fe-cloud-snow"></i>
								<p class="mb-0 text-muted">17<sup>o</sup>c</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-5 col-md-12 col-sm-12 col-xl-7">
				<div class="card">
					<div class="card-header border-bottom-0">
						<h4 class="card-title">User feedback</h4>
					</div>
					<div class="">
						<div class="table-responsive border-top">
							<table class="table card-table table-striped table-vcenter text-nowrap mb-0">
								<thead>
									<tr>
										<th>Id</th>
										<th colspan="2">User</th>
										<th>Feed back</th>
										<th>Date</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>2345</td>
										<td><img src="assets/img/avatar/avatar-1.jpeg" alt="profile-user"
												class="rounded-circle w-32"></td>
										<td>Megan Peters</td>
										<td>please check pricing Info </td>
										<td class="text-nowrap">July 13, 2018</td>
										<td class="w-1"><a href="#" class="icon"><i
													class="fa fa-trash-o text-danger"></i></a></td>
									</tr>
									<tr>
										<td>4562</td>
										<td><img src="assets/img/avatar/avatar-2.jpeg" alt="profile-user"
												class="rounded-circle w-32"></td>
										<td>Phil Vance</td>
										<td>New stock</td>
										<td class="text-nowrap">June 15, 2018</td>
										<td><a href="#" class="icon"><i class="fa fa-trash-o text-danger"></i></a></td>
									</tr>
									<tr>
										<td>8765</td>
										<td><img src="assets/img/avatar/avatar-3.jpeg" alt="profile-user"
												class="rounded-circle w-32"></td>
										<td>Adam Sharp</td>
										<td>Daily updates</td>
										<td class="text-nowrap">July 8, 2018</td>
										<td><a href="#" class="icon"><i class="fa fa-trash-o text-danger"></i></a></td>
									</tr>
									<tr>
										<td>2665</td>
										<td><img src="assets/img/avatar/avatar-4.jpeg" alt="profile-user"
												class="rounded-circle w-32"></td>
										<td>Samantha Slater</td>
										<td>available item list</td>
										<td class="text-nowrap">June 28, 2018</td>
										<td><a href="#" class="icon"><i class="fa fa-trash-o text-danger"></i></a></td>
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

<?php include $App.'footer.php'; ?>

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

<!--Sidemenu js-->
<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

<!--Chart.min js-->
<script src="assets/js/chart.min.js"></script>

<!--Othercharts js-->
<script src="assets/plugins/othercharts/jquery.knob.js"></script>
<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

<!--Morris js-->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/morris/raphael.min.js"></script>

<!--mCustomScrollbar js-->
<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--Min Calendar -->
<script src="assets/plugins/fullcalendar/calendar.min.js"></script>

<!--Scripts js-->
<script src="assets/js/apexcharts.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/dashboard.js"></script>

<!-- ECharts -->
<script src="assets/plugins/echarts/echarts.js"></script>

<!--OtherCharts js-->
<script src="assets/js/othercharts.js"></script>

</body>

</html>