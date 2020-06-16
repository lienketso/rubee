<?php echo $this->Form->create(null, array('url' => DOMAINAD . 'administrators/check_pass', 'type' => 'post', 'enctype'=>'multipart/form-data', 'name' => 'image')); ?>
<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                <li id="toolbar-new">
                    <a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="toolbar">
                        <span class="icon-32-save"></span>
                        Lưu
                    </a>
                </li>
                <li id="toolbar-refresh">
                    <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.image.reset();">
                        <span class="icon-32-refresh">
                        </span>
                        Reset
                    </a>
                </li>
                <li class="divider"></li>
                <li id="toolbar-help">
                    <a href="#messages" rel="modal" class="toolbar">
                        <span class="icon-32-help"></span>
                        Trợ giúp
                    </a>
                </li>
                <li id="toolbar-unpublish">
                    <a href="<?php echo DOMAINAD ?>administrators" class="toolbar">
                        <span class="icon-32-cancel"></span>
                        Hủy
                    </a>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-category-add"><h2>Tài khoản</h2></div>
        <div class="clr"></div>
    </div>
</div>
<div class="content-box"><!-- Start Content Box -->
    <div class="content-box-header">
        <h3> Thay đổi tài khoản </h3>
        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Thay đổi tài khoản</a></li> <!-- href must be unique and match the id of target div -->
        </ul>
        <div class="clear"></div>
    </div> <!-- End .content-box-header -->
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <table class="input">
               	<tr>
                   	<td width="140" class="label">Tên đăng nhập:</td>
                    <td>
                        <?php echo $this->Form->input('Administrator.id', array('label' => '', 'type' => 'hidden', 'style' => 'width:250px;height:25px;')); ?> 
                        <?php echo $this->Form->input('Administrator.name', array('label' => '', 'class' => 'text-input medium-input', 'maxlength' => '250', 'id' => 'name')); ?>
                    </td>
                </tr>
               
                <tr>
                   	<td width="140" class="label">Mật khẩu cũ:</td>
                    <td>
                        <?php echo $this->Form->input('Administrator.password', array('label' => '', 'class' => 'text-input medium-input', 'type' => 'password', 'maxlength' => '250', 'id' => 'pass1')); ?>
                    </td>
                </tr>
                <tr>
                   	<td width="140" class="label">Mật khẩu mới:</td>
                    <td>
                        <?php echo $this->Form->input('pass2', array('label' => '', 'class' => 'text-input medium-input', 'type' => 'password', 'maxlength' => '250', 'id' => 'pass2')); ?>
                    </td>
                </tr>
                <tr>
                    <td width="140" class="label">Tên đầy đủ:</td>
                    <td>
                        <?php echo $this->Form->input('Administrator.fullname', array('label' => '', 'class' => 'text-input medium-input datepicker', 'maxlength' => '250', 'id' => 'fullname')); ?>
                    </td>
                </tr>
                <tr>
                    <td class="label">Hình ảnh đại diện:</td>
                    <td>&nbsp;
                        <input name="userfile" type="file" id="userfile" size="50">
                    </td>
                </tr>
                <tr>
                    <td class="label">Tóm tắt</td>
                    <td>
                        <?php
                            $CKEditor = new CKEditor();
                            $CKEditor->config['width'] = '98%';
                            $CKEditor->config['height'] = '300';
                            CKFinder::SetupCKEditor( $CKEditor ) ;

                            $initialValue = $edit_vie['Administrator']['summary'];
                            echo $CKEditor->editor("data[Administrator][summary]", $initialValue, "compact");
                        ?>
                    </td>
                </tr>
            </table>
            <div class="clear"></div>
        </div> <!-- End #tab1 -->
        <div class="tab-content" id="tab2">
            <div class="clear"></div><!-- End .clear -->
        </div> <!-- End #tab2 -->        
    </div> <!-- End .content-box-content -->
</div>

<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                <li id="toolbar-new">
                    <a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="toolbar">
                        <span class="icon-32-save"></span>
                        Lưu
                    </a>
                </li>
                <li id="toolbar-refresh">
                    <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.image.reset();">
                        <span class="icon-32-refresh">
                        </span>
                        Reset
                    </a>
                </li>
                <li class="divider"></li>
                <li id="toolbar-help">
                    <a href="#messages" rel="modal" class="toolbar">
                        <span class="icon-32-help"></span>
                        Trợ giúp
                    </a>
                </li>
                <li id="toolbar-unpublish">
                    <a href="<?php echo DOMAINAD ?>administrators" class="toolbar">
                        <span class="icon-32-cancel"></span>
                        Hủy
                    </a>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-category-add"><h2>Tài khoản</h2></div>

        <div class="clr"></div>
    </div>
</div>
<?php echo $this->Form->end(); ?>