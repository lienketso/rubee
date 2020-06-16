<div class="content-box"><!-- Start Content Box -->
    <div class="content-box-header">  
        
        <h3>Quản lý ảnh</h3>
        
        <ul class="content-box-tabs">
            <li><a href="#tab1"></a></li> <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2" class="default-tab">Sửa</a></li>
        </ul>
        
        <div class="clear"></div>
        
    </div> <!-- End .content-box-header -->
    <div class="content-box-content">
        
        <div class="tab-content" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
        </div> <!-- End #tab1 -->
        
        <div class="tab-content default-tab" id="tab2">
        
             <?php echo $this->Form->create(null, array( 'url' => DOMAINAD.'link/edit','type' => 'post','enctype'=>'multipart/form-data','name'=>'image')); ?>       
                
                <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                    <p>
                        <label>Tên ảnh</label>
                           <?php echo $this->Form->input('Link.name',array( 'label' => '','class'=>'text-input medium-input datepicker'));?>
                    </p>
  <p>
                        <label>Link Website</label>
                           <?php echo $this->Form->input('Link.website',array( 'label' => '','class'=>'text-input medium-input datepicker'));?>
                    </p>
                 <!--   <p>
                        <label>Lĩnh vực hoạt động</label>
                           <?php echo $this->Form->input('Link.area',array( 'label' => '','class'=>'text-input medium-input datepicker'));?>
                    </p>-->
                   

                   <p>
                        <label>Ảnh đại diện</label>
                        <input type="text" size="80" style="height:25px;" name="userfile"  value="<?php echo $edit['Link']['images']?>"> &nbsp;<font color="#FF0000"> <a href="javascript:window.open('<?php echo DOMAINAD; ?>upload_pic1.php','userfile','width=500,height=300');window.history.go(1)" >[ upload ]</a> </font><font color="#FF0000">*</font>(jpg, jpeg, gif, png)
                    </p>
                    <p>
                        <label>Trạng thái</label>
                         <?php echo $this->Form->radio('Link.status', array(0 => 'Chưa Active', 1 => 'Đã Active'), array('value' => '1','legend'=>'')); ?>  
                         <?php echo $this->Form->input('Link.id',array('label'=>''));?>
                    </p>
                    <p>
                        <input class="button" type="submit" value=" Sửa " />
                    </p>
                    
                </fieldset>
                
                <div class="clear"></div><!-- End .clear -->
                
            <?php echo $this->Form->end(); ?>
            
        </div> <!-- End #tab2 -->        
        
    </div> <!-- End .content-box-content -->
 </div>