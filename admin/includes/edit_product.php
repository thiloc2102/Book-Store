<?php
    if(isset($_GET['p_id']))
    {
        $sach_id = $_GET['p_id'];
    }

    $query = "SELECT * FROM sach WHERE sach_id = {$sach_id}";
    $select_sach_by_id = mysqli_query($connect,$query);

    if(!$select_sach_by_id)
    {
        die("Query Failed!" . mysqli_error($connect));
    }

    while($row = mysqli_fetch_assoc($select_sach_by_id))
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
    }

    if(isset($_POST['update_product']))
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
        $soluongdaban = $_POST['soluongdaban'];
        $soluotbinhluan = $_POST['soluotbinhluan'];
        $soluotxem = $_POST['soluotxem'];
        if($anh_tail == 'png' || $anh_tail == 'jpg' || $anh_tail == 'jpeg')
        {
            move_uploaded_file($anh_temp, "../images/$anh"); 
        
            if(empty($anh)) 
            {
                $query = "SELECT * FROM sach WHERE sach_id = $sach_id ";
                $select_image = mysqli_query($connect,$query);    
                while($row = mysqli_fetch_array($select_image)) 
                {
                    $anh = $row['anh'];
                }
            }

            $query = "UPDATE sach SET ";
            $query .="tensach='{$tensach}', ";
            $query .="danhmucsach_id = '{$danhmucsach_id}', ";
            $query .="tacgia   =  '{$tacgia}', ";
            $query .="dichgia   =  '{$dichgia}', ";
            $query .="congtyphathanh   =  '{$ctyphathanh}', ";
            $query .="nxb   =  '{$nxb}', ";
            $query .="kichthuoc   =  '{$kichthuoc}', ";
            $query .="sotrang   =  {$sotrang}, ";
            $query .="loaibia   =  '{$loaibia}', ";
            $query .="mota   =  '{$mota}', ";
            $query .="gia = {$gia}, ";
            $query .="giakm = {$giakm}, ";
            $query .="anh   = '{$anh}', ";
            $query .="soluongton   =  {$soluongton}, ";
            $query .="soluongdaban   =  {$soluongdaban}, ";
            $query .="soluotbinhluan   =  {$soluotbinhluan}, ";
            $query .="soluotxem   =  {$soluotxem} ";
            $query .= "WHERE sach_id = {$sach_id} ";

            $update_product = mysqli_query($connect,$query);

            if(!$update_product) 
            {
                die("Query Failed!" . mysqli_error($connect));
            }

            echo "<p class='bg-success text-danger text-center'> S???n ph???m ???? ???????c c???p nh???t th??nh c??ng! <a href='../index.php?quanly=chitietsach&p_id=$sach_id'>Xem s???n ph???m</a> or <a href='quanlysanpham.php'>Edit More Products</a></p>";
        }
        else
        {
            echo "<script>window.alert('Vui l??ng ch???n lo???i file jpg/png/jpeg!!!')</script>";
        }
    }
?>
<form action="" method="post" enctype="multipart/form-data">    
    <div class="form-group">
        <label for="tensach">T??n s??ch</label>
        <input value="<?php echo $tensach; ?>" type="text" class="form-control" name="tensach" id="tensach">
    </div>

    <div class="form-group">
        <label for="danhmucsach">Danh m???c s??ch</label>
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
        <label for="tacgia">T??c gi???</label>
        <input value="<?php echo $tacgia; ?>" type="text" class="form-control" name="tacgia" id="tacgia">
    </div>
    
    
    <div class="form-group">
        <label for="dichgia">D???ch gi???</label>
        <input value="<?php echo $dichgia; ?>" type="text" class="form-control" name="dichgia" id="dichgia">
    </div>

    <div class="form-group">
        <label for="ctyphathanh">C??ng ty ph??t h??nh</label>
        <input value="<?php echo $ctyphathanh; ?>" type="text" class="form-control" name="ctyphathanh" id="ctyphathanh">
    </div>

    <div class="form-group">
        <label for="nxb">Nh?? xu???t b???n</label>
        <input value="<?php echo $nxb; ?>" type="text" class="form-control" name="nxb" id="nxb">
    </div>

    <div class="form-group">
        <label for="kichthuoc">K??ch th?????c</label>
        <input value="<?php echo $kichthuoc; ?>" type="text" class="form-control" name="kichthuoc" id="kichthuoc">
    </div>

    <div class="form-group">
        <label for="ctyphathanh">C??ng ty ph??t h??nh</label>
        <input value="<?php echo $ctyphathanh; ?>" type="text" class="form-control" name="ctyphathanh" id="ctyphathanh">
    </div>

    <div class="form-group">
        <label for="sotrang">S??? trang</label>
        <input value="<?php echo $sotrang; ?>" type="text" class="form-control" name="sotrang" id="sotrang">
    </div>

    <div class="form-group">
        <label for="loaibia">Lo???i b??a</label>
        <input value="<?php echo $loaibia; ?>" type="text" class="form-control" name="loaibia" id="loaibia">
    </div>
    
    <div class="form-group">
        <label for="summernote">M?? t???</label>
        <textarea class="form-control" name="mota" id="summernote" cols="30" rows="10"><?php echo $mota; ?></textarea>
    </div>

    <div class="form-group">
        <label for="gia">Gi??</label>
        <input value="<?php echo $gia; ?>" type="text" class="form-control" name="gia" id="gia">
    </div>
    
    <div class="form-group">
        <label for="giakm">Gi?? khuy???n m??i</label>
        <input value="<?php echo $giakm; ?>" type="text" class="form-control" name="giakm" id="giakm">
    </div>

    <div class="form-group">
        <label for="soluongton">S??? l?????ng t???n</label>
        <input value="<?php echo $soluongton; ?>" type="text" class="form-control" name="soluongton" id="soluongton">
    </div>

    <div class="form-group">
        <label for="soluongdaban">S??? l?????ng ???? b??n</label>
        <input value="<?php echo $soluongdaban; ?>" type="text" class="form-control" name="soluongdaban" id="soluongdaban">
    </div>

    <div class="form-group">
        <label for="soluotbinhluan">S??? l?????t b??nh lu???n</label>
        <input value="<?php echo $soluotbinhluan; ?>" type="text" class="form-control" name="soluotbinhluan" id="soluotbinhluan">
    </div>

    <div class="form-group">
        <label for="soluotxem">S??? l?????t xem</label>
        <input value="<?php echo $soluotxem; ?>" type="text" class="form-control" name="soluotxem" id="soluotxem">
    </div>

    <div class="form-group">
        <label for="anh">???nh</label><br>
        <img width="150" src="../images/<?php echo $anh; ?>">
        <input type="file" name="anh" id="anh">
    </div>
      
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_product" value="Update Product">
    </div>

</form>