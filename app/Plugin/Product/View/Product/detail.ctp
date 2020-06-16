<?php echo $this->Html->css(array('content', 'phantrang')); ?>
<base href="<?php echo DOMAIN ?>"/>
<div class="title_tintuc"><p>Chi tiết sản phẩm</p></div>
<div class="boxmain" style=" overflow:hidden;padding-bottom: 40px;width: 725px;float:left">

  <li><a href="<?php echo DOMAIN ?>san-pham/<?php echo $typeName['Catproduct']['id'] . '/' . $typeName['Catproduct']['slug'] . '.html' ?>">
                <p style="color:#4C0303; padding-left: 25px;
padding-top: 20px;font-size:14px;font-weight:bold"><?php echo $typeName['Catproduct']['name'] ?></p></a></li><br/>

        <div class="div_content">
        <div class="ctsp">
            <div class="ct_left" style="padding-left: 15px; overflow: hidden;width: 705px;">
              <p style="color:#4C0303; padding-bottom: 20px;font-size:14px;font-weight:bold"><?php echo $detailNews['Product']['name'] ?></p>
 	<img src="<?php echo IMAGEAD; ?>product/<?php echo $detailNews['Product']['images']; ?>" width="167" height="130" style="padding:8px;background:white;float:left" />
 <div class="p_duoi"> <font><?php echo $detailNews['Product']['content']; ?></font></div>
		   </div>
		    <p style="color:#818181;">
					<?php echo $detailNews['Product']['saleoff'] ?><a href="<?php echo DOMAIN?>them-vao-gio/<?php echo $detailNews['Product']['id']?>">
						<img  style="width:25px; height:25px;"src="<?php echo DOMAIN?>images/cart.png"/>
					</a>
				 </p>
        </div><br/><br/><div style="width:500px;margin:auto"><hr></hr></div>
        <div class="div_title" style="margin-left: 15px; overflow: hidden">
            <p style="color: blue">
                <br/>
                Sản phẩm cùng seri :
            </p>
        </div>
        <table width="100%" cellpadding="5" cellspacing="10" style="margin-left:7px;margin-top:5px;">
            <?php
            $i = 0;
            foreach ($listProduct as $row) {
                $i++;
                $image = 'img/product/' . $row['Product']['images'];
                //echo IMAGES_URL; die;
                if ($i == 1)
                    echo "<tr>";
                ?>
                <td style="width: 170px;">
                    <div class="div_sp">
                            <!--   <div  class="div_img" style="background:#fff url(<?php echo DOMAINAD ?>/timthumb.php?src=<?php echo $image; ?>&amp;h=150&amp;w=150&amp;zc=1) center no-repeat; width:167px; height:130px;">
                            </div>-->
							<div class="div_img" >
                <a href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row['Product']['id'] ?>/<?php echo $row['Product']['slug'] . '.html' ?>" >
                    
						<img src="<?php echo IMAGEAD; ?>product/<?php echo $row['Product']['images']; ?>" width="167" height="130" style="padding:8px;background:white" />
                  </a>
						</div>
                            <p style="text-align:center; color:#000;overflow:hidden;padding-top: 10px;"><?php echo $row['Product']['name'] ?>

                            </p>
                 
                    </div>
                </td>
                <?php if ($i == 4) echo "</tr>"; ?>
            <?php } ?>
            <?php if ($i == 1) echo '<td colspan="3"></td></tr>'; ?>
            <?php if ($i == 2) echo '<td colspan="2"></td></tr>'; ?>
<?php if ($i == 3) echo '<td colspan="1"></td></tr>'; ?>

        </table>
            <li style="text-align: right; margin-right: 10px;"><a style="padding-right:20px"href="Javascript: history.back(-1);">« Quay lại</a></li>     
        <div class="pt">
            <div class="pt-pagi">
<?php echo $this->Paginator->numbers(); ?>
            </div><!-- End pt-pagi-->
        </div><!-- End pt-->	
    </div>	
</div>




