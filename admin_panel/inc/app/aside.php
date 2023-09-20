<aside class="app-sidebar">

    <div class="app-sidebar__user">
        <div class="dropdown">
            <a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
                <img alt="image" src="assets/img/avatar/myavatar.jpg" class=" avatar-md rounded-circle">
                <span class="ml-2 d-lg-block">
                    <span class="text-dark app-sidebar__user-name mt-5">
                        <?php echo ucfirst($user['username']) ?>
                    </span><br>
                    <span class="app-sidebar__user-name text-sm" style="color:cadetblue !important">
                        <?php echo permission($user['role']); ?> 
                    </span>
                </span>
            </a>
        </div>
    </div>

    <ul class="side-menu">
        <!-- style="margin-bottom: 7px;border-top:7px;border-bottom:2px solid #F4F7FE" -->
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="side-menu__icon fa fa-rss"></i>
                <span class="side-menu__label">Blog</span>
                <i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="categories.php"><span>Categories</span></a></li>
                <li><a class="slide-item" href="blogs.php"><span>Posts</span></a></li>
                <li><a class="slide-item" href="comments.php"><span>Comments</span></a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="side-menu__icon fa fa-users"></i>
                <span class="side-menu__label"> Users </span>
                <i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">
                <li><a href="#" class="slide-item"> Admin Management</a></li>
                <li><a href="#" class="slide-item"> User Management </a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="side-menu__icon fa fa-money"></i>
                <span class="side-menu__label"> Profits </span>
                <i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">
                <li><a href="#" class="slide-item"> Profits </a></li>
                <li><a href="#" class="slide-item"> Withdrawal Requests </a></li>
            </ul>
        </li>
    </ul>

</aside>