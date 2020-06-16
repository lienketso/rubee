<script type="text/javascript">
    function changepos() {
        document.frm1.action = "<?php echo DOMAINAD; ?>doitac/changepos";
        document.frm1.submit();
    }
</script>
<?php echo $this->Form->create(null, array('url' => DOMAINAD . 'doitac/changepos', 'type' => 'post', 'enctype' => 'multipart/form-data', 'name' => 'frm1')); ?>

<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                <li id="toolbar-new"> <a href="<?php echo DOMAINAD; ?>doitac/add" class="toolbar"> <span class="icon-32-new"></span> Thêm mới </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD ?>home" class="toolbar"> <span class="icon-32-unpublish"></span> Đóng </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-nhomtin">
            <h2>Quản lý tags</h2>
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
    <!-- End .content-box-header -->
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1"> 
            <!-- This is the target div. id must match the href of this div's tab -->
            <table width="100%">
                <thead>
                    <tr>
                        <th width="6%">STT</th>
                   

<th width="12%">Tiêu đề</th>
<th width="12%">Cập nhật</th>
                        <th width="11%">Xử lý</th>
                        <th width="4%">ID</th>
                    </tr>
                </thead>
   
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($advs as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                       
                                     <td><?php echo $value['Doitac']['name'] ?></td>
                            <td><?php echo date('d-m-Y', strtotime($value['Doitac']['modified'])); ?></td>
                            
							<td><!-- Icons --> 
                                <a href="<?php echo DOMAINAD ?>Doitac/edit/<?php echo $value['Doitac']['id'] ?>" title="Sửa mục này"><img src="<?php echo DOMAINAD ?>images/icons/pencil.png" alt="Sửa" /></a> <a href="javascript:confirmDelete('<?php echo DOMAINAD ?>doitac/delete/<?php echo $value['Doitac']['id'] ?>')" title="Xóa mục này"><img src="<?php echo DOMAINAD ?>images/icons/cross.png" alt="Xóa" /></a>
                             <?php
                                    if ($value['Doitac']['status'] == 0) {
                                        ?>
                                <a href="<?php echo DOMAINAD ?>Doitac/active/<?php echo $value['Doitac']['id']; ?>" title="Kích hoạt" class="icon-5 info-tooltip"><img src="<?php echo DOMAINAD ?>images/icons/Play-icon.png" alt="Kích hoạt" /></a>
                                <?php
                                    } else {
                                        ?>
                                <a href="<?php echo DOMAINAD ?>doitac/close/<?php echo $value['Doitac']['id']; ?>" title="Đóng" class="icon-4 info-tooltip"><img src="<?php echo DOMAINAD ?>images/icons/success-icon.png" alt="Ngắt kích hoạt" /></a>
                                <?php
                                    }
                                    ?>
                            </td>
                            <td align="right"><?php echo $value['Doitac']['id']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- End #tab1 --> 

        <!-- End #tab2 --> 

    </div>
    <!-- End .content-box-content --> 
</div>
<?php echo $this->Form->end(); ?> 