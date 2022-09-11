<?php
    if(!isset($_SESSION['username']))
    {
        echo '<script>
                location.href = "./index.php";
            </script>';
    }
?>  

<!-- checkout page -->
<!-- <div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2"> -->
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				Giỏ hàng của bạn
			</h3>
				
			<!-- //tittle heading -->


				<div class="table-responsive">
					<form action="" method="POST">
					
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Thứ tự</th>
								<th>Sản phẩm</th>
								<th>Số lượng</th>
								<th>Tên sản phẩm</th>

								<th>Giá</th>
								<th>Giá tổng</th>
								<th>Quản lý</th>
							</tr>
						</thead>
						<tbody>
						
							<tr class="rem1">
								<td class="invert"></td>
								<td class="invert-image">
									<a href="single.html">
										<img src="images/" alt=" " height="120" class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<input type="hidden" name="product_id[]" value="">
									<input type="number" min="1" name="soluong[]" value="">
								
									
								</td>
								<td class="invert"></td>
								<td class="invert"></td>
								<td class="invert"></td>
								<td class="invert">Xóa</a>
								</td>
							</tr>
						
							<tr>
								<td colspan="7">Tổng tiền :</td>

							</tr>
							<tr>
								<td colspan="7"><input type="submit" class="btn btn-success" value="Cập nhật giỏ hàng" name="capnhatsoluong">
								
								<input type="hidden" name="thanhtoan_product_id[]" value="">
								<input type="hidden" name="thanhtoan_soluong[]" value="">

								<input type="submit" class="btn btn-primary" value="Thanh toán giỏ hàng" name="thanhtoandangnhap">
		

								
								</td>
							
							</tr>
						</tbody>
					</table>
					</form>
				</div>
			</div>
<!-- 
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Thêm địa chỉ giao hàng</h4>
					<form action="" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Điền tên" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Số phone" name="phone" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Địa chỉ" name="address" required="">
											</div>
										</div>
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Email" name="email" required="">
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Password" name="password" required="">
									</div>
									<div class="controls form-group">
										<textarea style="resize: none;" class="form-control" placeholder="Ghi chú" name="note" required=""></textarea>  
									</div>
									<div class="controls form-group">
										<select class="option-w3ls" name="giaohang">
											<option>Chọn hình thức giao hàng</option>
											<option value="1">Thanh toán ATM</option>
											<option value="0">Nhận tiền tại nhà</option>
											

										</select>
									</div>
								</div>
								
									<input type="hidden" name="thanhtoan_product_id[]" value="">
									<input type="hidden" name="thanhtoan_soluong[]" value="">
								
								<input type="submit" name="thanhtoan" class="btn btn-success" style="width: 20%" value="Thanh toán">
								
							</div>
						</div>
					</form>
					
				</div>
			</div>
			
			-->
			
		</div>
	</div>
	<!-- //checkout page -->