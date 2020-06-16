<?php echo $this->Form->create(null, array( 'url' => DOMAINAD.'tins/edit','type' => 'post','enctype'=>'multipart/form-data','name'=>'image',  'inputDefaults' => array('label' => false,'div' => false))); ?>

<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                <li id="toolbar-new"> <a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="toolbar"> <span class="icon-32-save"></span> Lưu </a> </li>
                <li id="toolbar-refresh"> <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.image.reset();"> <span class="icon-32-refresh"> </span> Reset </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD?>tins" class="toolbar"> <span class="icon-32-cancel"></span> Hủy </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-category-add">
            <h2>Cập nhật</h2>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="content-box"><!-- Start Content Box -->
    <div class="content-box-header">
        <h3>Cập nhật</h3>
        <div class="clear"></div>
    </div>
    <!-- End .content-box-header -->
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <table width="100%" class="input">
                <tr>
                    <td width="145" class="label">Tiêu đề :</td>
                    <td><?php echo $this->Form->input('Tin.name',array('value'=> $edit_vie['Tin']['name'],'class'=>'text-input medium-input','maxlength' => '250','id' => 'idtitle'));?><?php echo $this->Form->input('id', array('type' => 'hidden')); ?></td>
                </tr>
                <tr>
               
                <tr>
                    <td class="label">Trang thái:</td>
                    <td><input type="radio" value="0" id="PostStatus0" name="data[Tin][status]">
                        Chưa Active a
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" checked="checked" value="1" id="PostStatus1" name="data[Tin][status]">
                        Đã Active </td>
                </tr>

				
             <!--  <tr>
                    <td class="label">Hình ảnh đại diện:</td>
                    <td>&nbsp;
                        <input name="userfile" type="file" id="userfile" size="50"></td>
                </tr>-->
                <tr>
                    <td class="label">Nội dung (274x242px):</td>
                    <td><?php
                            $CKEditor = new CKEditor();
                            $CKEditor->config['width'] = '98%';
                            $CKEditor->config['height'] = '300';
                            CKFinder::SetupCKEditor( $CKEditor ) ;
                            
                            $initialValue = $edit_vie['Tin']['content'];
                            echo $CKEditor->editor("data[Tin][content]", $initialValue, "");
                        ?></td>
                </tr>
              
                <tr>
                    <td class="label">Title Seo</td>
                    <td><?php echo $this->Form->input('Tin.title_seo',array('label'=>'','class'=>'text-input medium-input','maxlength' => '250','id' => 'idtitle'));?></td>
                </tr>
                <tr>
                    <td class="label">Meta keyword</td>
                    <td><?php echo $this->Form->input('Tin.meta_key',array('label'=>'','class'=>'text-input medium-input'));?></td>
                </tr>
                <tr>
                    <td class="label">Meta description</td>
                    <td><?php echo $this->Form->input('Tin.meta_des',array('label'=>'','class'=>'text-input medium-input'));?></td>
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
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD?>tins" class="toolbar"> <span class="icon-32-cancel"></span> Hủy </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-category-add">
            <h2>Cập nhật thông tin</h2>
        </div>
        <div class="clr"></div>
    </div>
</div>
<?php echo $this->Form->end(); ?>