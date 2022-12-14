<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">BookStore Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="../index.php">HOME SITE</a></li>

        <li class="dropdown">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user">
                        <?php 
                            if(isset($_SESSION['username']))
                            {
                                echo $_SESSION['username']; 
                            }
                        ?>
                    </i>
                <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            
            <li>
                <a href="./quanlydanhmuc.php"><i class="fa fa-fw fa-wrench"></i> Qu???n l?? danh m???c</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#books_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Qu???n l?? s???n ph???m <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="books_dropdown" class="collapse">
                    <li>
                        <a href="./quanlysanpham.php">Danh s??ch s???n ph???m</a>
                    </li>
                    <li>
                        <a href="quanlysanpham.php?source=add_product">Th??m s???n ph???m</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="./quanlybinhluan.php"><i class="fa fa-fw fa-file"></i> Qu???n l?? b??nh lu???n</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#users_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Qu???n l?? ng?????i d??ng <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="users_dropdown" class="collapse">
                    <li>
                        <a href="./quanlynguoidung.php">Danh s??ch ng?????i d??ng</a>
                    </li>
                    <li>
                        <a href="quanlynguoidung.php?source=add_user">Th??m ng?????i d??ng</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="./xulydonhang.php"><i class="fa fa-fw fa-dashboard"></i> X??? l?? ????n h??ng</a>
            </li>
            <li>
                <a href="./thongke.php"><i class="fa fa-fw fa-dashboard"></i> Th???ng k??</a>
            </li>
            <li>
                <a href=".tuvan.php"><i class="fa fa-fw fa-dashboard"></i> T?? v???n</a>
            </li>
            <li>
                <a href="./profile.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>