<table class="table table-bordered table-hover">
<thead>
    <tr>
        <th>ID</th>
        <th>Tác giả</th>
        <th>Email</th>
        <th>Nội dung</th>
        <th>Trạng thái</th>
        <th>Ngày đăng</th>
        <th>Approve</th>
        <th>Unapprove</th>
        <th>Delete</th>
        <th>View</th>
    </tr>
</thead>
<tbody>
    <?php
        // $query = "SELECT * FROM comments";
        // $select_all_comments_query = mysqli_query($connection,$query);

        // while($row = mysqli_fetch_assoc($select_all_comments_query))
        // {
        //     $comment_id          = $row['comment_id'];
        //     $comment_post_id     = $row['comment_post_id'];
        //     $comment_author      = $row['comment_author'];
        //     $comment_content     = $row['comment_content'];
        //     $comment_email       = $row['comment_email'];
        //     $comment_status      = $row['comment_status'];
        //     $comment_date        = $row['comment_date'];

        //     echo "<tr>";
        //         echo "<td>$comment_id</td>";
        //         echo "<td>$comment_author</td>";
        //         echo "<td>$comment_content </td>";

        //         echo "<td>$comment_email</td>";
        //         echo "<td>$comment_status</td>";
                
        //         $query = "SELECT * FROM posts WHERE post_id = $comment_post_id ";
        //         $select_post_id_query = mysqli_query($connection,$query);
        //         while($row = mysqli_fetch_assoc($select_post_id_query)){
        //             $post_id = $row['post_id'];
        //             $post_title = $row['post_title'];
                
        //             echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
        //         }
                        
        //         echo "<td>$comment_date</td>";
        //         echo "<td><a href='comments.php?approve={$comment_id}'>Approve</a></td>";
        //         echo "<td><a href='comments.php?unapprove={$comment_id}'>Unapprove</a></td>";
        //         echo "<td><a href='comments.php?delete=$comment_id'>Delete</a></td>";
                    
        //     echo "</tr>";
        // }

    ?>
    <tr style="text-align: center;">
        <td>1</td>
        <td>Loc</td>
        <td>thiloc2102@gmail.com</td>
        <td>aaa</td>
        <td>Duyệt</td>
        <td>20/02/2022</td>
        <td><i class="fa fa-check-circle" style='font-size: 20px; padding-left: 30px;'></i></td>
        <td><i class="fa fa-times" style='font-size: 20px; padding-left: 5px;'></i></td>
        <td><i class='fa fa-trash' style='font-size: 20px; padding-left: 5px;'></i></td>
        <td><i class='fa fa-eye' style='font-size: 20px; padding-left: 10px;'></i></td>
    </tr>
    
</tbody>
</table>

<?php //DELETE COMMENTS
    // if(isset($_GET['approve']))
    // {
    //     $comment_id_approve = $_GET['approve'];
    //     $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = {$comment_id_approve}";
    //     $approve_comment_query = mysqli_query($connection,$query);
    //     header("Location: comments.php");
    // }

    // //UNAPPROVE COMMENTS
    // if(isset($_GET['unapprove']))
    // {
    //     $comment_id_unapprove = $_GET['unapprove'];
    //     $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = {$comment_id_unapprove}";
    //     $unapprove_comment_query = mysqli_query($connection,$query);
    //     header("Location: comments.php");
    // }

    // //APPROVE COMMENTS
    // if(isset($_GET['delete']))
    // {
    //     $comment_id_delete = $_GET['delete'];
    //     $query = "DELETE FROM comments WHERE comment_id = {$comment_id_delete}";
    //     $delete_comment_query = mysqli_query($connection,$query);
    //     header("Location: comments.php");
    // }
?>