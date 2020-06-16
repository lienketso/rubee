<link type="text/css" href="<?php echo DOMAIN ?>css/phantrang.css" rel="stylesheet" />
<div id="main">
    <div id="product-views" style="padding-bottom:5px; padding-top: 15px; margin-left: 8px; width: 554px;overflow: hidden;">
        <h2 class="style_h2"> </b> <span> <?php echo __('sanphamtimthay'); ?></span></h2>
        <ul>
            <?php foreach ($products as $productview): ?>
            <li style="  padding-left: 10px;margin-top: 40px;overflow: hidden; width: 174px; float:left; height: 160px; ">
                    <?php if ($productview['Product']['images'] != '') { ?>
                <img style="height: 115px;width: 160px;"src="<?php echo DOMAINAD . $productview['Product']['images']; ?>"  alt="<?php echo $productview['Product']['name'] ?>"/>
                    <?php } else {
                        ?>
                        <div class="style_img"></div>
                    <?php } ?> 
                    <h1 class="style_h1" style="font-size: 14px;text-align: center;"> 
                        <a href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $productview['Product']['id'] ?>">
                            <?php echo strip_tags($this->Text->truncate($productview['Product']['name'], 20, array('ending' => '...', 'exact' => false))); ?></a></h1>
<!--                    <h4 style="font-weight:bold; color:#cacaca;float:left"/>-->
<!--                    <span style="float:left"/> -->
                            <!--Giá: </span><span style="color:#FF5E24; float:left;"><?php echo $productview['Product']['price']; ?></span></h4>--> 
                </li>
            <?php endforeach; ?> 

        </ul>

        <p style="margin-left:658px; line-height:0px; padding:0px; margin-top:10px;"><input type="button" value=" Quay lai " onclick="javascript: window.back();" style="float:left;"></p>           
</div>
    <div class="pagination" style="text-align: center; float:right; margin-right: 20px;">
        <?php
        // echo $this->Paginator->first('« Đầu ', null, null, array('class' => 'disabled'));     
        //echo $this->Paginator->prev('« Trước ', null, null, array('class' => 'disabled')); 
        echo $this->Paginator->numbers() . " ";
        // echo $this->Paginator->next(' Tiếp »', null, null, array('class' => 'disabled')); 
        // echo $this->Paginator->last('« Cuối ', null, null, array('class' => 'disabled')); 
        ?>
    </div>
</div>
 
    
