<div class="boxleft">

       <div style="width:245px; overflow:hidden;float:left"> 
                <?php 
                $Support = $this->requestAction('/comment/support');
                foreach($Support as $rows) { ?>
           
                  <div style="width:117px; overflow:hidden;float:left;margin-top: 10px;">
              
                          <div height="40" class="titleNews" style="text-align:center;"><?php echo $rows['Support']['name']; ?></td>
                          <div> <a href="skype:<?php echo $rows['Support']['skype']; ?>?call"><img src="<?php echo DOMAIN ?>images/img_skype.png"/>
                <!--<img src="http://mystatus.skype.com/bigclassic/<?php echo $row['Support']['skype']; ?>" style="border: none;" width="80" height="25" alt="My status" />-->
</div>
						<div><a  border="0" class="a-ya" href="ymsgr:sendIM?<?php echo $rows['Support']['yahoo']; ?>">
                        <img style="margin-top: 0;"class="img-ya" width="100" height="25" border="0" src="http://opi.yahoo.com/online?u=<?php echo $rows['Support']['yahoo']; ?>&amp;m=g&amp;t=2&amp;l=us"/>
                    </a></div>
                      
                      </div>

               
            </a>
           </div>
                <?php } ?>     </div>
				<div style="margin-top: 20px"><img src="<?php echo DOMAIN ?>images/img_hotroonline.png "/></div>
				
</div>
