<?php echo $this->Form->create(null, array('url' => DOMAINAD . 'modules/edit', 'type' => 'post', 'name' => 'image')); ?>
<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                <li id="toolbar-new"> <a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="toolbar"> <span class="icon-32-save"></span> Lưu </a> </li>
                <li id="toolbar-refresh"> <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.image.reset();"> <span class="icon-32-refresh"> </span> Reset </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD; ?>modules" class="toolbar"> <span class="icon-32-cancel"></span> Hủy </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-category-add">
            <h2>Cập nhật modules</h2>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="content-box">
    <div class="content-box-header">
        <h3></h3>
        <!--<ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Nội dung tiếng Việt</a></li>
            <li><a href="#tab2">Nội dung tiếng Anh</a></li>
        </ul>-->
        <div class="clear"></div>
    </div>
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <table width="100%" class="input">
                <tr>
                    <td width="150" class="label">Tên module</td>
                    <td><?php echo $this->Form->input('Module.name', array('label' => '', 'class' => 'text-input medium-input', 'id' => '')); ?><?php echo $this->Form->input('Module.id', array('label' => '', 'type' => 'hidden', 'value' => $edit['Module']['id'], 'class' => 'text-input medium-input', 'id' => '')); ?>
                    </td>
               	</tr>
                <tr>
                    <td class="label">Xuất hiện</td>
                    <td>
                        <select name="data[Module][display]" id="data[][]">
                            <option value="1" <?php if($edit['Module']['display'] == 1) {echo 'selected';} ?>>Bên trái</option>
                            <option value="2" <?php if($edit['Module']['display'] == 2) {echo 'selected';} ?>>Bên phải</option>
                            <option value="3" <?php if($edit['Module']['display'] == 3) {echo 'selected';} ?>>Ở giữa</option>
                        </select>
                    </td>
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
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD ?>modules" class="toolbar"> <span class="icon-32-cancel"></span> Hủy </a> </li>

            </ul>
            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
</div>
<?php echo $this->Form->end(); ?>