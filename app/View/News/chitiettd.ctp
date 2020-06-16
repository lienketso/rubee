<div id="page-title-bar">
	<div class="wrap">
		<div class="overlay-bar"></div>
		<h2 id="page-title"><span>Blog</span></h2>
		<h1 id="page-title-sub"><span>/ <?php echo $typeName['Catalogue']["name"] ?></span></h1>
		<div class="cleared"></div>
	</div>
</div>
<div class="wrap" id="sphome">
				<div class="content">
					<div class="big-column left" style="padding-top: 80px;">
						<div class="post-entry-section">
							<div class="post-entry">	
								<div>
									<h1 style="margin: 0px; padding: 0px; line-height: 20px;"><a style="font-size: 18px; color: #3f3f3f;"><?php echo $detailNews['News']["name"]; ?></a></h1>
								</div>
                                <div class="post-entry-meta" style="margin: 0px; padding-top: 20px; line-height: 0px;">
									 <img src="<?php echo DOMAIN?>/images/icon/date.png" style="padding-bottom: 5px;" />  <?php echo $detailNews['News']["created"]; ?>	
                                     <img src="<?php echo DOMAIN?>/images/icon/user.png" style="padding-bottom: 5px; padding-left: 15px;"/>  <?php echo $newsAuth['Administrator']['fullname']?>		
								</div>
								<div class="cleared"></div>
								<div class="post-entry-content">
						        <?php echo $detailNews['News']["content"]; ?>
								</div>
								<p><strong>Số lần xem : <?php echo $detailNews['News']["view"] ?></strong></p>
							</div>				
						</div>
                        
                        <div style="background-color: #eee; padding: 5px;" class="sidebar-widget-title"><span>Các bài viết liên quan</span></div>
						<div class="column3_11 ">

                        <div class="sidebar-widget">
							 <?php 
                                $i=0;
                             foreach ($listNews as $rows) { 
							      $i++;
                                if($i%2!=0){
                                 ?>
							<div>
								<div class="widget-post">
                                <div class="widget-post-title1" style="font-size: 14px;">
									<a class="abr" href="<?php echo DOMAIN; ?>chi-tiet-tuyen-dung/<?php echo $rows['News']['id']; ?>/<?php echo $rows['News']['alias'].'.html'; ?>"><?php echo $rows['News']["name"]?></a>
								</div>
                                </div>
								<div class="cleared"></div>
							</div>
							<?php }} ?>
						</div>
				        </div>
                        <div class="column3_11 ">
                            <div class="sidebar-widget">			
							 <?php 
                                $i=0;
                             foreach ($listNews as $rows) { 
							      $i++;
                                if($i%2==0){
                                 ?>
							<div>
								<div class="widget-post">
                                <div class="widget-post-title1" style="font-size: 14px;">
									<a class="abr" href="<?php echo DOMAIN; ?>chi-tiet-tuyen-dung/<?php echo $rows['News']['id']; ?>/<?php echo $rows['News']['alias'].'.html'; ?>"><?php echo $rows['News']["name"]?></a>
								</div>
                                </div>
								<div class="cleared"></div>
							</div>
							<?php }} ?>
						</div>
                        </div>
					</div>
					<!-- End Big Column -->
					
					<div class="small-column right">
						<div style="background-color: #2abda1; padding-bottom: 30px; padding-top: 30px; text-align: center; border: 10px solid #eee;" class="sidebar-widget-title">
								<span><a style="color: #555;" href="javascript:$zopim.livechat.window.show()">Tư vấn của chuyên gia</a></span>
							</div> 
                        <script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));
						</script>
						<div class="fb-like-box" data-href="https://www.facebook.com/rubeebrand" data-height="500" data-show-faces="true" data-stream="false" data-header="false"></div>
                        <div class="sidebar-widget" style="padding-top: 20px; padding-bottom: 10px; position: static;">
                                <img src="<?php echo DOMAIN; ?>/images/thiet-ke-logo-rubee.jpg" alt="thiết kế logo" />
                                
                                <a class="bottomimg" href="<?php echo DOMAIN; ?>thiet-ke-logo.html">
                                    <img src="<?php echo DOMAIN; ?>/images/btqc.gif" alt="thiết kế" />  
                                </a>
                            </div>
							<div class="sidebar-widget" style="background-color: #eee; padding-top: 30px; padding-bottom: 30px;">
							<div class="sidebar-widget-title" style="padding-left: 30px;"><span>Bài viết Xem nhiều</span></div> 			
							 <?php 
                             $listNews1 = $this->requestAction('comment/tinblog1');
                         
                             foreach ($listNews1 as $rows) {
                             
                                ?>
							<div>
								<div class="widget-post-title1" style="border-style: dotted; border-bottom: thin dotted; font-size: 14px;">
									<a class="abr" href="<?php echo DOMAIN; ?>chi-tiet-tin-tuc/<?php echo $rows['News']['id']; ?>/<?php echo $rows['News']['alias'].'.html'; ?>"><?php echo $rows['News']["name"]?></a>
								</div>
								<div class="cleared"></div>
							</div>
							<?php } ?>
						</div>
                        <div class="sidebar-widget" style="background-color: #eee; padding-top: 30px; padding-bottom: 30px;">
							<div class="sidebar-widget-title" style="padding-left: 30px; "><span>Bài viết nổi bật</span></div> 			
							 <?php 
                                $i=0;
                             foreach ($listNews as $rows) { 
							      $i++;
                                if($i%2==0){
                                 ?>
							<div>
								<div class="widget-post-title1" style="border-style: dotted; border-bottom: thin dotted; font-size: 14px;">
									<a class="abr" href="<?php echo DOMAIN; ?>chi-tiet-tin-tuc/<?php echo $rows['News']['id']; ?>/<?php echo $rows['News']['alias'].'.html'; ?>"><?php echo $rows['News']["name"]?></a>
								</div>
								<div class="cleared"></div>
							</div>
							<?php }} ?>
						</div>
							
							<div class="sidebar-widget" style="background-color: #eee; padding-top: 30px; padding-bottom: 30px; padding-right: 30px;">
							<div class="sidebar-widget-title" style="padding-left: 30px;"><span>Chuyên mục</span></div> 		
						
				<?php $menu1 = $this->requestAction('comment/blog');
				$i=0;
                foreach ($menu1 as $row1) {$i++;
                    ?>
								<div class="widget-post">
                                <div class="widget-post-title1" style="border-style: dotted; border-bottom: thin dotted; font-size: 14px;">
									<a class="abr" href="<?php echo DOMAIN?>blog/<?php echo $row1['Catalogue']["id"] ?>/<?php echo $row1['Catalogue']["alias"].'.html'; ?>" title="<?php echo $row1['Catalogue']["name"]; ?>"><?php echo $row1['Catalogue']["name"];?></a>
								</div>
                                </div>
                                <div class="cleared"></div>
								<?php } ?>
						</div>
					</div><!-- End Small Column -->
					<div class="cleared"></div>
				</div>
			</div>