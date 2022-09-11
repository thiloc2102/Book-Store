<?php include "includes/admin_header.php" ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin
                            <small>
                            <?php 
                                if(isset($_SESSION['username']))
                                {
                                    echo $_SESSION['username']; 
                                }
                            ?>

                            </small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $query = "SELECT * FROM danhmucsach";
                                            $select_all_danhmuc = mysqli_query($connect,$query);

                                            $danhmuc_count = mysqli_num_rows($select_all_danhmuc);

                                            echo "<div class='huge'>$danhmuc_count</div>";
                                        ?>  
                                        <div>Categories</div>
                                    </div>
                                </div>
                            </div>
                            <a href="quanlydanhmuc.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $query = "SELECT * FROM binhluan";
                                            $select_all_comments = mysqli_query($connect,$query);

                                            $comment_count = mysqli_num_rows($select_all_comments);

                                            echo "<div class='huge'>$comment_count</div>";
                                        ?>  
                                        <div>Comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="quanlybinhluan.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $query = "SELECT * FROM user";
                                            $select_all_users = mysqli_query($connect,$query);

                                            $user_count = mysqli_num_rows($select_all_users);

                                            echo "<div class='huge'>$user_count</div>";
                                        ?>  
                                        <div> Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="quanlynguoidung.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $query = "SELECT * FROM sach";
                                            $select_all_sach = mysqli_query($connect,$query);

                                            $sach_count = mysqli_num_rows($select_all_sach);

                                            echo "<div class='huge'>$sach_count</div>";
                                        ?>  
                                        <div>Books</div>
                                    </div>
                                </div>
                            </div>
                            <a href="quanlysanpham.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
      

                <!-- <div class="row">
                    <?php
                        // $query = "SELECT * FROM posts WHERE post_status = 'published'";
                        // $select_active_posts = mysqli_query($connection,$query);
                        // $post_active_count = mysqli_num_rows($select_active_posts);

                        // $query = "SELECT * FROM posts WHERE post_status = 'draft'";
                        // $select_draft_posts = mysqli_query($connection,$query);
                        // $post_draft_count = mysqli_num_rows($select_draft_posts);

                        // $query = "SELECT * FROM comments WHERE comment_status = 'unapproved' ";
                        // $select_pending_comments = mysqli_query($connection,$query);
                        // $pending_comment_count = mysqli_num_rows($select_pending_comments);

                        // $query = "SELECT * FROM users WHERE user_role = 'subscriber'";
                        // $select_sub_users = mysqli_query($connection,$query);
                        // $sub_user_count = mysqli_num_rows($select_sub_users);
                    ?>
                   
                   <script type="text/javascript">
                        google.load("visualization", "1.1", {packages:["bar"]});
                        google.setOnLoadCallback(drawChart);
                        function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Data', 'Count'],
                            
                            <?php
                                                        
                                // $element_text = ['All Posts','Active Posts','Draft Posts', 'Comments','Pending Comments', 'Users','Subscribers', 'Categories'];       
                                // $element_count = [$post_count, $post_active_count, $post_draft_count, $pending_comment_count ,$comment_count,$user_count,$sub_user_count, $category_count];


                                // for($i = 0;$i < 8; $i++) {
                                
                                //     echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
                                // }
                                                                            
                            ?>
                                
                        
                        ]);

                        var options = {
                            chart: {
                            title: '',
                            subtitle: '',
                            }
                        };

                        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                        chart.draw(data, options);
                        }
                    </script>
               </div>
                  
            <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div> -->
                   
                   
                   
                   
                   
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php" ?>
