<?php
$setActive = $this->request->url;
$setActive = explode("/", $setActive);
$setActive = $setActive[0];
$tabindex = "";

?>
<script type="text/javascript">
    ddaccordion.init({
        headerclass: "submenuheader",
        contentclass: "submenu",
        revealtype: "click",
        mouseoverdelay: 200,
        collapseprev: true,
        defaultexpanded: [<?php echo $tabindex; ?>],
        onemustopen: false,
        animatedefault: false,
        persiststate: false,
        toggleclass: ["", ""],
        animatespeed: "fast",
        oninit:function(headers, expandedindices){
            //do nothing
        },
        onopenclose:function(header, index, state, isuseractivated){
            //do nothing
        }
    })
</script>

<div id="sidebar">
    <div id="sidebar-wrapper">
        <h1 id="sidebar-title"><a href="#"></a></h1>
        <a href="#"><img id="logo" src="<?php echo DOMAINAD ?>images/logo.png" alt="Design by Quảng cáo vip" /></a>
        <div id="profile-links"> Xin chào, <a href="#" title="Edit your profile"><?php echo $this->Session->read('name'); ?></a><br />
            <br />
            <a href="<?php echo DOMAIN; ?>" title="View the Site" target="_blank">Xem trang chủ</a> | <a href="<?php echo DOMAINAD ?>login/logout" title="Sign Out">Thoát</a> </div>
        <div id="list">
            <ul id="main-nav">
                <li id="arrayorder_1"> <a href="<?php echo DOMAINAD ?>home" class="nav-top-item no-submenu"> Trang chủ </a> </li>
              
             	 <li id="arrayorder_3"> <a href="#" class="nav-top-item submenuheader"> Quản lý tin tức</a>
                    <div class="submenu">
                        <ul>
    <li><a href="<?php echo DOMAINAD ?>catalogues" >Danh mục tin tức</a></li>
                            <li><a href="<?php echo DOMAINAD ?>news">Danh sách tin tức</a></li>
                        </ul>
                    </div>
                </li>
 <li id="arrayorder_3"> <a href="#" class="nav-top-item submenuheader"> Quản lý sản phẩm</a>
                    <div class="submenu">
                        <ul>
    <li><a href="<?php echo DOMAINAD ?>catproducts" >Danh mục</a></li>
                            <li><a href="<?php echo DOMAINAD ?>products">Danh sách</a></li>
                        </ul>
                    </div>
                </li>
 <li id="arrayorder_3"> <a href="#" class="nav-top-item submenuheader"> Quản lý dự án</a>
                    <div class="submenu">
                        <ul>
    <li><a href="<?php echo DOMAINAD ?>danhmucs" >Danh mục</a></li>
                            <li><a href="<?php echo DOMAINAD ?>tintucs">Danh sách</a></li>
                        </ul>
                    </div>
                </li>				
	 <li id="arrayorder_3"> <a href="#" class="nav-top-item submenuheader"> Quản lý dịch vụ</a>
                    <div class="submenu">
                        <ul>
    <li><a href="<?php echo DOMAINAD ?>cataloguesrec" >Danh mục</a></li>
                            <li><a href="<?php echo DOMAINAD ?>recruitment">Danh sách</a></li>
                        </ul>
                    </div>
                </li>
<li id="arrayorder_4"> <a href="<?php echo DOMAINAD ?>doitac" class="nav-top-item">Tags</a> </li>				
                <li id="arrayorder_4"> <a href="<?php echo DOMAINAD ?>settings" class="nav-top-item">Cấu hình</a> </li>


		<li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>supports" class="nav-top-item">Quản lý hỗ trợ trực tuyến</a> </li>   
	   <li id="arrayorder_4"> <a href="<?php echo DOMAINAD ?>posts" class="nav-top-item">Quản lý giới thiệu</a> </li>
			
	
                           
								   <li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>administrators" class="nav-top-item">Quản lý tài khoản</a> </li>

              
            </ul>
        </div>
    </div>
</div>
