<?php echo $this->Form->create(null, array( 'url' => DOMAINAD.'recruitment/add','type' => 'post','enctype'=>'multipart/form-data','name'=>'image')); ?>
<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                <li id="toolbar-new"> <a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="toolbar"> <span class="icon-32-save"></span> Lưu </a> </li>
                <li id="toolbar-refresh"> <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.image.reset();"> <span class="icon-32-refresh"> </span> Reset </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD?>recruitment" class="toolbar"> <span class="icon-32-cancel"></span> Hủy </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-category-add">
            <h2>Thêm mới</h2>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="content-box"><!-- Start Content Box -->
    <div class="content-box-header">
        <h3>Thêm mới</h3>
        <div class="clear"></div>
    </div>
    <!-- End .content-box-header -->
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <table width="100%" class="input">
                <tr>
                    <td width="145" class="label">Tiêu đề : </td>
                    <td><?php echo $this->Form->input('Recruitment.name',array('label'=>'','class'=>'text-input medium-input','maxlength' => '250','onchange' => 'get_alias()','id' => 'idtitle'));?></td>
                </tr>
                <tr>
                    <td width="145" class="label">Tiêu đề (Tiếng Anh): </td>
                    <td><?php echo $this->Form->input('Recruitment.name_eg',array('label'=>'','class'=>'text-input medium-input','maxlength' => '250','onchange' => 'get_alias()','id' => 'idtitle'));?></td>
                </tr>
                <tr>
                    <td class="label">Liên kết tĩnh:</td>
                    <td><?php echo $this->Form->input('Recruitment.alias',array('label'=>'','class'=>'text-input alias-input','maxlength' => '250','id' => 'idalias'));?> <img width="16" height="16" alt="" onclick="get_alias();" style="cursor: pointer; vertical-align: middle;" src="<?php echo DOMAINAD; ?>images/refresh.png"></td>
                </tr>
                <tr>
                    <td class="label">Đường dẫn ngoài ( Nếu có ) : </td>
                    <td><?php echo $this->Form->input('Recruitment.slug',array('label'=>'','class'=>'text-input medium-input', 'placeHolder'=>'ex : https://rubee.com.vn','maxlength' => '250','id' => 'idslug'));?></td>
                </tr>
                <tr>
                    <td class="label">Thuộc danh mục:</td>
                    <td>
                        <select name="data[Recruitment][cat_id]" id="jumpMenu">
                            <?php foreach ($list_cat as $k => $v) { ?>
                            <option value="<?php echo $k; ?>" <?php if($this->Session->check('catId') && $this->Session->read('catId') == $k) {echo 'selected="selected"';} ?>><?php echo $v; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="label">Trang thái:</td>
                    <td><input type="radio" value="0" id="NewsStatus0" name="data[Recruitment][status]">
                        Chưa Active a
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" checked="checked" value="1" id="NewsStatus1" name="data[Recruitment][status]">
                        Đã Active </td>
                </tr>
               
			      <tr>
                    <td class="label">Hình ảnh đại diện:</td>
                    <td>&nbsp;
                        <input name="userfile" type="file" id="userfile" size="50"></td>
                </tr>
			   
             <tr>
                    <td class="label">Tóm tắt</td>
                    <td><?php
                            $CKEditor = new CKEditor();
                            $CKEditor->config['width'] = '98%';
                            $CKEditor->config['height'] = '300';
                            CKFinder::SetupCKEditor( $CKEditor ) ;

                            $initialValue = '';
                            echo $CKEditor->editor("data[Recruitment][shortdes]", $initialValue, "compact");
                        ?></td>
                </tr>
                 <tr>
                    <td class="label">Tóm tắt (Tiếng Anh)</td>
                    <td><?php
                            $CKEditor = new CKEditor();
                            $CKEditor->config['width'] = '98%';
                            $CKEditor->config['height'] = '300';
                            CKFinder::SetupCKEditor( $CKEditor ) ;

                            $initialValue = '';
                            echo $CKEditor->editor("data[Recruitment][shortdes_eg]", $initialValue, "compact");
                        ?></td>
                </tr> 
                <tr>
                    <td class="label">Nội dung</td>
                    <td>
                        
                        <?php
                            $CKEditor = new CKEditor();
                            $CKEditor->config['width'] = '98%';
                            $CKEditor->config['height'] = '300';
                              CKFinder::SetupCKEditor( $CKEditor ) ;
                            $initialValue = '';
                            echo $CKEditor->editor("data[Recruitment][content]", $initialValue, "");
                        ?>
                    
                    </td>
                </tr>
				 
                <tr>
                    <td class="label">Nội dung (Tiếng Anh)</td>
                    <td>
                        
                        <?php
                            $CKEditor = new CKEditor();
                            $CKEditor->config['width'] = '98%';
                            $CKEditor->config['height'] = '300';
                              CKFinder::SetupCKEditor( $CKEditor ) ;
                            $initialValue = '';
                            echo $CKEditor->editor("data[Recruitment][content_eg]", $initialValue, "");
                        ?>
                    
                    </td>
                </tr>
                <tr>
                    <td class="label">Title Seo</td>
                    <td><?php echo $this->Form->input('Recruitment.title_seo',array('label'=>'','class'=>'text-input medium-input','maxlength' => '250','id' => 'idtitle'));?></td>
                </tr>
                <tr>
                    <td class="label">Meta keyword</td>
                    <td><?php echo $this->Form->input('Recruitment.meta_key',array('label'=>'','class'=>'text-input medium-input'));?></td>
                </tr>
                <tr>
                    <td class="label">Meta description</td>
                    <td><?php echo $this->Form->input('Recruitment.meta_des',array('label'=>'','class'=>'text-input medium-input'));?></td>
                </tr>
            </table>
            <div class="clear"></div>
        </div>
        <!-- End #tab1 -->
        <div class="tab-content" id="tab2">
            <div class="clear"></div>
            <!-- End .clear --> 
        </div>
        <!-- End #tab2 --> 
    </div>
    <!-- End .content-box-content --> 
</div>
<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                <li id="toolbar-new"> <a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="toolbar"> <span class="icon-32-save"></span> Lưu </a> </li>
                <li id="toolbar-refresh"> <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.image.reset();"> <span class="icon-32-refresh"> </span> Reset </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD?>recruitment" class="toolbar"> <span class="icon-32-cancel"></span> Hủy </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-category-add">
            <h2>Thêm mới ảnh</h2>
        </div>
        <div class="clr"></div>
    </div>
</div>
<?php echo $this->Form->end(); ?>