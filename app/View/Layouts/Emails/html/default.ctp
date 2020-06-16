    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
    <html>
    <body>
		<h3>Thông tin được gửi từ website rubee.com.vn</h3><br />
		Họ tên : <?php echo $name; ?><br />
			<?php if(isset($gioitinh)) {?>
		Giới tính : <?php echo $gioitinh; ?><br />
		<?php }?>
		<?php if(isset($ngaysinh)) {?>
		Ngày sinh : <?php echo $ngaysinh; ?><br />	<?php }?>
		<?php if(isset($phone)) {?>
		Điện thoại : <?php echo $phone; ?><br />	<?php }?>
		<?php if(isset($address)) {?>
		Địa chỉ : <?php echo $address; ?><br /><?php }?>
		Email :  <?php echo $email; ?><br />
			<?php if(isset($totnghieptruong)) {?>
		Tốt nghiệp trường :  <?php echo $totnghieptruong; ?><br />	<?php }?>
			<?php if(isset($namtotnghiep)) {?>
		Năm tốt nghiệp :  <?php echo $namtotnghiep; ?><br />	<?php }?>
			<?php if(isset($dangky)) {?>
		Đăng ký :  <?php echo $dangky; ?><br />	<?php }?>
		
		Tiêu đề : <?php echo $title; ?><br />
		Nội dung : <?php echo $content1; ?><br />
    </body>
    </html>
