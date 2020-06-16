<?php echo $this->Form->create(null, array('url' => DOMAINAD . 'cataloguesrec/edit', 'type' => 'post', 'name' => 'image',  'enctype'=>'multipart/form-data', 'inputDefaults' => array('label' => false, 'div' => false))); ?>

<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                <li id="toolbar-new"> <a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="toolbar"> <span class="icon-32-save"></span> Lưu </a> </li>
                <li id="toolbar-refresh"> <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.image.reset();"> <span class="icon-32-refresh"> </span> Reset </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD ?>cataloguesrec" class="toolbar"> <span class="icon-32-cancel"></span> Hủy </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-category-add">
            <h2>Sửa danh sách</h2>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="content-box">
    <div class="content-box-header">
        <h3>Sửa danh mục</h3>
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
                    <td width="145" class="label">Tên danh mục (Tiếng Việt):</td>
                    <td><?php echo $this->Form->input('Cataloguesrec.name',array('value'=> $edit['Cataloguesrec']['name'],'label'=>'','class'=>'text-input medium-input','maxlength' => '250','onchange' => 'get_alias()','id' => 'idtitle'));?>
					<?php echo $this->Form->input('Cataloguesrec.id',array('type'=>'hidden'));?>
					</td>
                </tr>
	
			 <tr>
                    <td width="145" class="label">Tên danh mục (Tiếng Anh):</td>
                    <td><?php echo $this->Form->input('Cataloguesrec.name_eg',array('value'=> $edit['Cataloguesrec']['name_eg'],'label'=>'','class'=>'text-input medium-input','maxlength' => '250','onchange' => 'get_alias()','id' => 'idtitle'));?>
					<?php echo $this->Form->input('Cataloguesrec.id',array('type'=>'hidden'));?>
					</td>
                </tr>
			   <tr>
                  	<td class="label"> Hình ảnh 1:</td>
                    <td>
                     <input type="text" size="50" value="<?php echo $edit['Cataloguesrec']['images']?>" style="height:25px;"  name="userfile1" readonly="true"> &nbsp;<a href="javascript:window.open('<?php echo DOMAINAD; ?>upload_noresize.php?stt=1','userfile1','width=500,height=300');window.history.go(1)" ><input type="button" value="Chọn ảnh" class="button" /></a>
                    	
                    </td>
                </tr>
				 <tr>
                  	<td class="label"> Hình ảnh 2:</td>
                    <td>
                     <input type="text" size="50" value="<?php echo $edit['Cataloguesrec']['images2']?>" style="height:25px;"  name="userfile2" readonly="true"> &nbsp;<a href="javascript:window.open('<?php echo DOMAINAD; ?>upload_noresize.php?stt=2','userfile2','width=500,height=300');window.history.go(1)" ><input type="button" value="Chọn ảnh" class="button" /></a>
                    	
                    </td>
                </tr>
                <tr>
                    <td class="label">Liên kết tĩnh:</td>
                    <td><?php echo $this->Form->input('Cataloguesrec.alias', array('class' => 'text-input alias-input datepicker', 'maxlength' => '250', 'id' => 'idalias')); ?> <img width="16" height="16" alt="" onclick="get_alias();" style="cursor: pointer; vertical-align: middle;" src="<?php echo DOMAINAD; ?>images/refresh.png"></td>
                </tr>
                <tr>
                    <td class="label">Nhóm danh mục</td>
                    <td><select name="listCat" id="jumpMenu">
                            <option value="">--- Danh mục cha ---</option>
                        <?php foreach ($list_cat as $k => $v) { 
                            if($edit['Cataloguesrec']['id'] != $k) {
                        ?>
                        <option value="<?php echo $k; ?>" <?php if($edit['Cataloguesrec']['parent_id'] == $k) {echo 'selected="selected"';} ?>><?php echo $v; ?></option>
                        <?php }} ?>
                    </select></td>
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
                    <td><input type="radio" value="0" id="CatalogueStatus0" name="data[Cataloguesrec][status]" <?php if ($this->data['Cataloguesrec']['status'] == 0) {
                            echo 'checked="checked"';
                        } ?>>
                        Chưa Active 
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" <?php if ($this->data['Cataloguesrec']['status'] == 1) {
                            echo 'checked="checked"';
                        } ?> value="1" id="CatalogueStatus1" name="data[Cataloguesrec][status]">
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
                <li id="toolbar-new"> <a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="toolbar"> <span class="icon-32-save"></span> Lưu </a> </li>
                <li id="toolbar-refresh"> <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.image.reset();"> <span class="icon-32-refresh"> </span> Reset </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD?>cataloguesrec" class="toolbar"> <span class="icon-32-cancel"></span> Hủy </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-category-add">
            <h2>Cập nhật ảnh</h2>
        </div>
        <div class="clr"></div>
    </div>
</div>
<?php echo $this->Form->end(); ?>