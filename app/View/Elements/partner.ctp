<div class="row-bottom">
	<div class="row-footer">
		<h3>Giới thiệu chung</h3>
			<?php  
				$product = $this->requestAction('comment/tinchung');
                foreach ($product as $row1) {
				?>
		<p><a href="<?php echo DOMAIN?>chi-tiet-tin/<?php echo $row1['Tintuc']["id"]; ?>/<?php echo $row1['Tintuc']["alias"]; ?>"><?php echo $row1['Tintuc']["name"]; ?></a></p>
	<?php } ?>
	</div>
	<div class="row-footer">
		<h3>Tin tức</h3>
		<?php  
				$product = $this->requestAction('comment/tinchung1');
                foreach ($product as $row1) {
				?>
		<p><a href="<?php echo DOMAIN?>chi-tiet-tin/<?php echo $row1['Tintuc']["id"]; ?>/<?php echo $row1['Tintuc']["alias"]; ?>"><?php echo $row1['Tintuc']["name"]; ?></a></p>
	<?php } ?>
	</div>
	<div class="row-footer">
		<h3>Bếp gas</h3>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
	</div>
	<div class="row-footer">
		<h3>Bếp điện - Bếp từ</h3>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
	</div>
	<div class="row-footer" style="margin-right:0px;">
		<h3>Máy hút mùi</h3>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
		<p><a href="<?php echo DOMAIN?>">Liên hệ</a></p>
	</div>
</div>