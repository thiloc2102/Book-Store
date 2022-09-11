<?php
	if(isset($_GET['id_dm'])){
		$id_dm = $_GET['id_dm'];
	}else{
		$id_dm = '';
	}
	$select_danhmucsach = mysqli_query($connect,"SELECT * FROM danhmucsach WHERE danhmucsach_id='$id_dm'");	
	$select_sach = mysqli_query($connect,"SELECT * FROM sach WHERE danhmucsach_id='$id_dm' ORDER BY sach.sach_id DESC");		

	$row = mysqli_fetch_array($select_danhmucsach);
	$tendanhmuc = $row['danhmucsach_ten'];		
	?>
<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3" style="padding-top: 25px;" ><?php echo $tendanhmuc ?></h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-12">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<?php
								while($row_sach = mysqli_fetch_array($select_sach)){ 
								?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/<?php echo $row_sach['anh'] ?>"  width="200px" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="index.php?quanly=chitietsach&p_id=<?php echo $row_sach['sach_id'] ?>" class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="index.php?quanly=chitietsach&p_id=<?php echo $row_sach['sach_id'] ?>"><?php echo $row_sach['tensach'] ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format($row_sach['giakm']).'VNĐ' ?></span>
												<del><?php echo number_format($row_sach['gia']).'VNĐ' ?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="index.php?quanly=giohang" method="post">
												<fieldset>
													<input type="hidden" name="tensach" value="<?php echo $row_sach['tensach'] ?>" />
													<input type="hidden" name="sach_id" value="<?php echo $row_sach['sach_id'] ?>" />
													<input type="hidden" name="giakm" value="<?php echo $row_sach['giakm'] ?>" />
													<input type="hidden" name="anh" value="<?php echo $row_sach['anh'] ?>" />
													<input type="hidden" name="soluong" value="1" />			
													<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" style="background:#F6C"/>
												</fieldset>
											</form>
											</div>
										</div>
									</div>
								</div>
								<?php
								} 
								?>
							</div>
						</div>
						<!-- //first section -->
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<!-- <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Brand</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Search Brand..." name="search" required="">
								<input type="submit" value=" ">
							</form>
							<div class="left-side py-2">
								<ul>
									<li>
										<input type="checkbox" class="checked">
										Son Dưỡng<span class="span"></span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Son Kem</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Son Thỏi</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
									<span class="span">Skincare</span></li>
									<li>
									  <input type="checkbox" class="checked" />
									  Eyeliner
									</li>
								</ul>
							</div>
						</div> -->
						<!-- ram -->
						<!-- <div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Quốc gia</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									Hàn Quốc
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Mỹ </span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									Pháp
								</li>
								<li>
									<input type="checkbox" class="checked">
									Trung Quốc
								</li>
								<li>
									<input type="checkbox" class="checked">
								<span class="span">Việt Nam</span></li>
							</ul>
						</div> -->
						<!-- //ram -->
						<!-- price -->
						<!-- <div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá cả</h3>
							<div class="w3l-range">
								<ul>
									<li><a href="#">Dưới 200.000</a></li>
									<li class="my-1">
										<a href="#">$200.000-500.000</a>
									</li>
									<li>
										<a href="#">$500.000 - $1.000.000</a>
									</li>
									<li class="my-1">
									<a href="#">Trên 1.000.000</a></li>
								</ul>
							</div>
						</div> -->
						<!-- //price -->
						<!-- discounts -->
						<!-- <div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Sales</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Từ 5%</span>
								trở lên</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Từ 10%</span>
								trở lên</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Từ 20%</span>
								trở lên</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Từ 30% </span>
								trở lên</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Từ 50% </span>
								trở lên</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Từ 60% </span>
								trở lên</li>
							</ul>
						</div> -->
						<!-- //discounts -->
						<!-- offers -->
						<!-- <div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Ưu Đãi</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Phiếu mua hàng</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									Miễn phí giao hàng<span class="span"></span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Giá tốt</span>
								</li>
							</ul>
						</div> -->
						<!-- //offers -->
						<!-- delivery -->
						<!-- <div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Thanh toán khi giao hàng</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									Ship COD
								</li>
							</ul>
						</div> -->
						<!-- //delivery -->
						<!-- arrivals -->
						<!-- <div class="left-side py-2">
						  <h3 class="agileits-sear-head mb-3">Tiện ích</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									Loại bỏ những mặt hàng đã hết
								</li>
							</ul>
						</div> -->
						<!-- //arrivals -->
					<!-- </div> -->
					<!-- //product right -->
				<!-- </div> -->
			</div>
		</div>
	</div>
	<!-- //top products -->