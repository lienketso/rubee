  <?php 
//echo $this->Session->read('language'); die;
if($this->Session->read('language')=='vie') 
{  
  include('../Vendor/lang_vn.php');
  $duoi=null; 
} 
elseif($this->Session->read('language')=='chi') 
{  
  include('../Vendor/lang_chi.php');
  $duoi="_chi"; 
} 
else { $duoi="_eg"; include('../Vendor/lang_eng.php');
 }?>
<div class="boxmain" >


                        <div class="title_top_news_detail">
          SẢN PHẨM BÁN CHẠY
              
   </div>

 <?php
				$i=0;$mang=array();  
                foreach ($listProduct as $row1) {
				$images=explode('|',$row1['Product']['images']);
				$i++;$mang[$i]=$row1;
                    ?>

             <div class="tour">
			<figure class="fig1">
					<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">
                               <div class="prod">  
							   <div class="nhapnhay"><img src="<?php echo DOMAIN?>images/km1.gif"></div>
                     <img title="<?php echo $row1['Product']["name$duoi"]; ?>" alt="image" class="anh" src="<?php echo DOMAINAD ?><?php echo $row1['Product']['images'] ?>"  /><!--data-tooltip="sticky<?php echo $i?>"-->
					  </div>
					  </a>
				</figure>
				<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">	<p class="tieude_tour"><?php echo $row1['Product']['name'] ?></p></a>
				
				<p style="text-align:center;"><s><p class="gia1">Giá cũ :&nbsp; 
					<?php if($row1['Product']['priceold']){ ?>
					<?php echo number_format($row1['Product']['priceold']);?>&nbsp; VNĐ
					<?php } else {?>
					Liên hệ
					<?php }?>
					</p></s></p>
					<p class="gia">Giá KM : &nbsp;
					<?php if($row1['Product']['price']){ ?>
					<?php echo number_format($row1['Product']['price']);?>&nbsp; VNĐ
					<?php } else {?>
					Liên hệ
					<?php }?>
					</p>
					<p class="row-km"><?php echo $row1['Product']["quatang"]; ?></p>
				<!--	<a href="<?php echo DOMAIN?>them-vao-gio/<?php echo $row1['Product']['id']?>"><div class="btn_dattour">Đặt mua</div></a>-->
				</div>
			   <?php }  ?>
        

			
			  
       <!--end .new-equipment-->  <div class="pagination">
                        <?php
                         echo $this->Paginator->first('« Đầu ', null, null, array('class' => 'disabled'));     
                        echo $this->Paginator->prev('« Trước ', null, null, array('class' => 'disabled')); 
                        echo $this->Paginator->numbers() . " ";
                         echo $this->Paginator->next(' Tiếp »', null, null, array('class' => 'disabled')); 
                         echo $this->Paginator->last('« Cuối ', null, null, array('class' => 'disabled')); 
                        ?>
                    </div>
    </div>
	<div id="mystickytooltip" class="stickytooltip">
 
 	 <?php foreach($mang as $key=>$row1){
                    ?>
<div>
<div id="sticky<?php echo $key; ?>" class="atip">
	
	<p class="tieude_tour" style="margin-top:0px;height:30px;background:#c70003;color:white;line-height:30px;"><?php echo $row1['Product']['name'] ?></p>
<div class="stic_hover">	<p style="text-align:center;"><p class="gia1" style="text-align:left;">Giá cũ :&nbsp; 
					<?php if($row1['Product']['priceold']){ ?>
				<s>	<?php echo number_format($row1['Product']['priceold']);?>&nbsp; VNĐ</s>
					<?php } else {?>
					Liên hệ
					<?php }?>
					</p></p>
					<p class="gia" style="text-align:left;">Giá mới : &nbsp;
					<?php if($row1['Product']['price']){ ?>
					<?php echo number_format($row1['Product']['price']);?>&nbsp; VNĐ
					<?php } else {?>
					Liên hệ
					<?php }?>
					</p>
					<p><?php echo $row1['Product']["baohanh"]; ?></p>
					</div>
</div>
</div>
 <?php } ?>
</div>