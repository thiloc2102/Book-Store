<?php include "includes/admin_header.php" ?>

<?php
    if(isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
        $query = "SELECT * FROM user WHERE username = '$username' ";
        $select_user_profile_query = mysqli_query($connect,$query);

        while($row = mysqli_fetch_array($select_user_profile_query))
        {
            $user_id          = $row['user_id'];
            $username         = $row['username'];
            $password         = $row['password'];
            $hodem            = $row['hodem'];
            $ten              = $row['ten'];
            $email            = $row['email'];
            $diachi           = $row['diachi'];
            $sdt              = $row['sdt'];
            $role             = $row['role'];
        }

    }

    if(isset($_POST['edit_user']))
    {
        $usename  = $_POST['username'];
        $hodem    = $_POST['hodem'];
        $ten      = $_POST['ten'];
        $email    = $_POST['email'];
        $diachi   = $_POST['diachi'];
        $sdt      = $_POST['sdt'];
        $password = $_POST['password'];
        $role     = $_POST['role'];

        $query = "UPDATE user SET ";
        $query .="hodem='{$hodem}', ";
        $query .="ten = '{$ten}', ";
        $query .="username   =  '{$username}', ";
        $query .="email = '{$email}', ";
        $query .="diachi = '{$diachi}', ";
        $query .="sdt = '{$sdt}', ";
        $query .="password = '{$password}', ";
        $query .="role = '{$role}' ";
        $query .= "WHERE username = '{$username}' ";

        $edit_user_query = mysqli_query($connect,$query);
        
        if(!$edit_user_query)
        {
            die("Query Failed" . mysqli_error($connect));
        }
    }

    
?>
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
                        <form action="" method="post" enctype="multipart/form-data">    
                            <div class="form-group">
                                <label for="hodem">Họ đệm</label>
                                <input value="<?php echo $hodem; ?>" type="text" class="form-control" name="hodem" id="hodem">
                            </div>

                            <div class="form-group">
                                <label for="ten">Tên</label>
                                <input value="<?php echo $ten; ?>" type="text" class="form-control" name="ten" id="ten">
                            </div>


                            <!-- <div class="form-group">
                                <label for="post_image">Post Image</label>
                                <input type="file" name="post_image" id="post_image">
                            </div> -->

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input value="<?php echo $username; ?>" type="text" class="form-control" name="username" id="username">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input value="<?php echo $email; ?>" type="email" class="form-control" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <label for="sdt">Số điện thoại</label>
                                <input value="<?php echo $sdt; ?>" type="sdt" class="form-control" name="sdt" id="sdt">
                            </div>

                            <div class="form-group">
                                <label for="diachi">Địa chỉ</label>
                                <input value="<?php echo $diachi; ?>" type="diachi" class="form-control" name="diachi" id="diachi">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input value="<?php echo $password; ?>" type="password" class="form-control" name="password" id="password">
                            </div>

                            <div class="form-group">
                                <label for="role">Role</label>
                                <select name="role" class="form-control" id="role">
                                    <?php echo"<option value='$role'>$role</option>"; 
                                    if($role == '1')
                                    {
                                        echo "<option value='0'>0</option>";
                                    }
                                    else
                                    {
                                        echo "<option value='1'>1</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            
                            
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="edit_user" value="Update Profile">
                            </div>

                        </form>
                        

                    </div> <!-- /.col-lg-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.container-fluid -->
            
        </div>  <!-- /#page-wrapper -->
       

<?php include "includes/admin_footer.php" ?>
