
<?php echo $this->Html->css(array('content', 'phantrang')); ?>
<div class="bor_content">
    <div class="div_dd">
        <ul>
 <!--<li><a href="<?php echo DOMAIN ?>san-pham.html"><?php echo __('quaylai'); ?></a></li>-->

        </ul>
    </div>
    <div class="div_content" style="float:left; width: 560px">
        <table cellpadding="5" cellspacing="10" style="margin-left:5px;margin-top:13px;width: 560px">
            <?php
            $i = 0;
            foreach ($listProduct as $row) {
                $i++;
                $image = 'img/product/' . $row['Product']['images'];
                //echo IMAGES_URL; die;
                if ($i == 1)
                    echo "<tr>";
                ?>
                <td>
                    <div class="div_sp">
                        <a href="<?php echo DOMAIN ?>chi-tiet-tin-tuc/<?php echo $row['Product']['id'] ?>/<?php echo $row['Product']['alias'] . '.html' ?>" >
                            <div  class="div_img" style="background:#fff url(<?php echo DOMAINAD ?>/timthumb.php?src=<?php echo $image; ?>&amp;h=150&amp;w=150&amp;zc=1) center no-repeat; width:167px; height:150px;">
                            </div>
                            <p style="width:160px;text-align:center; color:#000;width:160px; overflow:hidden;margin-top: 8px;"><?php echo $row['Product']['name'] ?>

                            </p>
                        </a>
                    </div>
                </td>
                <?php
                if ($i == 3) {
                    echo "</tr>";
                    $i = 0;  
                }
                ?>
            <?php } ?>
            <?php if ($i == 1) echo '<td colspan="3"></td></tr>'; ?>
<?php if ($i == 2) echo '<td colspan="2"></td></tr>'; ?>
<?php if ($i == 3) echo '<td colspan="1"></td></tr>'; ?>
        </table>
        <div class="pt">
            <div class="pt-pagi">
<?php echo $this->Paginator->numbers(); ?>
            </div><!-- End pt-pagi-->
        </div><!-- End pt-->	
    </div>
</div>


