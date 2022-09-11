<?php
    if(isset($_POST['checkBoxArray']))
    {
        foreach($_POST['checkBoxArray'] as $postValueId)
        {
            $bulk_options = $_POST['bulk_options'];
            switch($bulk_options)
            {
                case 'delete':
                    $query = " DELETE FROM sach WHERE sach_id = {$postValueId} ";
                    $delete_product = mysqli_query($connect,$query);
                    if(!$delete_product)
                    {
                        die('Query Failed!' . mysqli_error($connect));
                    }
                    break;
            }
        }
    }
?>
<form action="" method="post">
    <table class="table table-bordered table-hover">
    <div id="bulkOptionsContainer" class="col-xs-4" style="padding: 0px; padding-bottom: 5px">
        <select class="form-control" name="bulk_options" id="">
            <option value="">Select Option</option>
            <option value="delete">Delete</option>
        </select>
    </div>
    <div class="col-xs-4">
        <input type="submit" name="submit" class="btn btn-success" value="Apply">
        <a class="btn btn-primary" href="quanlysanpham.php?source=add_product">Add New</a>
    </div>
    <thead>
        <tr>
            <th><input id="selectAllBoxes" type="checkbox"></th>
            <th>ID</th>
            <th>Danh mục</th>
            <th>Tên sách</th>
            <th>Tác giả</th>
            <th>Dịch giả</th>
            <th>TG xuất bản</th>
            <!-- <th>Công ty phát hành</th> -->
            <th>NXB</th>
            <th>Kích thước</th>
            <th>Số trang</th>
            <th>Loại bìa</th>
            <th>Giá</th>
            <th>Giá KM</th>
            <th>Ảnh</th>
            <th>SLT</th>
            <!-- <th>Mô tả</th> -->
            <th>Đã bán</th>
            <th>Bình luận</th>
            <th>Lượt xem</th>
            <th></th>
            <th></th>
            
        </tr>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM sach";
            $select_all_products_query = mysqli_query($connect,$query);

            while($row = mysqli_fetch_assoc($select_all_products_query))
            {
                $sach_id = $row['sach_id'];
                $danhmucsach_id = $row['danhmucsach_id'];
                $tensach =  $row['tensach'];
                $tacgia =  $row['tacgia'];
                $dichgia = $row['dichgia'];
                $thoigianxuatban = $row['thoigianxuatban'];
                $ctyphathanh = $row['congtyphathanh'];
                $nxb = $row['nxb'];
                $kichthuoc = $row['kichthuoc'];
                $sotrang = $row['sotrang'];
                $loaibia = $row['loaibia'];
                $mota =  $row['mota'];
                $gia = $row['gia'];
                $giakm = $row['giakm'];
                $anh = $row['anh'];
                $soluongton = $row['soluongton'];
                $soluongdaban = $row['soluongdaban'];
                $soluotbinhluan =  $row['soluotbinhluan'];
                $soluotxem =  $row['soluotxem'];

                echo "<tr>";
                ?>
                    <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $sach_id; ?>'></td>
                <?php  
                    echo "<td>$sach_id</td>";
                    // SELECT ALL CATEGORY TITLE
                    $query = "SELECT * FROM danhmucsach WHERE danhmucsach_id = {$danhmucsach_id}";
                    $select_categories_id = mysqli_query($connect,$query);

                    while($row = mysqli_fetch_assoc($select_categories_id))
                    {
                        $danhmucsach_id = $row['danhmucsach_id'];
                        $danhmucsach_ten = $row['danhmucsach_ten'];

                        echo "<td>$danhmucsach_ten</td>";
                    }
                    // !--
                    echo "<td>$tensach</td>";
                    echo "<td>$tacgia</td>";
                    echo "<td>$dichgia</td>";
                    echo "<td>$thoigianxuatban</td>";
                    // echo "<td>$ctyphathanh</td>";
                    echo "<td>$nxb</td>";
                    echo "<td>$kichthuoc</td>";
                    echo "<td>$sotrang</td>";
                    echo "<td>$loaibia</td>";
                    echo "<td>$gia</td>";
                    echo "<td>$giakm</td>";
                    echo "<td><img src='../images/$anh' width='50' height='40'></td>";
                    // echo "<td>$mota</td>";
                    echo "<td>$soluongton</td>";
                    echo "<td>$soluongdaban</td>";
                    echo "<td>$soluotbinhluan</td>";
                    echo "<td>$soluotxem</td>";
                    echo "<td><a onClick=\"javascript: return cofirm('Are you sure you want to delete'); \" href='quanlysanpham.php?delete={$sach_id}'><i class='fa fa-trash' style='font-size: 20px; padding-left: 5px;'></a></td>";
                    echo "<td><a href='./quanlysanpham.php?source=edit_product&p_id={$sach_id}'><i class='fa fa-pencil-square-o' aria-hidden='true' style='font-size: 20px; padding-left: 5px;'></i></a></td>";
                    echo "</tr>";
                }

        ?>
        
    </tbody>
    </table>
</form>

<?php //DELETE POSTS
    if(isset($_GET['delete']))
    {
        $product_id_delete = $_GET['delete'];
        $query = "DELETE FROM sach WHERE sach_id = {$product_id_delete}";
        $delete_product_query = mysqli_query($connect,$query);
        header("Location: quanlysanpham.php");
    }
?>