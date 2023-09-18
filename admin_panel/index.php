<?php
include 'init.php';
if (!isset($_SESSION['id'])) {
	header("location:../login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Asta - Bootstrap 4 Responsive Clean Admin HTML5 Dashboard Template</title>

	<!--Favicon -->
	<link rel="icon" href="favicon.ico" type="image/x-icon" />

	<!--Bootstrap.min css-->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!--Icons css-->
	<link rel="stylesheet" href="assets/css/icons.css">

	<!--Style css-->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--mCustomScrollbar css-->
	<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

	<!--Sidemenu css-->
	<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

	<!--Chartist css-->
	<link rel="stylesheet" href="assets/plugins/chartist/chartist.css">
	<link rel="stylesheet" href="assets/plugins/chartist/chartist-plugin-tooltip.css">

	<!--Full calendar css-->
	<link rel="stylesheet" href="assets/plugins/fullcalendar/stylesheet1.css">

</head>

<body class="app ">
	<div id="spinner"></div>
	<div id="app" class="page">
		<div class="main-wrapper page-main">
			<nav class="navbar navbar-expand-lg main-navbar">
				<a class="header-brand" href="index.html">
					<img src="assets/img/brand/logo.png" class="header-brand-img" alt="  Asta-Admin  logo">
				</a>
				<form class="form-inline mr-auto">
					<ul class="navbar-nav">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
									class="fa fa-navicon"></i></a></li>
						<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none navsearch"><i
									class="ion ion-search"></i></a></li>
					</ul>

					<div class="form-inline mr-auto horizontal" id="headerMenuCollapse">
						<div class=" d-none d-lg-block">
							<ul class="nav">
								<li class="nav-item with-sub">
									<a class="nav-link mr-0" href="#">
										<i class="fa fa-cog"></i>
										<span> Settings</span>
									</a>
									<div class="sub-item dropdown-menu-right">
										<ul>
											<li>
												<a href="#">Setting 1</a>
											</li>
											<li>
												<a href="#">Setting 2</a>
											</li>
											<li>
												<a href="#">Setting 3</a>
											</li>
										</ul>
									</div><!-- sub-item -->
								</li>
								<li class="nav-item with-sub">
									<a class="nav-link" href="#"><i class="fa fa-cube"></i><span>Options</span></a>
									<div class="sub-item dropdown-menu-right">
										<ul>
											<li>
												<a href="#">Option 1 </a>
											</li>
											<li>
												<a href="#">Option 2</a>
											</li>
											<li>
												<a href="#">Option 3</a>
											</li>
											<li class="sub-with-sub">
												<a href="#">Option 3</a>
												<ul>
													<li>
														<a href="#">Option 01</a>
													</li>
													<li>
														<a href="#">Option 02</a>
													</li>
													<li>
														<a href="#">Option 03</a>
													</li>
													<li>
														<a href="#">Option 04</a>
													</li>
												</ul>
											</li>
										</ul>
									</div>
									<!-- dropdown-menu -->
								</li>
							</ul>
						</div>
					</div>
				</form>

				<ul class="navbar-nav navbar-right ">
					<li class=""><a href="#" class=" "></a>
						<form class="form-inline mr-auto">
							<div class="search-element">
								<input type="search" class="form-control header-search" placeholder="Search…"
									aria-label="Search" tabindex="1">
								<button class="btn btn-primary" type="submit"><i class="ion ion-search"></i></button>
							</div>
						</form>
					</li>
					<li class="dropdown dropdown-list-toggle d-none d-lg-block"><a href="#" data-toggle="dropdown"
							class="nav-link notification-toggle nav-link-lg "><i class="fa fa-envelope-o"></i></a><span
							class="pulse bg-danger"></span>
						<div class="dropdown-menu dropdown-list dropdown-menu-right">
							<div class="dropdown-header">Messages
								<div class="float-right">
									<a href="#">View All</a>
								</div>
							</div>
							<div class="dropdown-list-content">
								<a href="#" class="dropdown-item dropdown-item-unread">
									<img alt="image" src="assets/img/avatar/avatar-1.jpeg"
										class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc">
										<div class="dropdownmsg d-flex">
											<div class="">
												<b>Stewart Ball</b>
												<p>Your template awesome</p>
											</div>
											<div class="time">6 hours ago</div>
										</div>
									</div>
								</a>
								<a href="#" class="dropdown-item dropdown-item-unread">
									<img alt="image" src="assets/img/avatar/avatar-2.jpeg"
										class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc">
										<div class="dropdownmsg d-flex">
											<div class="">
												<b>Jonathan North</b>
												<p>Your Order Shipped.....</p>
											</div>
											<div class="time">45 mins ago</div>
										</div>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<img alt="image" src="assets/img/avatar/avatar-4.jpeg"
										class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc">
										<div class="dropdownmsg d-flex">
											<div class="">
												<b>Victor Taylor</b>
												<p>Hi!, I' am web developer</p>
											</div>
											<div class="time"> 8 hours ago</div>
										</div>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<img alt="image" src="assets/img/avatar/avatar-3.jpeg"
										class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc">
										<div class="dropdownmsg d-flex">
											<div class="">
												<b>Ruth Arnold</b>
												<p>Hi!, I' am web designer</p>
											</div>
											<div class="time"> 3 hours ago</div>
										</div>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<img alt="image" src="assets/img/avatar/avatar-5.jpeg"
										class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc">
										<div class="dropdownmsg d-flex">
											<div class="">
												<b>Sam Lyman</b>
												<p>Hi!, I' am java developer</p>
											</div>
											<div class="time"> 15 mintues ago</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="dropdown dropdown-list-toggle d-none d-lg-block"><a href="#" data-toggle="dropdown"
							class="nav-link  nav-link-lg"><i class="fa fa-bell-o"></i></a><span
							class="pulse bg-danger"></span>
						<div class="dropdown-menu dropdown-list dropdown-menu-right">
							<div class="dropdown-header">Notifications
								<div class="float-right">
									<a href="#">View All</a>
								</div>
							</div>
							<div class="dropdown-list-content">
								<a href="#" class="dropdown-item">
									<i class="fa fa-users  text-primary"></i>
									<div class="dropdown-item-desc">
										<b>So many Users Visit your template</b>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<i class="fa fa-exclamation-triangle text-danger"></i>
									<div class="dropdown-item-desc">
										<b>Error message occurred....</b>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<i class="fa fa-users text-warning"></i>
									<div class="dropdown-item-desc">
										<b> Adding new people</b>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<i class="fa fa-shopping-cart text-success"></i>
									<div class="dropdown-item-desc">
										<b>Your items Arrived</b>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<i class="fa fa-comment text-primary"></i>
									<div class="dropdown-item-desc">
										<b>New Message received</b>
										<div class="float-right"><span
												class="badge badge-pill badge-danger badge-sm">67</span></div>
									</div>
								</a>
								<a href="#" class="dropdown-item">
									<i class="fa fa-users text-primary"></i>
									<div class="dropdown-item-desc">
										<b>So many Users Visit your template</b>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="dropdown dropdown-list-toggle">
						<a href="#" class="nav-link nav-link-lg full-screen-link">
							<i class="fa fa-expand" id="fullscreen-button"></i>
						</a>
					</li>
					<li class="dropdown"><a href="#" data-toggle="dropdown"
							class="nav-link dropdown-toggle nav-link-lg">
							<img src="assets/img/avatar/avatar-1.jpeg" alt="profile-user" class="rounded-circle w-32">
							<div class="d-sm-none d-lg-inline-block">Victorina</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="profile.html" class="dropdown-item has-icon">
								<i class="ion ion-android-person"></i> Profile
							</a>
							<a href="profile.html" class="dropdown-item has-icon">
								<i class="ion-android-drafts"></i> Messages
							</a>
							<a href="profile.html" class="dropdown-item has-icon">
								<i class="ion ion-gear-a"></i> Settings
							</a>
							<a href="#" class="dropdown-item has-icon">
								<i class="ion-ios-redo"></i> Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>

			<aside class="app-sidebar">
				<div class="app-sidebar__user">
					<div class="dropdown">
						<a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
							<img alt="image" src="assets/img/avatar/avatar-1.jpeg" class=" avatar-md rounded-circle">
							<span class="ml-2 d-lg-block">
								<span class="text-dark app-sidebar__user-name mt-5">Victorina</span><br>
								<span class="text-muted app-sidebar__user-name text-sm"> Web-Designer</span>
							</span>
						</a>
					</div>
				</div>
				<ul class="side-menu">
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-desktop"></i><span
								class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="index.html"><span>Sales Dashboard </span></a></li>
							<li><a class="slide-item" href="index2.html"><span>E-Commerce</span></a></li>
							<li><a class="slide-item" href="index3.html"><span>HR Dashboard </span></a></li>
							<li><a class="slide-item" href="index4.html"><span>Finance Dashboard </span></a></li>
							<li><a class="slide-item" href="index5.html"><span>Social Dashboard</span></a></li>
						</ul>
					</li>
					<li>
						<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fa fa-flask"></i><span
								class="side-menu__label">Widgets</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-tasks"></i><span class="side-menu__label">UI
								Elements</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a href="elements.html" class="slide-item"> Elements</a></li>
							<li><a href="buttons.html" class="slide-item"> Buttons</a></li>
							<li><a href="toastr.html" class="slide-item"> Toastr</a></li>
							<li><a href="calender.html" class="slide-item"> Calendar</a></li>
							<li><a href="rangesliders.html" class="slide-item"> Rangeslider</a></li>
							<li><a href="modals.html" class="slide-item"> Modals</a></li>
							<li><a href="timeline.html" class="slide-item"> Timeline</a></li>
							<li><a href="invoice.html" class="slide-item"> Invoice</a></li>
							<li><a href="users.html" class="slide-item"> Users List</a></li>
							<li><a href="mailinbox.html" class="slide-item"> Mail-inbox</a></li>
							<li><a href="mail-compose.html" class="slide-item"> Mail-Compose</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-paw"></i><span class="side-menu__label">Icons</span><i
								class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a href="icons-ion.html" class="slide-item"> Ion Icons</a></li>
							<li><a href="icons-fontawesome.html" class="slide-item"> Font Awesome</a></li>
							<li><a href="icons-feather.html" class="slide-item"> Feather Icons</a></li>
							<li><a href="icons-materialdesign.html" class="slide-item"> Material Design</a></li>
							<li><a href="icons-themify.html" class="slide-item"> Themify</a></li>
							<li><a href="icons-simpleline.html" class="slide-item"> Simple line</a></li>
							<li><a href="icons-pe7.html" class="slide-item"> pe7</a></li>
							<li><a href="icons-flag.html" class="slide-item"> Flag Icons</a></li>
							<li><a href="icons-weather.html" class="slide-item"> Weather Icons</a></li>
							<li><a href="icons-typicons.html" class="slide-item"> Typicons</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Tables</span><i
								class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a href="table.html" class="slide-item">Basic Tables</a></li>
							<li><a href="datatables.html" class="slide-item"> Data Tables</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-file-text"></i><span
								class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a href="formelements.html" class="slide-item"> Form Elements</a></li>
							<li><a href="formadvanced.html" class="slide-item"> Advanced Form</a></li>
							<li><a href="formeditor.html" class="slide-item"> Form Editor</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-bar-chart"></i><span
								class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a href="chartjs.html" class="slide-item">Chart Js</a></li>
							<li><a href="flotcharts.html" class="slide-item"> Flot Charts</a></li>
							<li><a href="barcharts.html" class="slide-item"> Bar Charts</a></li>
							<li><a href="echart.html" class="slide-item"> ECharts</a></li>
							<li><a href="chartist.html" class="slide-item"> Chartist</a></li>
							<li><a href="morris.html" class="slide-item"> Morris Charts</a></li>
							<li><a href="othercharts.html" class="slide-item"> Other Charts</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-map"></i><span class="side-menu__label">Maps</span><i
								class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a href="maps.html" class="slide-item"> Google Maps</a></li>
							<li><a href="vector-map.html" class="slide-item">Vector Maps</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-pie-chart"></i><span
								class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a href="profile.html" class="slide-item"> Profile</a></li>
							<li><a href="pricing-tables.html" class="slide-item"> Pricing Tables</a></li>
							<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
							<li><a href="shop.html" class="slide-item"> Shop</a></li>
							<li><a href="shop-cart.html" class="slide-item"> Shop Cart</a></li>
							<li><a href="terms.html" class="slide-item"> Terms and Conditions</a></li>
							<li><a href="register.html" class="slide-item"> Register</a></li>
							<li><a href="login.html" class="slide-item"> Login</a></li>
							<li><a href="forgot.html" class="slide-item"> Forgot Password</a></li>
							<li><a href="reset.html" class="slide-item"> Reset Password</a></li>
							<li><a href="under-construction.html" class="slide-item"> Under Construction</a></li>
							<li><a href="lockscreen.html" class="slide-item"> Lock Screen</a></li>
							<li><a href="404.html" class="slide-item"> 404</a></li>
							<li><a href="505.html" class="slide-item"> 505</a></li>
							<li><a href="emptypage.html" class="slide-item"> Empty Page</a></li>
						</ul>
					</li>

				</ul>
			</aside>

			<div class="app-content">
				<section class="section">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="text-muted">Home</a></li>
						<li class="breadcrumb-item active text-" aria-current="page">Sales Dashboard</li>
						<li class="ml-auto d-lg-flex d-none">
							<span class="sparkline_bar mr-2 float-left"></span>
							<span class="float-left border-">
								<span class="mb-0 mt-1 mr-2">1,267</span><small class="mb-0 mr-3">[ Visitors ]</small>
							</span>
							<span class="sparkline_bar1 mr-2 float-left"></span>
							<span class="float-left">
								<span class="mb-0 mt-1 mr-2">215</span><small class="mb-0">[ Chats ]</small>
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
										<div class="position-relative d-inline-block  p-1">
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
												</span>Last Month <span
													class="list-items-percentage float-right">30%</span>
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
									<div class="mb-2 text-center"><label class="tx-12 text-muted">Total Revenue of the
											Year</label>
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
												<input type="text" class="knob" value="33" data-thickness="0.15"
													data-width="80" data-height="80" data-fgColor="#01cf6b">
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
												<input type="text" class="knob" value="85" data-thickness="0.15"
													data-width="80" data-height="80" data-fgColor="#3454f5">
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
												<input type="text" class="knob" value="74" data-thickness="0.15"
													data-width="80" data-height="80" data-fgColor="#f9282b">
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
												<input type="text" class="knob" value="45" data-thickness="0.15"
													data-width="80" data-height="80" data-fgColor="#fe7100">
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
									<p class="mb-0"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
										eiusmodtempor.</p>
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
													<td><a href="#" class="icon"><i
																class="fa fa-trash-o text-danger"></i></a></td>
												</tr>
												<tr>
													<td>8765</td>
													<td><img src="assets/img/avatar/avatar-3.jpeg" alt="profile-user"
															class="rounded-circle w-32"></td>
													<td>Adam Sharp</td>
													<td>Daily updates</td>
													<td class="text-nowrap">July 8, 2018</td>
													<td><a href="#" class="icon"><i
																class="fa fa-trash-o text-danger"></i></a></td>
												</tr>
												<tr>
													<td>2665</td>
													<td><img src="assets/img/avatar/avatar-4.jpeg" alt="profile-user"
															class="rounded-circle w-32"></td>
													<td>Samantha Slater</td>
													<td>available item list</td>
													<td class="text-nowrap">June 28, 2018</td>
													<td><a href="#" class="icon"><i
																class="fa fa-trash-o text-danger"></i></a></td>
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

			<footer class="main-footer">
				<div class="text-center">
					Copyright &copy; Asta-Admin 2018. Design By<a href="https://spruko.com/"> Spruko</a>
				</div>
			</footer>

		</div>
	</div>

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