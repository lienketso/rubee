<div class="boxleft"style="padding-bottom: 10px;">

           <?php $row1 = $this->requestAction('comment/setting');
            ?>
          
                <div style="font-size:14px;color: #000000;margin-left: 4px">
                 
                    <p style="font-size: 15px;height: 30px;
line-height: 30px; margin-top: 5px;"><img style="float:left;padding-top: 6px;
padding-right: 3px;"src="<?php echo DOMAIN?>images/icon_call.jpg">  Hotline : <span style="font-weight:bold;color: #be0330;"><?php echo $row1['Setting']['hotline'] ?></span></p>
<p style="font-size: 12px;"><img style="padding-left: 8px;"src="<?php echo DOMAIN?>images/icon_email.png"> <?php echo $row1['Setting']['email'] ?> </p>
                </div>
					
            <?php
            $support = $this->requestAction('comment/support');
            foreach ($support as $row) {
                ?>
                <div style="line-height: 21px;
margin-top: 10px;float:left;text-align:center;font-size:12px;color: #000000; margin-left: 5px;width: 208px;"><?php echo $row['Support']['name']; ?> : <span style="color:#be0330;font-weight:bold;"><?php echo $row['Support']['telephone']; ?></span></div>
                <p style="text-align: center;"><!--a style="padding-left: 0px;" border="0" class="a-ya" href="ymsgr:sendIM?<?php echo $row['Support']['yahoo']; ?>">
                        <img style="margin-top: 7px;"class="img-ya" width="80" height="20" border="0" src="http://opi.yahoo.com/online?u=<?php echo $row['Support']['yahoo']; ?>&amp;m=g&amp;t=2&amp;l=us"/>
                    </a>--><a href="skype:<?php echo $row['Support']['skype']; ?>?call"><img style="width: 55px;
height: 25px;" src="<?php echo DOMAIN ?>images/img_sky.gif"/>
                <!--<img src="http://mystatus.skype.com/bigclassic/<?php echo $row['Support']['skype']; ?>" style="border: none;" width="80" height="25" alt="My status" />-->

            </a><br/>
					
					<!--<div style="text-align:center;"><?php echo $row['Support']['telephone']; ?></div>-->
                </p>
            <?php } ?>

</div>
