<?php
	if(isset($_GET['p_id'])){
		$sach_id = $_GET['p_id'];
	}else{
		$sach_id = '';
	}

    $sql_chitietsach = mysqli_query($connect,"SELECT * FROM sach WHERE sach_id='$sach_id'"); 
?>
<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php"><b>Trang chủ</b></a>
						<i>|</i>
					</li>
					<li><?php
                        $sql_tensach = mysqli_query($connect,"SELECT tensach FROM sach WHERE sach_id='$sach_id'");
                        while($row_sach = mysqli_fetch_array($sql_tensach))
                        {
                            echo $row_sach['tensach'];
                        }
                    ?></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<?php
	while($row = mysqli_fetch_array($sql_chitietsach)){ 
	?>
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/<?php echo $row['anh'] ?>">
									<div class="thumb-image">
										<img src="images/<?php echo $row['anh'] ?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
							
								
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $row['tensach'] ?></h3>
					<p class="mb-3">
						<span class="item_price"><?php echo number_format($row['giakm']).'VNĐ' ?></span>
						<del class="mx-2 font-weight-light"><?php echo number_format($row['gia']).'VNĐ' ?></del>
						<label></label>
                        <ul class="product-single-w3l info">
                            <p class="text-center"><b>THÔNG TIN CHUNG</b></p>
                            <li>Tác giả: <?php echo $row['tacgia']; ?></li>
                            <li>Dịch giả: <?php echo $row['dichgia']; ?></li>
                            <li>Công ty phát hành: <?php echo $row['congtyphathanh']; ?></li>
                            <li>NXB: <?php echo $row['nxb']; ?></li>
                            <li>Kích thước: <?php echo $row['kichthuoc']; ?></li>
                            <li>Số trang: <?php echo $row['sotrang']; ?></li>
                            <li>Loại bìa: <?php echo $row['loaibia']; ?></li>
                            <!-- <li>Đã bán: <?php //echo $row['soluongdaban']; ?></li> -->
                        </ul>
					</p>
					
					<div class="product-single-w3l">
                        <p class="text-center"><b>MÔ TẢ</b></p>
						<p><?php echo $row['mota'] ?></p><br><br>
						<p><?php //echo $row_chitiet['sanpham_mota'] ?></p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="index.php?quanly=giohang" method="post">
								<fieldset>
									<input type="hidden" name="tensach" value="<?php echo $row['tensach'] ?>" />
									<input type="hidden" name="sach_id" value="<?php echo $row['sach_id'] ?>" />
									<input type="hidden" name="giakm" value="<?php echo $row['giakm'] ?>" />
									<input type="hidden" name="anh" value="<?php echo $row['anh'] ?>" />
									<input type="hidden" name="soluong" value="1" />			
									<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
            <hr>
            <!-- Comments Form -->
            <div class="well info">
                <h4>PHẢN HỒI</h4>
                <form action="#" method="post" role="form">
                    <div class="form-group">
                        <label for="Author">Họ tên</label>
                        <input type="text" name="comment_author" class="form-control" name="comment_author">
                    </div>

                    <div class="form-group">
                        <label for="Author">Email</label>
                        <input type="email" name="comment_email" class="form-control" name="comment_email">
                    </div>

                    <div class="form-group">
                        <label for="comment">Bình luận</label>
                        <textarea name="comment_content" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" name="create_comment" class="btn btn-primary">Bình Luận</button>
                </form>
            </div>

            <hr>
        </div>
	</div>

	<!-- //Single Page -->
	<?php
	} 
	?>