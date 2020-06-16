<?php echo $this->Form->create(null, array( 'url' => DOMAINAD.'cataloguesrec/add', 'type' => 'post', 'name' => 'frm',  'enctype'=>'multipart/form-data', 'inputDefaults' => array('label' => false,'div' => false)));?>
<?php echo $this->Form->input('catId', array('type' => 'hidden', 'value' =>  $catId)); ?>
<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                <li id="toolbar-new"> <a href="javascript:void(0);" onclick="javascript:document.frm.submit();" class="toolbar"> <span class="icon-32-save"></span> Lưu </a> </li>
                <li id="toolbar-refresh"> <a href="javascript:void(0);" class="toolbar" onclick="frm:document.frm.reset();"> <span class="icon-32-refresh"> </span> Reset </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD; ?>cataloguesrec" class="toolbar"> <span class="icon-32-cancel"></span> Hủy </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-category-add">
            <h2>Quản lý dịch vụ</h2>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="content-box">
    <div class="content-box-header">
        <?php if($tendm['Cataloguesrec']['name'] == "") { ?>
        <h3>Thêm danh mục cha</h3>
        <?php } else { ?>
        <h3>Thêm danh mục con của : <?php echo $tendm['Cataloguesrec']['name']; ?></h3>
        <?php } ?>
        <!-- <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Nội dung tiếng Việt</a></li>
            <li><a href="#tab2">Nội dung tiếng Anh</a></li>
        </ul> -->
        <div class="clear"></div>
    </div>
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <table class="input">
                <tr>
                    <td width="120" class="label">Tên Danh mục (Tiếng Việt):</td>
                    <td><?php echo $this->Form->input('Cataloguesrec.name', array('class'=>'text-input medium-input', 'maxlength' => '250', 'id' => 'idtitle', 'onchange' => 'get_alias()')); ?></td>
                </tr>
				<tr>
                    <td width="120" class="label">Tên Danh mục (Tiếng Anh):</td>
                    <td><?php echo $this->Form->input('Cataloguesrec.name_eg', array('class'=>'text-input medium-input', 'maxlength' => '250', 'id' => 'idtitle', 'onchange' => 'get_alias()')); ?></td>
                </tr>
				
		
				  <tr>
                    <td class="label">Liên kết tĩnh:</td>
                    <td><?php echo $this->Form->input('Cataloguesrec.alias', array('label' => '', 'class' => 'text-input alias-input', 'maxlength' => '250', 'id' => 'idalias')); ?> <img width="16" height="16" alt="" onclick="get_alias();" style="cursor: pointer; vertical-align: middle;" src="<?php echo DOMAINAD; ?>images/refresh.png"></td>
                </tr>
				
               
              <tr>
                  	<td class="label"> Hình ảnh 1:</td>
                    <td>
                     <input type="text" size="50" style="height:25px;"  name="userfile1" readonly="true"> &nbsp;<a href="javascript:window.open('<?php echo DOMAINAD; ?>upload_noresize.php?stt=1','userfile1','width=500,height=300');window.history.go(1)" ><input type="button" value="Chọn ảnh" class="button" /></a>
                    	
                    </td>
                </tr>	
				<tr>
                  	<td class="label"> Hình ảnh 2:</td>
                    <td>
                     <input type="text" size="50" style="height:25px;"  name="userfile2" readonly="true"> &nbsp;<a href="javascript:window.open('<?php echo DOMAINAD; ?>upload_noresize.php?stt=2','userfile2','width=500,height=300');window.history.go(1)" ><input type="button" value="Chọn ảnh" class="button" /></a>
                    	
                    </td>
                </tr>	
                <tr>
                    <td width="120" class="label">Tiêu đề SEO:</td>
                    <td><?php echo $this->Form->input('Cataloguesrec.title_seo',array('class'=>'text-input medium-input', 'id' => 'idtitle'));?></td>
                </tr>
                <tr>
                    <td width="120" class="label">Meta Keyword:</td>
                    <td><?php echo $this->Form->input('Cataloguesrec.meta_key',array('class'=>'text-input medium-input', 'id' => 'idtitle'));?></td>
                </tr>
                <tr>
                    <td width="120" class="label">Meta Description:</td>
                    <td><?php echo $this->Form->input('Cataloguesrec.meta_des',array('class'=>'text-input medium-input', 'id' => 'idtitle'));?></td>
                </tr>
                <tr>
                    <td class="label">Trang thái:</td>
                    <td><input type="radio" value="0" id="CatproductStatus0" name="data[Cataloguesrec][status]">
                        Chưa Active 
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" checked="checked" value="1" id="CatproductStatus1" name="data[Catproduct][status]">
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
                <li id="toolbar-new"> <a href="javascript:void(0);" onclick="javascript:document.frm.submit();" class="toolbar"> <span class="icon-32-save"></span> Lưu </a> </li>
                <li id="toolbar-refresh"> <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.frm.reset();"> <span class="icon-32-refresh"> </span> Reset </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD?>cataloguesrec" class="toolbar"> <span class="icon-32-cancel"></span> Hủy </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
</div>
<?php echo $this->Form->end(); ?>