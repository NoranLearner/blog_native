<body class="app ">

	<div id="spinner"></div>

	<div id="app" class="page">

		<div class="main-wrapper page-main">

			<nav class="navbar navbar-expand-lg main-navbar">

				<!-- ********* Start Logo ********* -->
				<a class="header-brand" href="../../blog_native/admin_panel">
					<img src="assets/img/brand/logo.png" class="header-brand-img" alt="Asta-Admin logo">
				</a>
				<!-- ********* End Logo ********* -->

				<!-- ********* Start RightPart ********* -->
				<form class="form-inline mr-auto">

					<ul class="navbar-nav">
						<li>
							<a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
								<i class="fa fa-navicon"></i>
							</a>
						</li>
						<li>
							<a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none navsearch">
								<i class="ion ion-search"></i>
							</a>
						</li>
					</ul>


					<div class="form-inline mr-auto horizontal" id="headerMenuCollapse">
						<div class=" d-none d-lg-block">
							<ul class="nav">
								<!-- <li class="nav-item with-sub">
									<a class="nav-link mr-0" href="#">
										<i class="fa fa-cog"></i>
										<span> Settings</span>
									</a>
									<div class="sub-item dropdown-menu-right">
										<ul>
											<li>
												<a href="#">Site data</a>
											</li>
											<li>
												<a href="#">Social links</a>
											</li>
										</ul>
									</div>
								</li> -->
								<li class="nav-item">
								<a class="nav-link" href="../" target="_blank">
										<i class="fa fa-eye"></i>
										<span>Preview Site</span>
									</a>
									<!-- dropdown-menu -->
								</li>
							</ul>
						</div>
					</div>
				</form>
				<!-- ********* End RightPart ********* -->

				<!-- ********* Start LeftPart ********* -->
				<ul class="navbar-nav navbar-right ">
					<li class="dropdown dropdown-list-toggle d-none d-lg-block">
						<a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg"><i
								class="fa fa-bell-o"></i></a>
						<span class="pulse bg-danger"></span>
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
							<img src="assets/img/avatar/myavatar.jpg" alt="profile-user" class="rounded-circle w-32">
							<!-- <i class="fa fa-user"></i> -->
							<div class="d-sm-none d-lg-inline-block"><?php echo ucfirst($user['username']) ?></div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<!-- <a href="profile.html" class="dropdown-item has-icon">
								<i class="ion ion-android-person"></i> Profile
							</a> -->
							<a href="profile.html" class="dropdown-item has-icon">
								<i class="ion ion-gear-a"></i> Settings
							</a>
							<a href="../logout.php" class="dropdown-item has-icon">
								<i class="ion-ios-redo"></i> Logout
							</a>
						</div>
					</li>
				</ul>
				<!-- ********* End LeftPart ********* -->

			</nav>