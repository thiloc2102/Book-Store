<?php
    if(isset($_POST['create_product']))
    {
        $danhmucsach_id = $_POST['danhmucsach'];
        $tensach = $_POST['tensach'];
        $tacgia = $_POST['tacgia'];
        $dichgia = $_POST['dichgia'];
        $ctyphathanh =$_POST['ctyphathanh'];
        $nxb = $_POST['nxb'];
        $kichthuoc = $_POST['kichthuoc'];
        $sotrang = $_POST['sotrang'];
        $loaibia = $_POST['loaibia'];
        $mota = $_POST['mota'];
        $gia = $_POST['gia'];
        $giakm = $_POST['giakm'];
        $anh = $_FILES['anh']['name'];
        $anh_temp = $_FILES['anh']['tmp_name'];
        $anh_tail = pathinfo($anh,PATHINFO_EXTENSION);
        $soluongton = $_POST['soluongton'];
        if($anh_tail == 'png' || $anh_tail == 'jpg' || $anh_tail == 'jpeg')
        {
            move_uploaded_file($anh_temp,"../images/$anh");
        
            $query = "INSERT INTO sach(danhmucsach_id, tensach, tacgia, dichgia, congtyphathanh, nxb, kichthuoc, sotrang, loaibia, mota, gia, giakm, anh, soluongton) ";
            $query .= "VALUES({$danhmucsach_id},'{$tensach}','{$tacgia}','{$dichgia}','{$ctyphathanh}','{$nxb}','{$kichthuoc}',{$sotrang},'{$loaibia}','{$mota}',{$gia},{$giakm},'{$anh}',{$soluongton}) "; 
            
            $create_product_query = mysqli_query($connect,$query);

            if(!$create_product_query)
            {
                die("Query Failed!" . mysqli_error($connect));
            }

            $sach_id = mysqli_insert_id($connect);

            echo "<p class='bg-success text-danger text-center'> Product Created. <a href='../index.php?quanly=chitietsach&p_id=$sach_id'>Xem sản phẩm</a> or <a href='quanlysanpham.php'>View More Products</a></p>";
        }
        else
        {
            echo "<script>window.alert('Vui lòng chọn loại file jpg/png/jpeg!!!')</script>";
        }
    }
?>
<form action="" method="post" enctype="multipart/form-data">    
    <div class="form-group">
        <label for="tensach">Tên sách</label>
        <input type="text" class="form-control" name="tensach" id="tensach">
    </div>

    <div class="form-group">
        <label for="danhmucsach">Danh mục sách</label>
        <select class="form-control" name="danhmucsach" id="danhmucsach">
            <?php
                $query = "SELECT * FROM danhmucsach";
                $select_categories = mysqli_query($connect,$query);
                
                
                while($row = mysqli_fetch_assoc($select_categories))
                {
                    $danhmucsach_id = $row['danhmucsach_id'];
                    $danhmucsach_ten = $row['danhmucsach_ten'];
                    
                    echo "<option value='{$danhmucsach_id}'>{$danhmucsach_ten}</option>";
                }
            ?>
            
        </select>
    </div>

    <div class="form-group">
        <label for="tacgia">Tác giả</label>
        <input type="text" class="form-control" name="tacgia" id="tacgia">
    </div>
    
    
    <div class="form-group">
        <label for="dichgia">Dịch giả</label>
        <input type="text" class="form-control" name="dichgia" id="dichgia">
    </div>

    <div class="form-group">
        <label for="ctyphathanh">Công ty phát hành</label>
        <input type="text" class="form-control" name="ctyphathanh" id="ctyphathanh">
    </div>

    <div class="form-group">
        <label for="nxb">Nhà xuất bản</label>
        <input type="text" class="form-control" name="nxb" id="nxb">
    </div>

    <div class="form-group">
        <label for="kichthuoc">Kích thước</label>
        <input type="text" class="form-control" name="kichthuoc" id="kichthuoc">
    </div>

    <div class="form-group">
        <label for="ctyphathanh">Công ty phát hành</label>
        <input type="text" class="form-control" name="ctyphathanh" id="ctyphathanh">
    </div>

    <div class="form-group">
        <label for="sotrang">Số trang</label>
        <input type="text" class="form-control" name="sotrang" id="sotrang">
    </div>

    <div class="form-group">
        <label for="loaibia">Loại bìa</label>
        <input type="text" class="form-control" name="loaibia" id="loaibia">
    </div>
    
    <div class="form-group">
        <label for="summernote">Mô tả</label>
        <textarea class="form-control" name="mota" id="summernote" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="gia">Giá</label>
        <input type="text" class="form-control" name="gia" id="gia">
    </div>
    
    <div class="form-group">
        <label for="giakm">Giá khuyến mãi</label>
        <input type="text" class="form-control" name="giakm" id="giakm">
    </div>

    <div class="form-group">
        <label for="soluongton">Số lượng tồn</label>
        <input type="text" class="form-control" name="soluongton" id="soluongton">
    </div>

    <div class="form-group">
        <label for="anh">Ảnh</label><br>
        <input class="form-control" type="file" name="anh" id="anh">
    </div>
      
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_product" value="Create Product">
    </div>

</form>
    
        


