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

                        <div class="col-xs-6">
                            <?php
                                if(isset($_POST['add-category']))
                                {
                                    $cat_title = $_POST['cat_title'];
                        
                                    if($cat_title == "" || empty($cat_title))
                                    {
                                        echo "This field should not be empty!";
                                    }
                                    else
                                    {
                                        $query = "INSERT INTO danhmucsach(danhmucsach_ten) VALUES('{$cat_title}')";
                                        $create_category_query = mysqli_query($connect,$query);
                                        if(!$create_category_query)
                                        {
                                            die('Query Failed!' . mysqli_error($connect));
                                        }
                                    }
                                }
                            ?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_title">Add Category Title:</label>
                                    <input class="form-control" type="text" name="cat_title" id="cat_title"> 
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="add-category" value="Add Category">
                                </div>
                            </form>

                            <?php //UPDATE CATEGORY
                                if(isset($_GET['edit']))
                                {
                                    $cat_id = $_GET['edit'];

                                    include "includes/update_category.php";
                                }
                            ?>
                        </div> <!-- /Add Category Form -->
            
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Title</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query = "SELECT * FROM danhmucsach";
                                        $select_all_categpries_query = mysqli_query($connect,$query);

                                        while($row = mysqli_fetch_array($select_all_categpries_query))
                                        {
                                            $danhmucsach_id = $row['danhmucsach_id'];
                                            $danhmucsach_ten = $row['danhmucsach_ten'];

                                            echo "<tr>
                                                    <td>{$danhmucsach_id}</td>
                                                    <td>{$danhmucsach_ten}</td>
                                                    <td><a href='quanlydanhmuc.php?delete={$danhmucsach_id}'>Delete</td>
                                                    <td><a href='quanlydanhmuc.php?edit={$danhmucsach_id}'>Update</td>
                                                </tr>";
                                        }
                                    ?>

                                    <?php //Delete Category
                                        if(isset($_GET['delete']))
                                        {
                                            $cat_id_delete = $_GET['delete'];
                                            $query = "DELETE FROM danhmucsach WHERE danhmucsach_id = {$cat_id_delete}";
                                            $delete_category_query = mysqli_query($connect,$query);
                                            header("Location: quanlydanhmuc.php");
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- /.col-lg-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.container-fluid -->
            
        </div>  <!-- /#page-wrapper -->
       

<?php include "includes/admin_footer.php" ?>
