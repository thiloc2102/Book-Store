<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Danh mục sản phẩm</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-12">
					<div class="wrapper">
						<?php
						$sql_danhmucsach = mysqli_query($connect,"SELECT * FROM danhmucsach ORDER BY danhmucsach_id");
						while($row_danhmucsach = mysqli_fetch_array($sql_danhmucsach)){
							$danhmucsach_id = $row_danhmucsach['danhmucsach_id'];
						?>
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic"><?php echo $row_danhmucsach['danhmucsach_ten'] ?></h3>
							<div class="row">
								<?php
								$sql_sach = mysqli_query($connect,"SELECT * FROM sach ORDER BY sach_id DESC limit 2");
								while($row_sach = mysqli_fetch_array($sql_sach)){ 
									if($row_sach['danhmucsach_id']==$danhmucsach_id){
								?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/<?php echo $row_sach['anh'] ?>" alt="">
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
												<form action="?quanly=giohang" method="post">
												<fieldset>
													<input type="hidden" name="tensach" value="<?php echo $row_sach['tensach'] ?>" />
													<input type="hidden" name="sach_id" value="<?php echo $row_sach['sach_id'] ?>" />
													<input type="hidden" name="gia" value="<?php echo $row_sach['gia'] ?>" />
													<input type="hidden" name="anh" value="<?php echo $row_sach['anh'] ?>" />
													<input type="hidden" name="soluong" value="1" />			
													<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
												</fieldset>
											</form>
											</div>
										</div>
									</div>
								</div>
								<?php
									}
								} 
								?>
							</div>
						</div>
						<!-- //first section -->
							<?php
							} 
							?>
						
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<!-- <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm kiếm</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Sản phẩm..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div> -->
						<!-- price -->
						<!-- <div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="#">Dưới 1 triệu</a>
									</li>
									
								</ul>
							</div>
						</div> -->
						<!-- //price -->
						
						<!-- reviews -->
						<!-- <div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Khách hàng Review</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
								
							</ul>
						</div> -->
						<!-- //reviews -->
						<!-- electronics -->
						<!-- <div class="left-side border-bottom py-2">

							<h3 class="agileits-sear-head mb-3">Danh mục sản phẩm</h3>
							<ul>
								<?php 
									// $sql_category_sidebar = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
									// while($row_category_sidebar = mysqli_fetch_array($sql_category_sidebar)){
								?>
								<li>
									<input type="checkbox" class="checked">
									<span class="span"><a href="danhmucsanpham.php?id=<?php echo $row_category_sidebar['category_id'] ?>"><?php echo $row_category_sidebar['category_name'] ?></a></span>
								</li>
								<?php
								//} 
								?>
							</ul>
						</div> -->
						<!-- //electronics -->
					
						
						<!-- best seller -->
						<!-- <div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
							<div class="box-scroll">
								<div class="scroll"> -->
									<?php
									// $sql_product_sidebar = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_hot='0' ORDER BY sanpham_id DESC"); 
									// while($row_sanpham_sidebar = mysqli_fetch_array($sql_product_sidebar)){
									?>
									<!-- <div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/<?php echo $row_sanpham_sidebar['sanpham_image'] ?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href=""><?php echo $row_sanpham_sidebar['sanpham_name'] ?></a>
											<a href="" class="price-mar mt-2"><?php echo number_format($row_sanpham_sidebar['sanpham_giakhuyenmai']).'vnđ' ?></a>
											<del><?php echo number_format($row_sanpham_sidebar['sanpham_gia']).'vnđ' ?></del>
										</div>
									</div> -->
									<?php
									//} 
									?>
									
									
								<!-- </div>
							</div>
						</div> -->
						<!-- //best seller -->
					<!-- </div> -->
					<!-- //product right -->
				<!-- </div> -->
			</div>
		</div>
	</div>
	<!-- //top products -->
