<?php echo $this->Html->css(array('content', 'phantrang')); ?>
<div class="title_tintuc"><p>Sản phẩm</p></div>
<div class="boxmain" style="background: #DBDBDB; overflow:hidden;padding-bottom: 40px;margin-top:6px;padding-top: 20px;">

    <div class="div_content" >
         <?php
    $product = $this->requestAction('comment/catproduct');
    //pr($product); die;
    foreach ($product as $row) {
        ?>
        <div class='new-equipment' style="overflow: hidden;width: 100%;">
            <div class="title_">
                <div class="main">
					<div class="title_tintuc1"><p><?php echo $row['Catproduct']['name'] ?></p></div>
             
                    <div class="title_top_news_detail4"></div>
                </div>
</div>
                <?php
                $product1 = $this->requestAction('comment/getProduct/' . $row['Catproduct']['id']);
                //pr($product); die;
                foreach ($product1 as $row1) {
                    ?>
                    <div class="product">
                        <a href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>">
                            <!--                            <div class="div_img">
                            <?php if ($row1['Product']['images'] != '') { ?>
                                                                    <img style= "width:145px; height:115px;padding-left: 12px"src="<?php echo DOMAINAD . $row1['Product']['images'] ?>" alt=""/>
                            <?php } else { ?>
                                                                    <img style= "width:145px; height:115px;padding-left: 12px"src="<?php echo DOMAIN . 'images/sp1.png'; ?>" alt=""/>
                            <?php } ?>
                                                        </div>-->
                            <div class="div_img">

                                <img src="<?php echo IMAGEAD ?>product/<?php echo $row1['Product']['images'] ?>"/>
                            </div>
                        </a>
                        <p><?php echo $row1['Product']['name'] ?></p>
                    </div>
                <?php } ?>
                <div class="clear"></div>
            </div>	    <?php } ?>
			  
        </div><!--end .new-equipment--> <div class="pt">
            <div class="pt-pagi">
                <?php echo $this->Paginator->numbers(); ?>
            </div><!-- End pt-pagi-->
        </div>
    </div>
