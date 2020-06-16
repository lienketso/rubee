 <div class="banner_blog">
 	<img src='/banner_blogs.jpg' alt="<?php echo $detailNews['News']["name"]; ?>">
 </div>
<div id="page-title-bar">
	<div class="wrap">
		<div class="overlay-bar"></div>
		<h3 id="page-title"><span>Blog</span></h3>
		<h3 id="page-title-sub"><span>/ <?php echo $typeName['Catalogue']["name"] ?></span></h3>
		<div class="cleared"></div>
	</div>
</div>
<div class="wrap" id="sphome">
	<div class="content">
		<div class="big-column left" style="padding-top: 80px;">
			<div class="post-entry-section">
				<div class="post-entry">		
					<div class="post-entry-top">
						<div class="widget-post-thumb">
							<img class="avatar" style="border-radius: 50%;" src="<?php echo IMAGEAD?>upload/<?php echo $newsAuth['Administrator']['images']?>" title="<?php echo $newsAuth['Administrator']['fullname']?>" alt="<?php echo $newsAuth['Administrator']['fullname']?>">
							<div class="auth-name">
								<span style="font-weight:600; text-transform: uppercase;"><img src="<?php echo DOMAIN?>/images/icon/admin.png" style="padding-bottom: 5px; padding-left: 10px;" alt="<?php echo $newsAuth['Administrator']['fullname']?>" title="<?php echo $newsAuth['Administrator']['fullname']?>"/> <?php echo $newsAuth['Administrator']['fullname']?></span>
							</div>
						</div>
						<h1><a><?php echo $detailNews['News']["name"]; ?></a></h1>
					</div>
					<style type="text/css">
						.widget-post-thumb {
				              clear: both;
				              width:160px;
				              height: 160px;
				              text-align: center;
				        }
				        .post-entry-top h1{
				              margin: 0px; padding: 0px; line-height: 26px; text-align: left;
				        }
				        .post-entry-top h1 a{
				              font-size: 20px;
				              color: #3f3f3f;
				              text-transform: uppercase;
				        }
				        .widget-post-thumb .avatar {
				              width:140px;
				              height: 140px;
				        }
				        .widget-post-thumb .auth-name {
				              padding-top: 10px;
				              text-align: center;
				              padding-bottom: 10px;
				        }
				        .news-cat{
				              width: 100%;
				              padding-top: 10px; 
				              padding-bottom: 10px; 
				              line-height: 20px; 
				              font-size: 16px; 
				              font-style: italic; 
				              color: #666666; 
				              text-transform: uppercase; 
				              font-weight: bold;
				        }
				        .news-summary{
				              margin: 0px; padding-top: 10px; line-height: 22px; font-size: 16px
				          }
				          .news-icon{
				              margin: 0px; line-height: 0px;font-size: 16px; font-style: italic;
				          }
				        .widget-post{
				        	background: url(https://rubee.com.vn/images/dotv51.png) no-repeat scroll 26px 10px rgba(0,0,0,0);
				        }

				      @media screen and (max-width: 768px) {
				          .widget-post-thumb {
				              clear: both;
				              width: 100%; 
				              height: 190px;
				          }
				          .widget-post-thumb avatar {
				              clear: both;
				              width:100px;
				              height:100px;
				          }
				          .widget-post-thumb .auth-name {
				              clear: both;
				              width: 100%;
				          }
				          .news-cat{
				              line-height: 20px; 
				              font-size: 14px; 
				              text-align: left;
				          }
				          .news-summary{
				              margin: 0px; padding-top: 10px; line-height: 22px; font-size: 14px
				          }
				          .news-icon{
				              margin: 0px; line-height: 0px;font-size: 14px; font-style: italic;
				          }
				      }
				    </style>

					<div class="news-cat">
						<p>Chuyên mục: <?php echo $newsCat['Catalogue']["name"] ?></p>
					</div>
	                <div class="post-entry-meta news-icon" style="">
						 <img title="Date" alt="Date" src="<?php echo DOMAIN?>/images/icon/date1.png" style="padding-bottom: 5px;" /> <?php echo $detailNews['News']["created"]; ?> <img alt="view" title="view" src="<?php echo DOMAIN?>/images/icon/view.png" style="padding-bottom: 5px; padding-left: 20px;" /> <?php echo $detailNews['News']["view"] ?> views	 <img src="<?php echo DOMAIN?>/images/icon/edit.png" style="padding-bottom: 5px; padding-left: 20px;" alt="edit" title="edit" /> Số bài: <?php echo $news_count?>
					</div>
					<div class="post-entry-meta news-summary" style="">
						 <p><i><?php echo $newsAuth['Administrator']['summary']?></i></p>
					</div>
					<div class="post-entry-meta" style="width: 100%; margin: 0px; padding-top: 10px; line-height: 22px; font-size: 16px; display: relative;">
						<div class="post-entry-meta-right" style="float: right;">
							<div  style="float: right;">
								<!-- Đặt thẻ này vào nơi bạn muốn Nút +1 kết xuất. -->
								<div class="g-plusone"></div>
								<div class="fb-like" data-href="https://www.facebook.com/rubeebrand" data-width="100" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
							</div>
						</div>
					</div>
					<div class="cleared"></div>
					<div class="post-entry-content" style="margin-top: 30px;">
			        	<?php echo $detailNews['News']["content"]; ?>
					</div>

					<div class="post-entry-content" style="margin-top: 30px;">
			        	<div style="padding: 5px; line-height: 30px" class="sidebar-widget-title">
			        		<span>TAGS:</span> 
			            	<?php
			            		foreach ($tagRalation as $rows) { ?>
				            		<a style="padding: 5px; background-color: #2abda1; color: #666666" href="<?php echo DOMAIN; ?>tags/<?php echo $rows['Doitac']['alias']; ?>-<?php echo $rows['Doitac']['id'].".html"?>"><?php echo $rows['Doitac']["name"]?></a>
			            	<?php } ?>
			            </div>
					</div>
				</div>
			</div>
	        <div>
	        	<div style="background-color: #eee; padding: 5px;" class="sidebar-widget-title">
	        		<span>Các bài viết liên quan</span>
	            </div>
				<div class="column3_11 ">
					<div class="sidebar-widget">
		 				<?php 
	            			$i=0;
	         				foreach ($list_news_relation as $rows) { 
			      				$i++;
	            				if($i%2!=0){
	             		?>
						<div>
							<div class="widget-post">
	            				<div class="widget-post-title1" style="font-size: 14px;">
									<a class="abr" href="<?php echo DOMAIN; ?>chi-tiet-tin-tuc/<?php echo $rows['News']['id']; ?>/<?php echo $rows['News']['alias'].'.html'; ?>"><?php echo $rows['News']["name"]?></a>
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
	                     	foreach ($list_news_relation as $rows) { 
							    $i++;
	                            if($i%2==0){
	                    ?>
						<div>
							<div class="widget-post">
	                            <div class="widget-post-title1" style="font-size: 14px;">
									<a class="abr" href="<?php echo DOMAIN; ?>chi-tiet-tin-tuc/<?php echo $rows['News']['id']; ?>/<?php echo $rows['News']['alias'].'.html'; ?>"><?php echo $rows['News']["name"]?></a>
								</div>
	                        </div>
							<div class="cleared"></div>
						</div>
						<?php }} ?>				
					</div>
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
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like-box" data-href="https://www.facebook.com/rubeebrand" data-height="500" data-show-faces="true" data-stream="false" data-header="false"></div>
        	<div class="sidebar-widget" style="padding-top: 20px; padding-bottom: 10px; position: static;">
                <img src="<?php echo DOMAIN; ?>/images/thiet-ke-logo-rubee.jpg" title="Công ty thiết kế thương hiệu" alt="thiết kế logo" />
                
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
						<a class="abr" href="<?php echo DOMAIN?>blog/<?php echo $row1['Catalogue']["id"] ?>/<?php echo $row1['Catalogue']["alias"].'.html'; ?>" title="<?php echo $row1['Catalogue']["name"]; ?>"><?php echo $row1['Catalogue']["name"]; ?></a>
					</div>
		        </div>
		        <div class="cleared"></div>
				<?php } ?>
			</div>			
		</div><!-- End Small Column -->
		<div class="cleared"></div>
	</div>
</div>
<script type='application/ld+json'>
{
  "@context": "http://schema.org",
  "@type": "Person",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Hà Nội",
    "addressRegion": "Việt Nam",
    "postalCode": "100000",
    "streetAddress": "72 Trần Đăng Ninh, Cầu Giấy"
  },
  "colleague": [
    "https://rubee.com.vn/gioi-thieu.html"
  ],
  "email": "mailto:contact@rubee.com.vn",
  "image": "https://rubee.com.vn/images/logo.png",
  "jobTitle": "Digital Marketer",
"worksFor":"https://rubee.com.vn",
 "name": "<?php echo $newsAuth['Administrator']['fullname']?>",
  "telephone": "(+84) 0936 214 586",
  "url": "https://rubee.com.vn"
}
</script>
<style>
.post-entry-content h1{
	font-size:20px;
}
.post-entry-content h2{
	font-size:18px;
	line-height:24px;
	margin-bottom:15px;
}
.post-entry-content h3{
	font-size:16px;
	line-height:0px;
	margin-bottom:15px;
}
.post-entry-content h4,.post-entry-content h5,.post-entry-content h6{
	font-size:14px;
}
h3#page-title {
    font-family: "Lato",Source Sans Pro !important;
    font-size: 25px;
    line-height: 48px;
    font-style: normal;
    font-weight: 600;
    text-transform: uppercase;
}
h3#page-title {
    float: left;
    display: inline-block;
    padding-right: 6px;
    padding-left: 30px;
}
h3#page-title span {
    color: white;
}
.banner_blog{
	width: 100%;
	padding-top: 50px;
}
.banner_blog img{
	width: 100%;
}
#page-title-bar{
	padding-top: 0px;
}
#page-title-bar .wrap{
	padding:0px;
}
</style>