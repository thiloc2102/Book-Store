<?php 
	$select_danhmucsach = mysqli_query($connect,'SELECT * FROM danhmucsach ORDER BY danhmucsach_id DESC');
?>
<div class="navbar-inner">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="agileits-navi_search">
				<form action="#" method="post">
					<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
						<option value="">Danh mục sách</option>
						<?php
							while($row_danhmucsach = mysqli_fetch_array($select_danhmucsach)) {
						?>
							<option value="<?php echo $row_danhmucsach['danhmucsach_id'] ?>"><?php echo $row_danhmucsach['danhmucsach_ten'] ?></option>
						<?php
							}
						?>
					</select>
				</form>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto text-center mr-xl-5">
					<li class="nav-item active mr-lg-5 mb-lg-0 mb-2">
						<a class="nav-link" href="index.php"><b>Trang chủ</b>
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<?php 
						$sql_category_danhmuc = mysqli_query($connect,'SELECT * FROM danhmucsach ORDER BY danhmucsach_id DESC');
						while($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)){
					?>
					<li class="nav-item active mr-lg-5 mb-lg-0 mb-2">

						<a class="nav-link " href="index.php?quanly=danhmuc&id_dm=<?php echo $row_category_danhmuc['danhmucsach_id'] ?>" role="button"  aria-haspopup="true" aria-expanded="false">
							<?php echo '<b>'.$row_category_danhmuc['danhmucsach_ten'].'</b>' ?>
						</a>
						
					</li>
					<?php
						} 
					?>
					
					<!-- //footer first section <li class="nav-item">
					<a class="nav-link" href="contact.html">Liên hệ</a>
					</li>	-->			
					</ul>
			</div>
		</nav>
	</div>
	</div>
	<!-- //navigation -->