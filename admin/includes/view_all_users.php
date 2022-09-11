<table class="table table-bordered table-hover">
<thead>
    <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Họ đệm</th>
    <th>Tên</th>
    <th>Email</th>
    <th>Địa chỉ</th>
    <th>SĐT</th>
    <th>Role</th>
    <th>Admin</th>
    <th>Member</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
</thead>
<tbody>
    <?php
        $query = "SELECT * FROM user";
        $select_all_users_query = mysqli_query($connect,$query);

        while($row = mysqli_fetch_assoc($select_all_users_query))
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

            echo "<tr>";
                echo "<td>$user_id</td>";
                echo "<td>$username</td>";
                echo "<td>$hodem</td>";
                echo "<td>$ten</td>";
                echo "<td>$email</td>";
                echo "<td>$diachi</td>";
                echo "<td>$sdt</td>";
                echo "<td>$role</td>";
                echo "<td><a href='quanlynguoidung.php?change_to_admin={$user_id}'>Admin</a></td>";
                echo "<td><a href='quanlynguoidung.php?change_to_member={$user_id}'>Member</a></td>";
                echo "<td><a href='quanlynguoidung.php?source=edit_user&edit_user={$user_id}'><i class='fa fa-pencil-square-o' aria-hidden='true' style='font-size: 20px; padding-left: 5px;'></i></a></td>";
                echo "<td><a href='quanlynguoidung.php?delete={$user_id}'><i class='fa fa-trash' style='font-size: 20px; padding-left: 5px;'></i></a></td>";
                    
            echo "</tr>";
        }

    ?>
    
</tbody>
</table>

<?php 
    //Change to admin
    if(isset($_GET['change_to_admin']))
    {
        $user_id = $_GET['change_to_admin'];
        $query = "UPDATE user SET role = '1' WHERE user_id = {$user_id}";
        $change_to_admin_query = mysqli_query($connect,$query);
        header("Location: quanlynguoidung.php");
    }

    //Change to member
    if(isset($_GET['change_to_member']))
    {
        $user_id = $_GET['change_to_member'];
        $query = "UPDATE user SET role = '0' WHERE user_id = {$user_id}";
        $change_to_member_query = mysqli_query($connect,$query);
        header("Location: quanlynguoidung.php");
    }

    //Delete User
    if(isset($_GET['delete']))
    {
        $user_id_delete = $_GET['delete'];
        $query = "DELETE FROM user WHERE user_id = {$user_id_delete}";
        $delete_user_query = mysqli_query($connect,$query);
        header("Location: quanlynguoidung.php");
    }
?>