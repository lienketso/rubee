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
          SẢN PHẨM NỔI BẬT
              
   </div>

 <?php
			
                foreach ($listProduct as $row1) {
				$images=explode('|',$row1['Product']['images']);
			
                    ?>

            <div class="tour">
			<figure class="fig1">
					<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">
                               <div class="prod">  
							   <div class="nhapnhay"></div>
                     <img width="210" height="168" title="<?php echo $row1['Product']["name$duoi"]; ?>" alt="image" class="anh" src="<?php echo DOMAINAD ?><?php echo $row1['Product']['images'] ?>" /><!--data-tooltip="sticky<?php echo $i?>"-->
					  </div>
					  </a>
				</figure>
				<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">	<p class="tieude_tour"><?php echo $row1['Product']['name'] ?></p></a>

					<p class="gia">Giá : &nbsp;
					<?php if($row1['Product']['price']){ ?>
					<?php echo number_format($row1['Product']['price']);?>&nbsp; VNĐ
					<?php } else {?>
					Liên hệ
					<?php }?>
					</p>
	<p style="text-align:center;"><a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>"><img src="<?php echo DOMAIN?>images/btn_chitiet.jpg"></a></p>
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
	