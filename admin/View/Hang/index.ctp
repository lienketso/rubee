<script type="text/javascript">
    function changepos() {
        document.frm1.action = "<?php echo DOMAINAD; ?>Hang/changepos";
        document.frm1.submit();
    }

    function MM_jumpMenu(targ,selObj,restore){ //v3.0
        eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        if (restore) selObj.selectedIndex=0;
    }
</script>
<?php echo $this->Form->create(null, array('url' => DOMAINAD . 'Hang/search', 'type' => 'post', 'enctype' => 'multipart/form-data', 'name' => 'frm1')); ?>

<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                 <li id="toolbar-new"> <a href="<?php echo DOMAINAD; ?>Hang/add" class="toolbar"> <span class="icon-32-new"></span> Thêm mới </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD ?>home" class="toolbar"> <span class="icon-32-unpublish"></span> Đóng </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-nhomtin">
            <h2>Danh sách hãng</h2>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="content-box">
    <div class="content-box-header">
      
        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Danh sách hãng</a></li>
            <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2"></a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <!-- End .content-box-header -->
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1"> 
            <!-- This is the target div. id must match the href of this div's tab -->
            <table>
                <thead>
                    <tr>
                      
                        <th width="7%">STT</th>
						
                        <th width="7%">Ảnh</th>
                        <th>Tên danh mục</th>
                        <th style="text-align:center;"><a href="#" onclick="changepos()">Vị trí</a>
                            <input name="sortId" type="hidden" value="<?php echo $catId; ?>" />
                        </th>
                        <th>Cập nhật</th>
                        <th>Xử lý</th>
                        <th>Hiển thị</th>
                        <th width="3%">ID</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="6"></td>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $i = 1;
                    foreach ($Hang as $key => $value) {
                ?>
                    <tr>
                        
                        <td><?php $j = $key + 1;
                    echo $j;
                    ?></td>
                        <td>
							<img width="100" src="<?php echo DOMAINAD?>/timthumb.php?src=<?php echo $value['Hang']['images'];?>&amp;h=70&amp;w=100&amp;zc=1" alt="thumbnail" />
						</td>
                        <td><a href="<?php echo DOMAINAD ?>Hang/edit/<?php echo $value['Hang']['id']; ?>/<?php echo $value['Hang']['parent_id']; ?>" title="Edit"> <?php echo $value['Hang']['name']; ?> </a></td>
                        <td style="text-align:center;"><input class="text-input medium-input" style="text-align:center; width:30% !important;" type="text" value="<?php echo $value['Hang']['pos']; ?>" name="order[<?php echo $value['Hang']['id'] ?>]" /></td>
                        <td><?php echo date('d-m-Y h:i:s', strtotime($value['Hang']['modified'])); ?></td>
                        <td><!-- Icons --> 
                            <a href="<?php echo DOMAINAD ?>Hang/edit/<?php echo $value['Hang']['id'] ?>/<?php echo $value['Hang']['parent_id']; ?>" title="Sửa mục này"><img src="<?php echo DOMAINAD ?>images/icons/pencil.png" alt="Sửa" /></a> <a href="javascript:confirmDelete('<?php echo DOMAINAD ?>Hang/delete/<?php echo $value['Hang']['id'] ?>/<?php echo $value['Hang']['parent_id']; ?>')" title="Xóa mục này"><img src="<?php echo DOMAINAD ?>images/icons/cross.png" alt="Xóa" /></a></td>
                        <td><?php if($value['Hang']['status'] == 1) { ?>
                            <a href="#" title="Tích vào để không hiển thị mục này" class="icon-4 info-tooltip"><img src="<?php echo DOMAINAD ?>images/icons/success-icon.png" alt="Ngắt kích hoạt" /></a>
                            <?php } else { ?>
                            <a href="#" title="Tích vào để không hiển thị mục này" class="icon-4 info-tooltip"><img src="<?php echo DOMAINAD ?>images/icons/Play-icon.png" alt="Ngắt kích hoạt" /></a>
                            <?php } ?></td>
                        <td align="right"><?php echo $value['Hang']['id']; ?></td>
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