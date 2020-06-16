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
<style>
    #pvt_divClick{width: 100%;float: left; }
    #pvt_divClick ul.pvt_header{}
    #pvt_divClick ul.pvt_header li{}
    #pvt_divClick ul.pvt_header li:hover{cursor: pointer; color: #ff6666;}

    .active{}
    #pvt_tableCompePrice{width: 100%;}
    #pvt_tableCompePrice tr{display: block;}
    #pvt_tableCompePrice tr td{padding: 3px;}
    #pvt_tableCompePrice tr td p{margin: 2px 0px;}
    .pvt_view{background: url("images/backgroundXem.jpg") repeat-x; border-radius: 5px; padding: 5px;}
    .pvt_name{color: #605D57; font-weight: bold;}
    .pvt_name:hover{color: #ff6600; }
    .pvt_price{color: red; font-size: 12px; font-weight: bold;}
    .update{color: #9f9f9f; font-size: 12px;}
    .pvt_contentName{font-size: 13px; color: #362b36;}
    .clear{clear: both;}
    #pvt_left{width: 19.5%; float: right; border-top: 5px solid #cccccc; border: 1px solid #cccccc; }
    #pvt_left h3{margin: 0px;}
    #pvt_left ul{padding: 0px; margin: 0px;}
    #pvt_left ul li{list-style: none; padding: 0px; margin: 0px;}
    #pvt_left ul li img{width: 40%; float: left;}
    .pvt_contentLeft{width: 60%; float: right;}
    .pvt_contentLeft p{margin: 0px;}
</style>
<script type="text/javascript">
    $(function(){
        //ẩn hết các content
        $(".content").hide();
        $(".activeDiv").show(1000);

        $(".pvt_compe").click(function(){
            //chuyển tap li
            $(".pvt_compe").each(function(){
                $(this).removeClass("active");
            })
            $(this).addClass("active");


            $(".content").hide();
            stt = $(this).attr("stt");
            $(".content").each(function(){

                if($(this).attr("sttdiv")==stt){
                    $(this).fadeIn(1000);
                }

            });
        });
    });
</script>
<?php
		
    $setting = $this->requestAction('comment/settingcat');
	?>
	<div class="danhsach">
	
		 <div id="pvt_divClick">
        <ul class="pvt_header">
            <li stt="1" class="pvt_compe active">
			
				
            <li stt="2" class="pvt_compe">
				<div class="danhsach1">
					<img src="<?php echo DOMAIN?>images/0.png">
					<p>THỰC PHẨM CHỨC NĂNG</p>
				</div>
			</li>
            <li stt="3" class="pvt_compe">
				<div class="danhsach1">
					<img src="<?php echo DOMAIN?>images/4.png">
					<p>SẢN PHẨM LÀM ĐẸP</p>
				</div>
			</li>
            <li stt="4" class="pvt_compe">
				<div class="danhsach1">
					<img src="<?php echo DOMAIN?>images/3.png">
					<p>TRANG SỨC VÌ SỨC KHỎE</p>
				</div>
			</li>
			 <li stt="5" class="pvt_compe">
				<div class="danhsach1">
					<img src="<?php echo DOMAIN?>images/5.png">
					<p>HÀNG TIÊU DÙNG</p>
				</div>
			</li>
			 <li stt="6" class="pvt_compe">
				<div class="danhsach1">
					<img src="<?php echo DOMAIN?>images/2.png">
					<p>SẢN PHẨM SINH HỌC</p>
				</div>
			</li>
        </ul>
        <div sttdiv="1" class="content activeDiv">
          
        </div>

        <div sttdiv="2" class="content">
            <?php
			$i=0;$mang=array(); 
			 $product = $this->requestAction('comment/spbanchay');
	foreach($listProduct as $row1) {         
$i++;$mang[$i]=$row1;
                    ?>
					<div class="tour">
			<figure class="fig1">
					<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">
                               <div class="prod">     
                     <img title="<?php echo $row1['Product']["name$duoi"]; ?>" alt="image" class="anh" src="<?php echo DOMAINAD ?><?php echo $row1['Product']['images'] ?>" data-tooltip="sticky<?php echo $i?>" />
					  </div>
					  </a>
				</figure>
				<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">	<p class="tieude_tour"><?php echo $row1['Product']['name'] ?></p></a>
					
					<?php if (!$this->Session->check('user_id')){?>
<p class="gia">Giá bán lẻ : &nbsp;<?php echo number_format($row1['Product']['price']);?>&nbsp; VNĐ</p>
					
					<?php }else {?>
					<p class="gia">Giá đại lý : &nbsp;<?php echo number_format($row1['Product']['priceold']);?>&nbsp; VNĐ</p>
					
					<?php } ?>
		
		
		
					<a href="<?php echo DOMAIN?>them-vao-gio/<?php echo $row1['Product']['id']?>"><div class="btn_dattour">Đặt mua</div></a>
				</div>
					<?php }?>
        </div>

        <div sttdiv="3" class="content">
            <?php
			 $product = $this->requestAction('comment/spbanchay1');
				foreach($listProduct as $row1) {         
				$i++;$mang[$i]=$row1;
            ?>
					<div class="tour">
			<figure class="fig1">
					<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">
                               <div class="prod">     
                     <img title="<?php echo $row1['Product']["name$duoi"]; ?>" alt="image" class="anh" src="<?php echo DOMAINAD ?><?php echo $row1['Product']['images'] ?>" data-tooltip="sticky<?php echo $i?>" />
					  </div>
					  </a>
				</figure>
				<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">	<p class="tieude_tour"><?php echo $row1['Product']['name'] ?></p></a>
					<?php if (!$this->Session->check('user_id')){?>
<p class="gia">Giá bán lẻ : &nbsp;<?php echo number_format($row1['Product']['price']);?>&nbsp; VNĐ</p>
					
					<?php }else {?>
					<p class="gia">Giá đại lý : &nbsp;<?php echo number_format($row1['Product']['priceold']);?>&nbsp; VNĐ</p>
					
					<?php } ?>
					<a href="<?php echo DOMAIN?>them-vao-gio/<?php echo $row1['Product']['id']?>"><div class="btn_dattour">Đặt mua</div></a>
				</div>
					<?php }?>

        </div>
        <div sttdiv="4" class="content">
         <?php
			 $product = $this->requestAction('comment/spbanchay2');
				foreach($listProduct as $row1) {         
				$i++;$mang[$i]=$row1;
            ?>
					<div class="tour">
			<figure class="fig1">
					<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">
                               <div class="prod">     
                     <img title="<?php echo $row1['Product']["name$duoi"]; ?>" alt="image" class="anh" src="<?php echo DOMAINAD ?><?php echo $row1['Product']['images'] ?>" data-tooltip="sticky<?php echo $i?>" />
					  </div>
					  </a>
				</figure>
				<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">	<p class="tieude_tour"><?php echo $row1['Product']['name'] ?></p></a>
				<?php if (!$this->Session->check('user_id')){?>
<p class="gia">Giá bán lẻ : &nbsp;<?php echo number_format($row1['Product']['price']);?>&nbsp; VNĐ</p>
					
					<?php }else {?>
					<p class="gia">Giá đại lý : &nbsp;<?php echo number_format($row1['Product']['priceold']);?>&nbsp; VNĐ</p>
					
					<?php } ?>
					<a href="<?php echo DOMAIN?>them-vao-gio/<?php echo $row1['Product']['id']?>"><div class="btn_dattour">Đặt mua</div></a>
				</div>
					<?php }?>

        </div>

		<div sttdiv="5" class="content">
           <?php
			 $product = $this->requestAction('comment/spbanchay3');
				foreach($listProduct as $row1) {         
				$i++;$mang[$i]=$row1;
            ?>
					<div class="tour">
			<figure class="fig1">
					<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">
                               <div class="prod">     
                     <img title="<?php echo $row1['Product']["name$duoi"]; ?>" alt="image" class="anh" src="<?php echo DOMAINAD ?><?php echo $row1['Product']['images'] ?>" data-tooltip="sticky<?php echo $i?>" />
					  </div>
					  </a>
				</figure>
				<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">	<p class="tieude_tour"><?php echo $row1['Product']['name'] ?></p></a>
					<?php if (!$this->Session->check('user_id')){?>
<p class="gia">Giá bán lẻ : &nbsp;<?php echo number_format($row1['Product']['price']);?>&nbsp; VNĐ</p>
					
					<?php }else {?>
					<p class="gia">Giá đại lý : &nbsp;<?php echo number_format($row1['Product']['priceold']);?>&nbsp; VNĐ</p>
					
					<?php } ?>
					<a href="<?php echo DOMAIN?>them-vao-gio/<?php echo $row1['Product']['id']?>"><div class="btn_dattour">Đặt mua</div></a>
				</div>
					<?php }?>

        </div>
		<div sttdiv="6" class="content">
         <?php
			 $product = $this->requestAction('comment/spbanchay4');
				foreach($listProduct as $row1) {         
				$i++;$mang[$i]=$row1;
            ?>
					<div class="tour">
			<figure class="fig1">
					<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">
                               <div class="prod">     
                     <img title="<?php echo $row1['Product']["name$duoi"]; ?>" alt="image" class="anh" src="<?php echo DOMAINAD ?><?php echo $row1['Product']['images'] ?>" data-tooltip="sticky<?php echo $i?>" />
					  </div>
					  </a>
				</figure>
				<a  title="<?php echo $row1['Product']["name$duoi"]; ?>" href="<?php echo DOMAIN ?>chi-tiet-san-pham/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">	<p class="tieude_tour"><?php echo $row1['Product']['name'] ?></p></a>
					<?php if (!$this->Session->check('user_id')){?>
<p class="gia">Giá bán lẻ : &nbsp;<?php echo number_format($row1['Product']['price']);?>&nbsp; VNĐ</p>
					
					<?php }else {?>
					<p class="gia">Giá đại lý : &nbsp;<?php echo number_format($row1['Product']['priceold']);?>&nbsp; VNĐ</p>
					
					<?php } ?>
					<a href="<?php echo DOMAIN?>them-vao-gio/<?php echo $row1['Product']['id']?>"><div class="btn_dattour">Đặt mua</div></a>
				</div>
					<?php }?>

        </div>
    </div>
	
	
	
	</div>
	<div id="mystickytooltip" class="stickytooltip">
 
 	 <?php foreach($mang as $key=>$row1){
                    ?>
<div>
<div id="sticky<?php echo $key; ?>" class="atip">
	
	<p class="tieude_tour" style="margin-top:0px;height:30px;background:#c70003;color:white;line-height:30px;"><?php echo $row1['Product']['name'] ?></p>
<div class="stic_hover">	
<p><img width="200"src="<?php echo DOMAINAD?><?php echo $row1['Product']['images'] ?>"></p>
					<p class="gia" style="text-align:left;">Giá : &nbsp;
					<?php if($row1['Product']['price']){ ?>
					<?php echo number_format($row1['Product']['price']);?>&nbsp; VNĐ
					<?php } else {?>
					Liên hệ
					<?php }?>
					</p>
					
					</div>
</div>
</div>
 <?php } ?>
</div>