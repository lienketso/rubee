<?php echo $this->Form->create(null, array('url' => DOMAINAD . 'Hang/edit' . "/" . $this->data['Hang']['parent_id'], 'type' => 'post', 'name' => 'adminForm', 'enctype'=>'multipart/form-data')); ?>

<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                <li id="toolbar-new"> <a href="javascript:void(0);" onclick="javascript:document.adminForm.submit();" class="toolbar"> <span class="icon-32-save"></span> Lưu </a> </li>
                <li id="toolbar-refresh"> <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.adminForm.reset();"> <span class="icon-32-refresh"> </span> Reset </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD ?>Hang" class="toolbar"> <span class="icon-32-cancel"></span> Hủy </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-category-add">
            <h2>Quản lý hãng</h2>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="content-box">
    <div class="content-box-header">
        <h3>Sửa hãng</h3>
        <!--<ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Nội dung tiếng Việt</a></li>
            <li><a href="#tab2">Nội dung tiếng Anh</a></li>
        </ul>-->
        <div class="clear"></div>
    </div>
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <table class="input">
                <tr>
                    <td width="120" class="label">Tên hãng:</td>
                    <td><?php echo $this->Form->input('Hang.name', array('class' => 'text-input medium-input datepicker', 'maxlength' => '250', 'onchange' => 'get_alias()', 'id' => 'idtitle')); ?> <?php echo $this->Form->input('Hang.id', array()); ?></td>
                </tr>
             
                 <tr>
                    <td class="label">Liên kết tĩnh:</td>
                    <td><?php echo $this->Form->input('Hang.slug', array('label' => '', 'class' => 'text-input alias-input', 'maxlength' => '250', 'id' => 'idalias')); ?> <img width="16" height="16" alt="" onclick="get_alias();" style="cursor: pointer; vertical-align: middle;" src="<?php echo DOMAINAD; ?>images/refresh.png"></td>
                </tr>
				  <tr>
                  	<td class="label">Chọn ảnh logo:</td>
                    <td>
                     <input type="text" size="50" style="height:25px;"  value="<?php echo $edit['Hang']['images']?>" name="userfile" readonly="true"> &nbsp;<a href="javascript:window.open('<?php echo DOMAINAD; ?>upload_noresize1.php','userfile','width=500,height=300');window.history.go(1)" ><input type="button" value="Chọn ảnh" class="button" /></a>
                    	
                    </td>
                </tr>
				 <td><input type="checkbox" name="all" id="checkall" /> Chọn tất cả</td>
					
				<tr> <td colspan="2"> Chọn các danh mục
				  <div style="overflow:hidden; border:1px solid;">
                      <table width="20%" style="width:20% !important;" border="0">
					  <?php $cat=explode('|',$edit['Hang']['catproduct_id']);
					 // pr($cat);die;
					  ?>
					  
					  <?php foreach($catproduct as $k=>$v) {?>
                          <tr>
                             <td><label style="color:red"><?php echo $v?></label></td>
                             <td><input type="checkbox" <?php for($i=0;$i<count($cat);$i++) if($cat[$i]==$k) { ?> checked="checked" <?php break; } ?> name="cat_<?php echo $k?>" /> </td>
                          </tr>
						  
						  
						  <?php
							$con1=$this->requestAction('hang/get_catproduct/'.$k);
						  foreach($con1 as $k1=>$v1) {?>
                          <tr>
                             <td><label style="color:blue"><?php echo $v1?></label></td>
                             <td><input type="checkbox" <?php for($i=0;$i<count($cat);$i++) if($cat[$i]==$k1) { ?> checked="checked" <?php break; } ?> name="cat_<?php echo $k1?>" /> </td>
                          </tr>
						  
						  
						  <?php 
						  $con2=$this->requestAction('hang/get_catproduct/'.$k1);
						  foreach($con2 as $k2=>$v2) {?>
                          <tr>
                             <td><label><?php echo $v2?></label></td>
                             <td><input type="checkbox" <?php for($i=0;$i<count($cat);$i++) if($cat[$i]==$k2) { ?> checked="checked" <?php break; } ?> name="cat_<?php echo $k2?>" /> </td>
                          </tr>
						  
						  
                       <?php } ?>
						  
						  
                       <?php } ?>
						  
						  
						  
                       <?php } ?>
                      </table>
                    
                    </div>
					</td>
				</tr>
				
				
				 <tr>
                    <td width="120" class="label">Vị trí:</td>
                    <td><?php echo $this->Form->input('Hang.pos', array('class' => 'text-input medium-input datepicker', 'maxlength' => '250')); ?></td>
                </tr>
               
                <tr>
                    <td width="120" class="label">Tiêu đề SEO:</td>
                    <td><?php echo $this->Form->input('Hang.title_seo',array('class'=>'text-input medium-input', 'id' => 'idtitle'));?></td>
                </tr>
                <tr>
                    <td width="120" class="label">Meta Keyword:</td>
                    <td><?php echo $this->Form->input('Hang.meta_key',array('class'=>'text-input medium-input', 'id' => 'idtitle'));?></td>
                </tr>
                <tr>
                    <td width="120" class="label">Meta Description:</td>
                    <td><?php echo $this->Form->input('Hang.meta_des',array('class'=>'text-input medium-input', 'id' => 'idtitle'));?></td>
                </tr>
                <tr>
                    <td class="label">Trang thái:</td>
                    <td><input type="radio" value="0" id="Hangtatus0" name="data[Hang][status]" <?php if ($this->data['Hang']['status'] == 0) {
                            echo 'checked="checked"';
                        } ?>>
                        Chưa Active 
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" <?php if ($this->data['Hang']['status'] == 1) {
                            echo 'checked="checked"';
                        } ?> value="1" id="Hangtatus1" name="data[Hang][status]">
                        Đã Active </td>
                </tr>
            </table>
            <div class="clear"></div>
        </div>
        <div class="tab-content" id="tab2">
            <div class="clear"></div>
        </div>
    </div>
</div>
<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                <li id="toolbar-new"> <a href="javascript:void(0);" onclick="javascript:document.adminForm.submit();" class="toolbar"> <span class="icon-32-save"></span> Lưu </a> </li>
                <li id="toolbar-refresh"> <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.adminForm.reset();"> <span class="icon-32-refresh"> </span> Reset </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD ?>Hang" class="toolbar"> <span class="icon-32-cancel"></span> Hủy </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
</div>
<?php echo $this->Form->end(); ?>