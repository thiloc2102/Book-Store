<?php
    $taikhoan = $_POST['username_login'];
    $matkhau = $_POST['password_login'];

    $taikhoan = mysqli_real_escape_string($connect,$taikhoan);
    $matkhau = mysqli_real_escape_string($connect,$matkhau);

    if($taikhoan=='' || $matkhau ==''){
        echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script>';
    }
    else
    {
        $sql_select_login = mysqli_query($connect,"SELECT * FROM user WHERE username='$taikhoan' AND password='$matkhau' LIMIT 1");
        $count = mysqli_num_rows($sql_select_login);
        $row_login = mysqli_fetch_array($sql_select_login);
        if($count > 0){
            $_SESSION['username'] = $row_login['username'];
            $_SESSION['user_id'] = $row_login['user_id'];
            $_SESSION['role'] = $row_login['role'];

            if($_SESSION['role'] == 0)
            {
                header('Location: index.php');
            }
            elseif($_SESSION['role'] == 1)
            {
                header('Location: admin/');
            }
            
            
        }else{
            echo '<script>alert("Tài khoản hoặc mật khẩu sai")</script>';
        }
        
    }
?>