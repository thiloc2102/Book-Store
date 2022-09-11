<?php
    $hodem = $_POST['hodem'];
    $ten = $_POST['ten'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $password = $_POST['password'];

    $query = "INSERT INTO user(hodem,ten,username,email,diachi,sdt,password,role) VALUES ('$hodem','$ten','$username','$email','$diachi','$sdt','$password','1')";
    $insert_user_query = mysqli_query($connect,$query);
    if(!$insert_user_query)
    {
        die('Query Failed!');
    }
    else
    {
        $sql_select_user = mysqli_query($connect,"SELECT * FROM user ORDER BY user_id DESC LIMIT 1");
        $row_user = mysqli_fetch_array($sql_select_user);
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $row_user['user_id'];

        header('Location: index.php');
    }
?>