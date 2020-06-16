<?php echo $this->Html->script('jwplayer'); ?>
<script type="text/javascript">
    function changepos() {
        document.frm1.action = "<?php echo DOMAINAD; ?>Comment/changepos";
        document.frm1.submit();
    }
	
	 function process() {
        document.frm1.action = "<?php echo DOMAINAD; ?>Comment/process";
        document.frm1.submit();
    }
    function MM_jumpMenu(targ,selObj,restore){ //v3.0
        eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        if (restore) selObj.selectedIndex=0;
    }
	
</script>
<?php echo $this->Form->create(null, array('url' => DOMAINAD . 'Comment/changepos', 'type' => 'post', 'enctype' => 'multipart/form-data', 'name' => 'frm1')); ?>

<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD ?>home" class="toolbar"> <span class="icon-32-unpublish"></span> Đóng </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-nhomtin">
            <h2>Quản lý Comment</h2>
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
					<th width="2%"><input type="checkbox" name="all" id="checkall" /></th>
                        <th width="6%">STT</th>
                     
                        <th width="20%">Email </th>
						
                        <th width="20%">Nội dung</th>
                        <th width="20%">Bình luận cho SP</th>
						
                        
                        <th width="12%">Cập nhật</th>
                        <th width="11%">Xử lý</th>
                        <th width="6%">ID</th>
                    </tr>
                </thead>
				
				<tfoot>
                        <tr>
                            <td colspan="10"><div class="bulk-actions align-left">
                                    <select name="process">
                                        <option value="0">Lựa chọn</option>
                                        <option value="1">Active</option>
                                        <option value="2">Hủy Active</option>
                                        <option value="3">Delete</option>
                                    </select>
                                    <a class="button" href="#" onclick="process()">Thực hiện</a> </div>
                                <div class="pagination">
                                    <?php
                                        echo $this->Paginator->first('« Đầu ', null, null, array('class' => 'disabled'));     
                                        echo $this->Paginator->prev('« Trước ', null, null, array('class' => 'disabled')); 
                                        echo $this->Paginator->numbers()." ";
                                        echo $this->Paginator->next(' Tiếp »', null, null, array('class' => 'disabled')); 
                                        echo $this->Paginator->last('« Cuối ', null, null, array('class' => 'disabled')); 
                                        echo " Page ".$this->Paginator->counter();
                                    ?>
                                </div>
                                <div class="clear"></div></td>
                        </tr>
                    </tfoot>
				
   
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($Comment as $key => $value) {
                        ?>
                        <tr>
						<td><input type="checkbox" name="chon[<?php echo $value['Comment']['id']; ?>]" value="1" /></td> 
                            <td><?php echo $i++; ?></td>
                            
							<td>
								 <?php echo $value['Comment']['email'] ?>
							</td>
							<td>
								 <?php echo $value['Comment']['content'] ?>
							</td>
							<td>
								 <?php echo $this->requestAction('comment/get_product/'.$value['Comment']['product_id']); ?>
							</td>
							
                       
                            <td><?php echo date('d-m-Y', strtotime($value['Comment']['modified'])); ?></td>
                            <td><!-- Icons --> 
                                 <a href="javascript:confirmDelete('<?php echo DOMAINAD ?>Comment/delete/<?php echo $value['Comment']['id'] ?>')" title="Xóa mục này"><img src="<?php echo DOMAINAD ?>images/icons/cross.png" alt="Xóa" /></a>
                             <?php
                                    if ($value['Comment']['status'] == 0) {
                                        ?>
                                <a href="<?php echo DOMAINAD ?>Comment/active/<?php echo $value['Comment']['id']; ?>" title="Kích hoạt" class="icon-5 info-tooltip"><img src="<?php echo DOMAINAD ?>images/icons/Play-icon.png" alt="Kích hoạt" /></a>
                                <?php
                                    } else {
                                        ?>
                                <a href="<?php echo DOMAINAD ?>Comment/close/<?php echo $value['Comment']['id']; ?>" title="Đóng" class="icon-4 info-tooltip"><img src="<?php echo DOMAINAD ?>images/icons/success-icon.png" alt="Ngắt kích hoạt" /></a>
                                <?php
                                    }
                                    ?>
                            </td>
                            <td align="right"><?php echo $value['Comment']['id']; ?></td>
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