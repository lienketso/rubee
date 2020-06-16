  <div id="page-title-bar">
				<div class="wrap" id="sphome">
					<div class="overlay-bar"></div>
					<h2 id="page-title"><span><?php echo $typeName['Cataloguesrec']["name"] ?>/</span></h2>
					<h1 id="page-title-sub"><?php echo $detailNews['Recruitment']["name"]; ?></h1>
					<div class="cleared"></div>
				</div>
			</div>
 <div class="warn" id="sphome">
        <div class="wrap-portfolio portfolio-grid">
        <div class="warn" id="sphome">
        <div class="big-column left" style="padding-top: 50px; padding-bottom: 0px;">
            <?php echo $detailNews['Recruitment']["content"]; ?>
        </div>
        <div class="small-column right" style="padding-top: 50px; background-color: #eee;;">
					       <div class="sidebar-widget">
							<div class="sidebar-widget-title" style="padding-left: 30px;"><span>Bài viết liên quan</span></div> 			
							 <?php foreach ($listRecruitment as $row) { ?>
							<div class="widget-post">
								<div class="widget-post-title1" style="border-style: dotted; border-bottom: thin dotted; font-size: 14px;">
									<a style="color: #555;" href="<?php echo DOMAIN ?>ct-dich-vu/<?php echo $row['Recruitment']['id'] ?>/<?php echo $row['Recruitment']['alias'].'.html' ?>"><?php echo $row['Recruitment']["name"] ?></a>
								</div>
								<div class="cleared"></div>
							</div>
							<?php } ?>
							
						  </div>
		                  </div>
        <div class="cleared"></div>
        </div>
        </div>
        </div>
            
