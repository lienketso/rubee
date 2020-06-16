
<?php echo $this->Html->css(array('content', 'phantrang')); ?>
<?php echo $this->Html->script('jquery.lightbox-0.5'); ?>
<?php echo $this->Html->css('jquery.lightbox-0.5'); ?>
<script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
</script>
<base href="<?php echo DOMAIN ?>"/>
<div class="bor_content">
    <div class="div_dd">
        <ul style="overflow: hidden; width: 165px; height: 30px;background: url(../images/bg_menu_left.png) repeart-x;"> 
            <br/><br/>
            <li><a href="<?php echo DOMAIN ?>danh-sach-tin-tuc/<?php echo $typeName['Product']['id'] . '/' . $typeName['Product']['slug'] . '.html' ?>">
                    <?php echo $typeName['Product']['name'] ?></a></li>

        </ul>
    </div>
    <div class="div_content"><ul>
            <?php
            //$cat = $this->requestAction('product/getproduct');
            foreach ($cat as $row) {
                ?>
            <li style="width: 180px;overflow: hidden;float: left;margin-top: 10px"><a href="<?php echo DOMAIN ?>danh-sach-tin-tuc/<?php echo $row['Product']['id'] ?>"/>  
                <img style="width: 150px; height: 120px"src="<?php echo IMAGEAD; ?>product/<?php echo $row['Product']['images']; ?>" /><br/>
                <div style="text-align: center;"><?php echo $row['Product']['name'] ?></div></a>
            
                </li>    
                
<?php } ?>
        </ul>     

    </div>

</div>




