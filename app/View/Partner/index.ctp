<link type="text/css" href="<?php echo DOMAIN ?>css/phantrang.css" rel="stylesheet" />
<div id='center'>
                        <div class='new-equipment'>
                            <h3>DANH SÁCH</h3>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding:10px;">
                    <?php foreach ($listPartner as $rows) { ?>
                   
                        <tr >
                            <td style="padding:5px;"><div align="justify">
                                    <?php if ($rows['Partner']['images'] != "") { ?>
                                        <div style="float: left; margin-right: 5px;">
										<a target="_blank" href="<?php echo $rows['Partner']['website']?>">
										<img src="<?php echo DOMAINAD.$rows['Partner']['images']; ?>" style="width:120px; height:80px;" class="bdimg" />
										</a>
										</div>
										<div style="width:300px;float:left;">
                                    <?php } ?>
                                   </div>
                                </div>
								</td>
								<td style="padding:5px;">
								<a target="_blank" href="<?php echo $rows['Partner']['website']?>">	
									<?php echo $rows['Partner']['name'];?>
								</a>
								</td>
                        </tr>
                        <tr>
                            <td class="gachngan"></td>
                        </tr>
                    <?php } ?>
                </table></td>
        </tr>
        <tr>
            <td>
                <div class="pagination" style="text-align: center; margin: 4px auto;">
    <?php
       // echo $this->Paginator->first('« Đầu ', null, null, array('class' => 'disabled'));     
        //echo $this->Paginator->prev('« Trước ', null, null, array('class' => 'disabled')); 
        echo $this->Paginator->numbers()." ";
       // echo $this->Paginator->next(' Tiếp »', null, null, array('class' => 'disabled')); 
       // echo $this->Paginator->last('« Cuối ', null, null, array('class' => 'disabled')); 
    ?>
</div>
            </td>
        </tr>
    </table>
</div>

</div>