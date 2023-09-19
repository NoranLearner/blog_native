<body>
    <div class="header" id="ban">
        <div class="container">
            <div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                <div class="header-search">
                    <div class="search">
                        <input class="search_box" type="checkbox" id="search_box">
                        <label class="icon-search" for="search_box">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </label>
                        <div class="search_form">
                            <form action="#" method="post">
                                <input type="submit" value="بحث">
                                <input type="text" name="Search" class="text-right" placeholder="...بحث">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav class="link-effect-7" id="link-effect-7">
                            <ul class="nav navbar-nav">
                                <?php if (!isset($_SESSION['id'])) { ?>
                                    <li><a href="sign-up.php">انشاء حساب</a></li>
                                    <li><a href="login.php"> دخول </a></li>
                                <?php } ?>
                                <li class="nav-item dropdown"><a href="blog.html"> المدونه </a></li>
                                <li><a href="movies.html">الأفلام</a></li>
                                <li><a href="contact.html">اتصل بنا </a></li>
                                <li class="active act"><a href="index.php"> الرئيسيه </a></li>

                            </ul>
                        </nav>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                <ul>
                    <li><a href="#"> </a></li>
                    <li><a href="#" class="pin"> </a></li>
                    <li><a href="#" class="in"> </a></li>
                    <li><a href="#" class="be"> </a></li>
                    <li><a href="#" class="vimeo"> </a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>