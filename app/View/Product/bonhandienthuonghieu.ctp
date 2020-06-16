<?php 
//echo $this->Session->read('language'); die;
if($this->Session->read('language')=='vie') 
{  
  include('../Vendor/lang_vn.php');
  $duoi=null; 
} 
elseif($this->Session->read('language')=='chi') 
{  
  include('../Vendor/lang_chi.php');
  $duoi="_chi"; 
} 
else { $duoi="_eg"; include('../Vendor/lang_eng.php');
 }?>
<link rel="stylesheet" href="<?php echo DOMAIN?>Animations/theme-elements.css">
<link rel="stylesheet" href="<?php echo DOMAIN?>Animations/animation.css">
<link rel="stylesheet" href="<?php echo DOMAIN?>Animations/theme-animate.css">
<link href="<?php echo DOMAIN?>css/font-awesome.css" rel="stylesheet">
<script src="<?php echo DOMAIN?>Animations/js/modernizr.js"></script>
    
<script src="<?php echo DOMAIN?>Animations/js/jquery.appear.js"></script>
<script src="<?php echo DOMAIN?>Animations/js/theme.js"></script>
<script src="<?php echo DOMAIN?>Animations/js/custom.js"></script>
<script src="<?php echo DOMAIN?>Animations/js/theme.init.js"></script>
 <link rel="stylesheet" href="<?php echo DOMAIN?>Animations/bootstrap.css"> 
<link rel="stylesheet" href="<?php echo DOMAIN?>Animations/gioithieucss.css"> 

<script type="text/javascript" src="<?php echo DOMAIN?>/fancybox/lib/jquery-1.10.1.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo DOMAIN?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?php echo DOMAIN?>/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="<?php echo DOMAIN?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

<!-- hover img -->
<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>/fancybox/css/main-style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>/fancybox/css/font-awesome.css" media="screen" />


<script src="<?php echo DOMAIN?>Animations/js/bootstrap.min.js"></script>   
<div class="banner_bonhandien">
    <div class="wrap">
        <div class="left">
            <h1>THIẾT KẾ NHẬN DIỆN THƯƠNG HIỆU <br/>CHUYÊN NGHIỆP</h1>
            <div class="line_banner"></div>
            <p>Sự kết hợp giữa kinh nghiệm tích lũy nhiều năm trong ngành, quy trình làm việc chuyên nghiệp và sự sáng tạo không ngừng, Rubee sẽ giúp doanh nghiệp sở hữu bộ nhận diện thương hiệu ấn tượng và duy nhất</p>
             <button class="btn_tuvan"><img src="<?php echo DOMAIN?>nhandienthuonghieu/icon_phone.png" alt="icon phone" class="">TƯ VẤN MIỄN PHÍ</button>
        </div>
    </div>
</div>
<div class="wrap" id="sphome">
    <div class="portfolio-top">
        <div id="portfolio-section-des">
            <div class="row">
                <div class="col-sm-6">
                    <div class="media">
                        <div class="media-left">
                            <img alt="thiết kế hồ sơ năng lực là gì?" class="media-object" src="<?php echo DOMAIN?>nhandienthuonghieu/icon_thiet_ke.png"></div>
                        <div class="media-body">
                            <div class="mediatop">
                                Thiết kế bộ nhận diện thương hiệu </div>
                            <div class="mediabottom">
                                tại Rubee đem lại</div>
                        </div>
                    </div>
                    <div class="dongke">
                        &nbsp;</div>
                    <div class="media">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">Tư vấn tận tình và chuyên sâu về cách thức xây dựng bộ nhận diện thương hiệu chuyên nghiệp, hiệu quả.</span></span></div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">Đảm bảo truyền tải tốt nhất thông điệp, tầm nhìn, sứ mệnh, sự chuyên nghiệp và uy tín của doanh nghiệp đến khách hàng tiềm năng.</span></span></div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">Thiết kế bộ nhận diện cho doanh nghiệp vừa mang tính thẩm mỹ vừa phù hợp với đặc trưng doanh nghiệp.</span></span></div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">Đảm bảo bộ sản phẩm cuối có thể bảo hộ thương hiệu và nhất quán với hình ảnh thương hiệu.</span></span></div>
                    </div>
                     <div class="media">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">Tạo hình ảnh mới mẻ cho thương hiệu, bắt kịp với xu thế của thời đại.</span></span></div>
                    </div>
                </div>
                <div class="col-sm-6">
                     <div class="media">
                        <div class="media-left">
                            <img alt="Hệ thống nhận diện thương hiệu là gì?" class="media-object" src="<?php echo DOMAIN?>nhandienthuonghieu/icon_he_thong.png"></div>
                        <div class="media-body">
                            <div class="mediatop">
                                Hệ thống nhận diện thương hiệu  </div>
                            <div class="mediabottom">
                                là gì?</div>
                        </div>
                    </div>
                    <div class="dongke">
                        &nbsp;</div>

                    <div class="media">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">Hệ thống nhận diện thương hiệu là sự diễn đạt bản sắc của một công ty thông qua các thông điệp hình ảnh, ngôn ngữ, màu sắc, cách thức truyền thông...</span></span></div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">Mục tiêu của hệ thống nhận diện thương hiệu không chỉ là tạo sự nhận biết, sự khác biệt, thể hiện cá tính đặc thù doanh nghiệp mà còn nhắm đến việc tác động đến nhận thức, tạo cảm giác về quy mô của doanh nghiệp là lớn, tính chuyên nghiệp cao của doanh nghiệp đối với khách hàng và công chúng.</span></span></div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                        </div>
                        <div class="media-body">
                           <img src="<?php echo DOMAIN?>nhandienthuonghieu/bo-nhan-dien-thuong-hieu.jpg" alt="Bộ nhận diện thương hiệu" class="img-responsive">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer_b nangtamthuonghieu">
    <div class="wrap">
        <div class="left">
            <img src="<?php echo DOMAIN?>nhandienthuonghieu/icon_phone_color.png" alt="Icon phone" class="icon">
            <h3>XÂY DỰNG NHẬN DIỆN THƯƠNG HIỆU CHUYÊN NGHIỆP<br/>NÂNG TẦM GIÁ TRỊ THƯƠNG HIỆU VIỆT </h3>
            <button class="btn_tuvan">LIÊN HỆ TƯ VẤN NGAY</button>
        </div>
        <div class="right">
            <img src="<?php echo DOMAIN?>nhandienthuonghieu/img-nang-tam-thuong-hieu.png" alt="Tôi muốn tư vấn" class="">
        </div>
    </div>
</div>
<div class="wrap" id="sphome">
    <div class="portfolio-top">
        <div id="portfolio-section-des">
            <div class="row">
                <div class="col-sm-6">
                    <div class="media">
                        <div class="media-left">
                            <img alt="Bộ nhận diện thương hiệu" class="media-object" src="<?php echo DOMAIN?>nhandienthuonghieu/icon_bao_gom.png"></div>
                        <div class="media-body">
                            <div class="mediatop">
                                Bộ nhận diện thương hiệu </div>
                            <div class="mediabottom">
                                bao gồm:</div>
                        </div>
                    </div>
                    <div class="dongke">
                        &nbsp;</div>
                    <div class="media">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">BỘ NHẬN DIỆN THƯƠNG HIỆU  CỐT LÕI</span></span>
                            <ul>
                                <li>Tên thương hiệu</li>
                                <li>Câu khẩu hiệu (slogan)</li>
                                <li>Logo</li>
                            </ul>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">BỘ NHẬN DIỆN THƯƠNG HIỆU VĂN PHÒNG</span></span>
                            <ul>
                                <li>Danh thiếp</li>
                                <li>Giấy viết thư</li>
                                <li>Tiêu đề thư</li>
                                <li>Phong bì thư</li>
                                <li>Hóa đơn </li>
                                <li>Thẻ nhân viên</li>
                                <li>Đồng phục nhân viên</li>
                            </ul>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">BỘ NHẬN DIỆN THƯƠNG HIỆU VĂN PHÒNG</span></span>
                             <ul>
                                <li>Danh thiếp</li>
                                <li>Giấy viết thư</li>
                                <li>Tiêu đề thư</li>
                                <li>Phong bì thư</li>
                                <li>Hóa đơn </li>
                                <li>Thẻ nhân viên</li>
                                <li>Đồng phục nhân viên</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">
                    
                    <div class="media left_loaibonnhandien">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">BỘ NHẬN DIỆN THƯƠNG HIỆU NGOÀI TRỜI</span></span>
                             <ul>
                                <li>Biển hiệu công ty</li>
                                <li>Biển hiệu trước văn phòng</li>
                                <li>Biển hiệu đại lý</li>
                                <li>Biển quảng cáo</li>
                                <li>Băng rôn </li>
                                <li>Phương tiện vận tải</li>
                                <li>Phương tiện thi công</li>
                            </ul>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">BỘ NHẬN DIỆN THƯƠNG HIỆU MARKETING</span></span>
                            <ul>
                                <li>Brochure</li>
                                <li>Catalogue</li>
                                <li>Hồ sơ năng lực</li>
                                <li>Tờ rơi, tờ gấp</li>
                                <li>Website </li>
                                <li>Landing page</li>
                                <li>Facebook Fanpage</li>
                                <li>Video quảng cáo</li>
                                <li>Banner ads</li>
                                <li>Email marketing</li>
                            </ul>
                        </div>
                    </div>
                   <div class="media">
                        <div class="media-left">
                            <img alt="iconcheck" class="iconcheck" src="http://rubee.com.vn/images/hsnl/iconcheck.png"></div>
                        <div class="media-body">
                            <span style="color:#333333;"><span style="font-size:14px;">BỘ NHẬN DIỆN THƯƠNG HIỆU QUÀ TẶNG</span></span>
                            <ul>
                                <li>Bút - Sổ tay- Móc khóa - Cốc uống nước</li>
                                <li>Mũ bảo hiểm - Áo mưa - Ô (dù)</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrap" id="sphome">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center; margin-bottom: 40px;  color: #1a1a1a;">
            <h4 style="text-transform: uppercase; font-size: 30px;"><span style="font-size: 18px; padding-bottom: 10px;font-family: 'Roboto-Black';color:#333132">Cam kết dịch vụ từ Rubee</span></h4>
            <div class="line">
                <div class="bg_top">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="item_camket">
                <img src="<?php echo DOMAIN?>nhandienthuonghieu/dam-bao-tien-do.png" alt="Đảm bảo tiến độ theo thỏa thuận">
                <p>Đảm bảo tiến độ theo thỏa thuận</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item_camket">
                <img src="<?php echo DOMAIN?>nhandienthuonghieu/mien-phi-tu-van.png" alt="Miễn phí tư vấn 100%">
                <p>Miễn phí tư vấn 100%</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item_camket">
                <img src="<?php echo DOMAIN?>nhandienthuonghieu/khong-gioi-han-chinh-sua.png" alt="Đảm bảo tiến độ theo thỏa thuận">
                <p>Không giới hạn số lần chỉnh sửa</p>
            </div>
        </div>
        <div class="col-md-3">
             <div class="item_camket">
                <img src="<?php echo DOMAIN?>nhandienthuonghieu/ho-tro-tan-tinh.png" alt="Đảm bảo tiến độ theo thỏa thuận">
                <p>Hỗ trợ tận tình trước-trong-sau khi sử dụng dịch vụ</p>
            </div>
        </div>
    </div>
</div>
<div class="donghanh xaydungthuonghieu">
    <div class="wrap">
        <div class="left">
            <h3>XÂY DỰNG NHẬN DIỆN THƯƠNG HIỆU CHUYÊN NGHIỆP <br/>BÍ QUYẾT NÂNG TẦM THƯƠNG HIỆU VIỆT</h3>
            <p>Bộ nhận diện thương hiệu chuyên nghiệp khẳng định vị thế của một thương hiệu trên thị trường, mở ra những cơ hội hợp tác mới mẻ với nhiều đối tác tiềm năng khi doanh nghiệp đầu tư bài bản và đúng cách.</p>
            <button class="btn_tuvan"><img src="<?php echo DOMAIN?>nhandienthuonghieu/icon_phone_blank.png" alt="icon phone" class="">LIÊN HỆ TƯ VẤN NGAY</button>
        </div>
    </div>
</div>
<div class="wrap" id="sphome">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center; margin-bottom: 40px;  color: #1a1a1a;">
            <h4 style="text-transform: uppercase; font-size: 30px;"><span style="font-size: 18px; padding-bottom: 10px;font-family: 'Roboto-Black';color:#333132">Dự án thiết kế thương hiệu</span></h4>
            <div class="line">
                <div class="bg_top">
                </div>
                <div class="bg_bottom">
                </div>
            </div>
            <span style="margin-top: 15px;display:block;color:#333132">Hãy tham khảo những dự án thiết kế thương hiệu mà Rubee đã thực hiện</span>
        </div>
    </div>
</div>
<div class="wrap" id="sphome">
<div class="list_project">
    <div class="portfolio-grid">
        <?php
            $i=0; 
            foreach ($listProduct as $row) {
            $i++;
        ?>
            <div class="item_project customer-size">
                <div class="project-cell">
                    <div class="project-cell-thumb">
                        <div class="project-cell-thumb-window">
                            <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
                                <img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="http://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
                            </a>

                            <a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>">
                            <div class="project-cell-bg"></div>
                            
                            <div class="project-cell-hover">
                                <div class="project-cell-title">
                                <?php echo $row['Product']["name"]?>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <p><span class="title">Nhận diện thương hiệu</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
                    <h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
                </div>
            </div>
        <?php } ?>                      
        <div class="cleared"></div>
    </div>
</div>
</div>
<br/><br/>
<div class="wrap" id="sphome">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center; margin-bottom: 40px;  color: #1a1a1a;">
            <h4 style="text-transform: uppercase; font-size: 30px;"><span style="font-size: 18px; padding-bottom: 10px;font-family: 'Roboto-Black';color:#333132">QUY TRÌNH THIẾT KẾ BỘ NHẬN DIỆN THƯƠNG HIỆU</span></h4>
            <div class="line">
                <div class="bg_top">
                </div>
            </div>
        </div>
    </div>
    <div class="list_quytrinh">
        <div class="left">
            <div class="step1">
                <h4>TIẾP NHẬN YÊU CẦU</h4>
                <span>01</span>
                <p>Thông qua bản định hướng của khách hàng về lĩnh vực, ngành nghề, dịch vụ, sản phẩm, Rubee sẽ tư vấn kế hoạch triển khai thiết kế nhận diện thương hiệu.</p>
            </div>
            <div class="step3">
                <h4>HIỆU CHỈNH VÀ THỐNG NHẤT</h4>
                <span>03</span>
                <p>Rubee sẽ hiệu chỉnh phù hợp theo yêu cầu. Trường hợp khách chưa chọn được phương án nào, Rubee sẽ tiếp tục gửi mẫu mới cho khách chọn.</p>
            </div>
        </div>
        <div class="center">
            <img src="<?php echo DOMAIN?>nhandienthuonghieu/quy-trinh.png" alt="QUY TRÌNH THIẾT KẾ BỘ NHẬN DIỆN THƯƠNG HIỆU">
        </div>
        <div class="right">
            <div class="step2">
                <h4>PHÁC THẢO Ý TƯỞNG, THIẾT KẾ</h4>
                <span>02</span>
                <p>Khách hàng sẽ nhận được 4 mẫu phác thảo để lựa chọn. Mẫu phác thảo nào được khách hàng chọn sẽ tiếp tục được phát triển và hoàn thiện.</p>
            </div>
            <div class="step4">
                <h4>IN ẤN & BÀN GIAO</h4>
                <span>04</span>
                <p>Rubee sẽ lựa chọn chất liệu in ấn phù hợp nhất với yêu cầu khách hàng và tiến hành bàn giao, thanh lý sản phẩm.</p>
            </div>
        </div>
    </div>
</div>
<br/><br/>
<div class="wrap" id="sphome">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center; margin-bottom: 40px;  color: #1a1a1a;">
            <h4 style="text-transform: uppercase; font-size: 30px;"><span style="font-size: 18px; padding-bottom: 10px;font-family: 'Roboto-Black';color:#333132">TẠI SAO HÀNG NGHÌN DOANH NGHIỆP ĐỒNG HÀNH CÙNG RUBEE?</span></h4>
            <div class="line">
                <div class="bg_top">
                </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="item_taisao">
                <img src="<?php echo DOMAIN?>nhandienthuonghieu/cam-ke-chat-luong.png" alt="CAM KẾT CHẤT LƯỢNG SẢN PHẨM">
                <h4>CAM KẾT CHẤT LƯỢNG SẢN PHẨM</h4>
                <p>Đảm bảo tính thẩm mỹ và phù hợp với đặc trưng doanh nghiệp, tham khảo các dự án Rubee đã triển khai.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item_taisao">
                <img src="<?php echo DOMAIN?>nhandienthuonghieu/thuong-hieu-uy-tin-hang-dau.png" alt="THƯƠNG HIỆU UY TÍN HÀNG ĐẦU">
                <h4>THƯƠNG HIỆU UY TÍN HÀNG ĐẦU</h4>
                <p>Hơn 3000 khách hàng là tập đoàn, doanh nghiệp trong và ngoài nước đã tin tưởng hợp tác với Rubee.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item_taisao">
                <img src="<?php echo DOMAIN?>nhandienthuonghieu/doi-ngu-thiet-ke-chuyen-nghiep.png" alt="ĐỘI NGŨ THIẾT KẾ CHUYÊN MÔN CAO">
                <h4>ĐỘI NGŨ THIẾT KẾ CHUYÊN MÔN CAO</h4>
                <p>Đến từ các trường đại học mỹ thuật được đào tạo bài bản và có kinh nghiệm thực chiến qua hàng nghìn dự án.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item_taisao">
                <img src="<?php echo DOMAIN?>nhandienthuonghieu/tinh-ung-dung-thuc-te-cao.png" alt="TÍNH ỨNG DỤNG THỰC TẾ CAO">
                <h4>TÍNH ỨNG DỤNG THỰC TẾ CAO</h4>
                <p>Các thiết kế được phối cảnh đảm bảo về mặt truyền thông và in ấn phù hợp trên nhiều chất liệu.</p>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-3">
            <div class="item_taisao">
                <img src="<?php echo DOMAIN?>nhandienthuonghieu/dam-bao-tinh-bao-ho-cao.png" alt="ĐẢM BẢO TÍNH BẢO HỘ CAO">
                <h4>ĐẢM BẢO TÍNH BẢO HỘ CAO</h4>
                <p>Thiết kế có khả năng bảo hộ thương hiệu và bạn toàn quyền sở hữu sản phẩm thương hiệu mình.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item_taisao">
                <img src="<?php echo DOMAIN?>nhandienthuonghieu/doi-ngu-tu-van-tan-tinh.png" alt="ĐỘI NGŨ TƯ VẤN TẬN TÌNH">
                <h4>ĐỘI NGŨ TƯ VẤN TẬN TÌNH</h4>
                <p>Quá trình (trước-trong-sau) khi khách hàng sử dụng dịch vụ đều được nhân viên hỗ trợ nhiệt tình, đảm bảo tương tác kịp thời.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item_taisao">
                <img src="<?php echo DOMAIN?>nhandienthuonghieu/gia-canh-tranh.png" alt="GIÁ CẠNH TRANH">
                <h4>GIÁ CẠNH TRANH</h4>
                <p>Rubee luôn duy trì mức giá cạnh tranh nhất để khách hàng có thể sở hữu sản phẩm chất lượng cao hơn số tiền phải chi trả.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item_taisao">
                <img src="<?php echo DOMAIN?>nhandienthuonghieu/tien-do-nhanh.png" alt="TIẾN ĐỘ NHANH">
                <h4>TIẾN ĐỘ NHANH</h4>
                <p>Sở hữu đội ngũ thiết kế lớn và giàu kinh nghiệm có khả năng đáp ứng nhu cầu gấp gáp của khách hàng.</p>
            </div>
        </div>
    </div>
</div>
<div class="donghanh">
    <div class="wrap">
        <div class="left">
            <img src="<?php echo DOMAIN?>nhandienthuonghieu/rubee-dong-hanh.jpg" alt="RUBEE ĐỒNG HÀNH CÙNG DOANH NGHIỆP" class="">
        </div>
        <div class="right">
            <h3>RUBEE ĐỒNG HÀNH CÙNG DOANH NGHIỆP</h3>
            <p>Khởi tạo giá trị thương hiệu <br/> Xây dựng thương hiệu vững mạnh theo thời gian </p>
            <button class="btn_tuvan"><img src="<?php echo DOMAIN?>nhandienthuonghieu/icon_phone_blank.png" alt="icon phone" class="">TÔI MUỐN TƯ VẤN</button>
        </div>
    </div>
</div>
<div class="khachhang"  itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="http://rubee.com.vn/">
    <meta itemprop="logo" content="http://rubee.com.vn/images/logo.png">
    <meta itemprop="image" content="http://rubee.com.vn/logo/jawoco/thiet-ke-logo-jawoco.jpg">
    <meta itemprop="description" content="Cảm nhận của khách hàng về dịch vụ thiết kế logo chuyên nghiệp">
    <div itemtype="http://schema.org/AggregateOffer" itemscope="" itemprop="offers">
        <meta content="64.99" itemprop="highPrice">
        <meta content="0" itemprop="lowPrice">
        <meta content="USD" itemprop="priceCurrency">
        <meta content="70" itemprop="offerCount">
        <meta content="70" itemprop="sku">
    </div>
    <div itemprop="brand" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="RubeeVietNam">
    </div>
    <div class="wrap">
        <h3>Khách hàng nói về chúng tôi</h3>
        <div class="line_cus"></div>
        <div class="rating_c">
            <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                <span class="block-subheader">
                    <span class="stars">
                        <span class="rating">
                            <input name="score" type="radio" id="rating5" value="5" checked="checked"/>
                            <label for="rating5" title="5 stars">☆</label>
                            <input name="score" type="radio" id="rating4" value="4" />
                            <label for="rating4" title="4 stars">☆</label>
                            <input name="score" type="radio" id="rating3" value="3" />
                            <label for="rating3" title="3 stars">☆</label>
                            <input name="score" type="radio" id="rating2" value="2" />
                            <label for="rating2" title="2 stars">☆</label>
                            <input name="score" type="radio" id="rating1" value="1" />
                            <label for="rating1" title="1 stars">☆</label>
                        </span>
                    </span>
                    (<span itemprop="ratingValue">4.8</span> của
                    <span itemprop="bestRating">5</span>)
                    <a href="#"><span itemprop="ratingCount">1030</span> đánh giá từ khách hàng</a>
                </span>
            </div>
        </div>
        <div class="list_customer">

            <div class="item_customer" itemprop="author" itemscope itemtype="http://schema.org/Person">
                <div class="box_customer">
                    <img class="icon_comment2" src="<?php echo DOMAIN?>js/owl-carousel/icon_comment2.png" alt=""/>
                    <h4>THƯƠNG HIỆU TẬP ĐOÀN PICENZA</h4>
                    <p class="type_design">Thiết kế Nhận diện thương hiệu</p>
                    <p class="description">Ông. Dương Tuấn Anh - Trưởng phòng maketingHợp tác với Rubee trong dự án thay đổi bộ nhận diện, Picenza nhận được sự hỗ trợ chuyên nghiệp từ khâu chọn hạng mục, lên ý tưởng và tư vấn suốt quá trình thực hiện. Chúng tôi đã rất an tâm khi cùng Rubee xây dựng phong cách doanh nghiệp.</p>
                    <img class="icon_comment1" src="<?php echo DOMAIN?>js/owl-carousel/icon_comment1.png" alt=""/>
                </div>
                <div class="box_image_cus">
                    <img src="<?php echo DOMAIN?>images/gioithieu/khachhang1.jpg" />
                </div>
            </div>

            <div class="item_customer" itemprop="author" itemscope itemtype="http://schema.org/Person">
                <div class="box_customer">
                    <img class="icon_comment2" src="<?php echo DOMAIN?>js/owl-carousel/icon_comment2.png" alt=""/>
                    <h4>AQUAMEDI SPA</h4>
                    <p class="type_design">Thiết kế Nhận diện thương hiệu</p>
                    <p class="description">Bà. Hoa Hậu Thuỳ Lâm - Chủ cửa hàng Aquamedi Spa. Là khách hàng thường xuyên của công ty hơn hai năm qua, mình cảm thấy rất thoải mái khi được hợp tác cùng Rubee. Hơn 20 hợp đồng thiết kế trong một năm, giúp mình tin tưởng và làm việc lâu dài với Rubee, vì mình cho rằng đó cũng là một duyên thú vị khi mình đi tìm nhà cung cấp tốt.</p>
                    <img class="icon_comment1" src="<?php echo DOMAIN?>js/owl-carousel/icon_comment1.png" alt=""/>
                </div>
                <div class="box_image_cus">
                    <img src="<?php echo DOMAIN?>images/gioithieu/khachhang2.jpg" />
                </div>
            </div>

            <div class="item_customer" itemprop="author" itemscope itemtype="http://schema.org/Person">
                <div class="box_customer">
                    <img class="icon_comment2" src="<?php echo DOMAIN?>js/owl-carousel/icon_comment2.png" alt=""/>
                    <h4>CÔNG TY THUỐC LÁ THANH HOÁ</h4>
                    <p class="type_design">Thiết kế & in ấn Kỷ yếu</p>
                    <p class="description">Ông. Mai Thanh Bình - Phó Giám Đốc. Tôi có thể tìm bất cứ doanh nghiệp agency nào cho thương hiệu của mình nhưng tôi không có thời gian để care những điều mang tính ngoài lề, nên tôi lựa chọn Rubee cho dự án marketing hàng năm của mình bởi chất lượng dịch vụ và sản phẩm mà công ty mang lại sau lần đầu tiên hợp tác.</p>
                    <img class="icon_comment1" src="<?php echo DOMAIN?>js/owl-carousel/icon_comment1.png" alt=""/>
                </div>
                <div class="box_image_cus">
                    <img src="<?php echo DOMAIN?>images/gioithieu/khachhang3.jpg" />
                </div>
            </div>

        </div>
    </div>
</div>
<div class="nguyentac">
    <div class="wrap">
        <div class="left">
            <h3>CÂU HỎI THƯỜNG GẶP</h3>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        
                      <h4 class="panel-title">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                          <span>Mục đích doanh nghiệp cần bộ nhận diện thương hiệu là gì?</span>
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                             +
                        </a>
                      </h4>
                        
                    </div>
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        <p>Bộ nhận diện thương hiệu thể hiện sự chuyên nghiệp của doanh nghiệp, đồng thời có vai trò vô cùng quan trọng trong marketing.</p>
                        
                      </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        
                      <h4 class="panel-title">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                          <span>Doanh nghiệp mới thành lập có cần xây dựng bộ nhận diện thương hiệu không?</span>
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                             +
                        </a>
                      </h4>
                        
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        <p>Sở hữu bộ nhận diện thương hiệu giúp doanh nghiệp mới thể hiện sự nghiêm túc và giúp cho hình ảnh thương hiệu phủ sóng rộng rãi hơn.</p>
                        
                      </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        
                      <h4 class="panel-title">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                          <span>Khi nào doanh nghiệp cần bộ nhận diện thương hiệu?</span>
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                             +
                        </a>
                      </h4>
                        
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        <p>Dù là doanh nghiệp lớn hay nhỏ, mới thành lập hay đang phát triển, bất cứ khi nào có nhu cầu, doanh nghiệp nên triển khai ngay.</p>
                        
                      </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        
                      <h4 class="panel-title">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                          <span>Thiết kế bộ nhận diện thương hiệu mất bao lâu?</span>
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                             +
                        </a>
                      </h4>
                        
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        <p>Một bộ nhận diện thương hiệu gồm rất nhiều các hạng mục, vì vậy tùy vào việc doanh nghiệp chọn những hạng mục nào mà thời gian có thể kéo dài nhanh hay chậm. Thông thường sẽ mất từ 15 ngày đến 30 ngày.</p>
                      </div>
                    </div>
                </div>
    
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        
                      <h4 class="panel-title">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                          <span>Báo giá thiết kế bộ nhận diện thương hiệu?</span>
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                             +
                        </a>
                      </h4>
                        
                    </div>
                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        <p>Giá cho một bộ nhận diện thương hiệu tùy thuộc vào các hạng mục và yêu cầu cụ thể. Khách hàng có thể thiết kế trọn gói bộ nhận diện thương hiệu hoặc chỉ thiết kế một vài hạng mục tùy theo từng giai đoạn phát triển của doanh nghiệp. Chi phí có thể dao động từ vài chục triệu đến hàng trăm triệu tùy từng gói dịch vụ lớn hay nhỏ. Khách hàng có thể liên hệ với Rubee để nhận được báo giá phù hợp nhất với chi phí bỏ ra. </p>
                      </div>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="right">
            <img src="<?php echo DOMAIN?>nhandienthuonghieu/cay_thuong_hieu.png" alt="Cây thương hiệu" class="">
        </div>
    </div>
</div>
<div class="footer_b">
    <div class="wrap">
        <div class="left">
            <img src="<?php echo DOMAIN?>nhandienthuonghieu/icon_phone.png" alt="Icon phone" class="icon">
            <h3>BẠN CẦN TƯ VẤN THIẾT KẾ NHẬN DIỆN THƯƠNG HIỆU ?<br/>LIÊN HỆ NGAY – GIẢI PHÁP TRAO TAY !</h3>
            <button class="btn_tuvan">TÔI MUỐN TƯ VẤN</button>
        </div>
        <div class="right">
            <img src="<?php echo DOMAIN?>nhandienthuonghieu/image_tu_van.png" alt="Tôi muốn tư vấn" class="">
        </div>
    </div>
</div>

<link rel="stylesheet" href="<?php echo DOMAIN?>js/owl-carousel/owl.carousel-2.0.0.css"> 
<link rel="stylesheet" href="<?php echo DOMAIN?>js/owl-carousel/owl.theme.css"> 
<script type="text/javascript" src="<?php echo DOMAIN?>js/owl-carousel/owl.carousel-2.0.0.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('.list_customer').owlCarousel({
        navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsiveclass: true,
        margin: 30,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            468: {
                items: 1,
                nav: true
            },
            768: {
                items: 2,
                nav: true
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    });
    $('.btn_tuvan').click(function(){
        $('.popup_tuvan').css('display','block');
    });
});
</script>
<style>
    @font-face {
        font-family: 'RobotoCondensedBold';
        src: url('/font/roboto/RobotoCondensed-Bold.ttf');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: 'Roboto-Black';
        src: url('/font/roboto/Roboto-Black.ttf');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: 'MyriadProBold';
        src:url('/font/MyriadPro-Bold.ttf')  format('truetype');
    }

    .banner_bonhandien {
        padding-top: 50px;
        padding-bottom: 50px;
        width: 100%;
        background-image: url(/nhandienthuonghieu/banner_bo_nhan_dien.jpg);
        overflow: hidden;
        background-size: cover;
        background-position-x: -250px;
        min-height: 400px;
        margin-top: 76px;
    }
    .line_banner{
        width: 50px;
        height: 5px;
        display: inline-block;
        background-color: #1BBC9B;
        margin-top: 5px;
        margin-bottom: 10px;
    }
    .banner_bonhandien .left{
        width: 45%;
        float: left;
        text-align: center;
        margin-left: 10%;
        padding-top: 50px;
    }

    .banner_bonhandien .left h1{
        color:#fff;
        font-family: 'RobotoCondensedBold' !important;
        font-size: 18px;
        line-height: 24px;
        margin-bottom: 0px;
    }
    .banner_bonhandien .left p{
        color:#fff;
        font-size: 14px;
    }
    .donghanh{
        width: 100%;
        overflow:hidden;
        background-color: #000000;
    }
    .donghanh .left{
        width: 60%;
        float: left;
        overflow:hidden;
    }
    .donghanh .left img{
        max-height: 100%;
    }
     .media-body span{
        font-size: 18px !important;
        color:#333333;
     }
     .media-body ul{
        margin-left: 15px;
     }
     .media-body ul li{
        list-style: initial;
        color:#333333;
     }
    .donghanh .right{
        width: 40%;
        float: right;
    }
    .donghanh .right h3{
        color:#fff;
        float: right;
        font-size: 18px;
        font-family: 'RobotoCondensedBold' !important;
        margin-top: 40px;
        position: relative;
        margin-bottom: 30px;
    }
    .donghanh .right h3:after{
        content: '';
        width: 50px;
        height: 5px;
        right: 0px;
        top: 40px;
        background-color: #1BBC9B;
        position: absolute;
    }
    .item_taisao{
        text-align: center;
    }
    .item_taisao img{
        display: inline-block;
    }
    .item_taisao h4{
        color:#38BAA1;
        font-family: 'RobotoCondensedBold' !important;
        font-size: 16px;
        text-transform: uppercase;
        padding-left: 30px;
        padding-right: 30px;
        margin-top: 10px;
        margin-bottom: 15px;
    }
    .item_taisao p{
        font-size: 14px;
        color:#333333;
    }
    .donghanh .right p{
        color: #fff;
        font-family: 'RobotoCondensedBold' !important;
        font-size: 16px;
        float: right;
        text-align: right;
    }
    .btn_tuvan{
        color: #333333;
        font-size: 14px;
        font-family: 'MyriadProBold';
        height: 40px;
        border-radius: 7px;
        background-color: #1BBC9B;
        padding-left: 15px;
        padding-right: 15px;
        border: none;
        line-height: 43px;
        float:right;
    }
    .nguyentac{
        background-color: #F1F1F1;
        padding-top: 50px;
        padding-bottom: 50px;
        overflow: hidden;
    }
    .nguyentac h3 {
        color: #000;
        font-size: 18px;
        font-family: 'RobotoCondensedBold' !important;
        text-transform: uppercase;
    }
    .nguyentac .left{
        width: 60%;
        float: left;
    }
    .nguyentac .right{
        width: 40%;
        padding-left: 15px;
        float: left;
    }
    .panel-group {
    margin-bottom: 20px;
}
.nguyentac .panel-group .panel {
    border-radius: inherit;
    box-shadow: initial;
    border: none;
    background-color: initial;
}
.nguyentac .panel-default > .panel-heading {
    background-color: initial;
    border-color: initial;
    overflow: hidden;
    border-bottom: none;
    padding-left: 0px;
    border-radius: initial;
    padding-right: 0px;
    padding: 0px;
    margin-bottom: 0px;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body{
    padding-top: 15px;
}
.nguyentac .panel-default > .panel-heading .panel-title {
    float: left;
    border-bottom: 1px solid #B3B3B3;
    width: 100%;
    padding-top: 10px;
    font-family: "RobotoCondensedBold" !important;
    font-size: 14px;
    color: #333333;
    text-transform: initial;
}
.nguyentac .left .panel-default > .panel-heading .panel-title i {
    float: left;
    margin-right: 5px;
    color: #38BAA1;
}
.nguyentac .panel-default > .panel-heading .panel-title span {
    float: left;
}
.nguyentac .panel-default > .panel-heading a {
    float: right;
    width: 20px;
    height: 20px;
    border: 1px solid #B3B3B3;
    text-align: center;
    text-decoration: none;
    line-height: 20px;
    font-size: 16px;
    color: #B3B3B3;
    float: right;
    font-weight: normal;
    padding:0px;
}
.nguyentac .panel-group .panel-heading + .panel-collapse > .panel-body, .nguyentac .panel-group .panel-heading + .panel-collapse > .list-group {
    border-top: none;
    padding: 0px;
    padding-top: 15px;
}
.nguyentac .panel-body p {
    margin-bottom: 15px;
    padding: 0px;
    color:#333333;
}
    .footer_b{
        width: 100%;
        background-color: #38BAA1;
        overflow:hidden;
    }
    .footer_b .left{
        width: 50%;
        float: left;
        padding-left: 25px;
    }
    .footer_b .left img{
        margin-top: 35px;
        margin-bottom: 30px;
    }
    .footer_b .left h3{
        color: #333333;
        line-height: 24px;
        font-size: 18px;
        font-family: 'RobotoCondensedBold' !important;
        margin-bottom: 20px;
        margin-top: 50px;
    }
    .footer_b .left button{
        color: #fff;
        font-size: 14px;
        font-family: 'MyriadProBold';
        height: 40px;
        border-radius: 7px;
        background-color: #231F20;
        padding-left: 15px;
        padding-right: 15px;
        border: none;
        line-height: 43px;
        float: left;
    }
    .item_camket{
        text-align: center;
    }
    .item_camket img{
        max-width: 100%;
    }
    .item_camket p{
        font-family: 'RobotoCondensedBold' !important;
        font-size: 16px;
        color:#333333;
        margin-top: 15px;
    }
    .footer_b .right{
        width: 50%;
        float: left;
        padding-right: 25px;
    }
    .footer_b .right img{
        width: 100%;
    }
    .banner_about{
    width:100%;
    background-image:url('/rubee-banner.jpg');
    background-size: 100%;
    height: 450px;
        background-repeat: no-repeat;
    }
    .banner_about h2{
      display:inline-block;
      margin-top:70px;
      color:#32ab98;
      background-color:#000000;
      padding:5px 10px;
      font-family: 'RobotoCondensedBold' !important;
      font-size:20px;
      margin-bottom:30px;
    }
    .banner_about p{
        color: #fff;
        font-family: 'RobotoCondensedBold' !important;
        font-size: 18px;
        margin-bottom: 0px;
    }
     .banner_about .button_banner{
        margin-top:50px;
     }
    .banner_about .button_banner a{
        display: inline-block;
        color: #32ab98 !important;
        font-size: 14px;
        margin-right: 10px;
        padding: 0px 10px;
        text-transform: uppercase;
        font-family: 'RobotoCondensedBold' !important;
        line-height: 30px;
        height: 28px;
        border-radius: initial;
        background: #000000 none repeat scroll 0 0;
    }
    .banner_about .button_banner a:hover{
        color:#fff !important;
    }
    .btn.download-icon:after{
        display:none;
    }
    .banner_about .button_banner .btn::before,.banner_about .button_banner .portfolio_filter_buttons button::before{
            background: #1bbc9b none repeat scroll 0 0;
    }
    .navbar-fixed-top{
        background-color: #22b5a3;
        box-shadow: 0px 0px 5px #fff;
    }
    #page-title-bar{
        background-color: #22b5a3;
    }

    .khachhang {
        background-color: #F1F1F1;
        width: 100%;
        overflow: hidden;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    .khachhang h3 {
        text-align: center;
        text-transform: uppercase;
        font-family: 'MyriadProBold' !important;
        font-size: 24px;
        color: #686868;
    }
    .line_cus {
    width: 100px;
    height: 2px;
    background-color: #38BAA1;
    margin: auto;
}
.left_loaibonnhandien{
    margin-top: 112px !important;
}
.rating_c {
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
    color: #3C3C3B;
}
.list_quytrinh{
    width: 100%;
}
.list_quytrinh .left{
    float: left;
    text-align: right;
    position: relative;
    padding-right: 0px;
    width: 44%;
    padding-left: 90px;
}

.list_quytrinh .right{
    float: left;
    text-align: left;
    position: relative;
    width: 44%;
    padding-right: 90px;
}
.list_quytrinh .center{
    float: left;
    position: relative;
    width: 12%;
}
.list_quytrinh .center img{
    display: inline-block;
    width: 100%;
}
.list_quytrinh .left .step1{
    position: relative;
}
.list_quytrinh .left span{
    display: block;
    width: 22px;
    height: 22px;
    border-radius: 11px;
    background-color: #1BBC9B;
    color: #333333;
    font-size: 14px;
    line-height: 24px;
    text-align: center;
    font-family: 'RobotoCondensedBold' !important;
    position: absolute;
    right: -13px;
    top: 20px;
    z-index: 9;
}
.list_quytrinh .left .step3{
    position: relative;
    margin-top: 90px;
}
.list_quytrinh .left .step3 span{
    top: 20px;
}
.list_quytrinh .left p{
    padding-right: 30px;
    color:#333333;
}
.list_quytrinh .right span{
    display: block;
    width: 22px;
    height: 22px;
    border-radius: 11px;
    background-color: #1BBC9B;
    color: #333333;
    font-size: 14px;
    line-height: 24px;
    text-align: center;
    font-family: 'RobotoCondensedBold' !important;
    position: absolute;
    left: -13px;
    top: 20px;
    z-index: 9;
}
.list_quytrinh .right .step2{
    position: relative;
    margin-top: 145px;
}
.list_quytrinh .right .step4{
    position: relative;
    margin-top: 120px;
}
.list_quytrinh h4{
    color: #333333;
    font-size: 18px;
    text-transform: uppercase;
    font-family: 'RobotoCondensedBold' !important;
    border-bottom: 1px solid #1BBC9B;
    margin-top: 28px;
    padding-right: 30px;
}
.list_quytrinh .right h4{
    padding-left: 30px;
}
.list_quytrinh .right p{
    padding-left: 30px;
    color:#333333;
}
.project-cell-hover{
    top: initial;
    overflow: hidden;
    bottom: 0px;
    height: auto;
}
.box_customer {
    width: 100%;
    border-radius: 30px;
    background-color: #fff;
    padding: 30px;
    overflow: hidden;
    height: 430px;
    position: relative;
}
.box_customer h4 {
    font-size:16px;
        font-weight:600;
        color:#3C3C3B;
        text-align:center;
        margin-top:0px;
        padding-top:0px;
        line-height:20px;
        margin-bottom:0px;
}
.box_customer p.type_design {
    font-size: 14px;
    color: #38BAA1;
    font-style: italic;
    text-align: center;
    margin-bottom: 0px;
}
.item_customer p.description {
    text-align: justify;
}
.box_customer .icon_comment1 {
    position: absolute;
    right: 30px;
    bottom: 15px;
}
.item_customer .box_image_cus {
    width: 100%;
    text-align: center;
    margin-top: -70px;
}
.item_customer .box_image_cus img {
    display: inline-block;
    width: 140px;
    height: 140px;
    border-radius: 70px;
    border: 5px solid #fff;
}
.list_customer .owl-nav {
    display: none;
}
.block-subheader .rating > input {
    position: absolute;
    margin-left: 0px;
    z-index: 2;
    opacity: 0;
    font-size: initial;
    top: 50%;
    transform: translateY(-50%);
}
.block-subheader .rating, .block-subheader a {
    color: #3C3C3B;
}
.item_project{
        width:33.33%;
        float:left;
        margin-bottom: 15px;
    }
    .project-cell{
        padding:10px;
    }
    .project-cell-bg{
        border-radius:5px;
    }
    #imgviewhome{
        border-radius:initial;
        width:100%;
    }
    .project-cell-title{
        font-family: 'RobotoCondensedBold' !important;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 24px;
        color: #fff;
        text-align: left;
        width: 100%;
        padding: 15px;
        color:#38b9a0;
        text-transform: uppercase;
    }
    .project-cell-bg{
        background-color: rgba(0,0,0,0.7);
    }
    .project-cell-title:before{
        content: '';
        width: 40px;
        height: 5px;
        background-color: #38b9a0;
        position: absolute;
        top: 0px;
    }   
    .line {
        width: 60px;
        height: 10px;
        margin-top: 20px;
        margin: auto;
    }
    .line .bg_top {
        height: 5px;
        width: 100%;
        background-color: #38b9a0;
    }
    .line .bg_bottom {
        height: 5px;
        width: 100%;
        background-color: #080707;
    }
    .box_image{
        width:100%;
        display:block;
        overflow:hidden;
        border-radius:5px;
    }
    .description p {
        width: 100%;
        color: #414042;
        padding-right: 30px;
        padding-left: 10px;
        overflow: hidden;
        margin-bottom: 0px;
        padding-bottom: 0px;
    }
    .description p span.title {
        float: left;
        font-size: 16px;
        font-family: 'RobotoCondensedBold';
    }
    .description p span.view {
        float: right;
        font-size: 12px;
    }
    .description h3 a {
        font-size: 14px;
        color: #414042;
        padding-left: 10px;
        display: block;
        text-transform: initial;
    }
    .btn_tuvan img{
        margin-right: 5px;
        height: 25px;
    }
    .banner_bonhandien .left button{
        display: inline-block;
        float: none;
        color:#fff;
    }
    #header{
        top:0px;
    }
    .media-left {
        min-width: 50px;
    }
    .nangtamthuonghieu{
        background-image: url(/nhandienthuonghieu/bg_nangtam.jpg);
        background-color: initial;
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    .nangtamthuonghieu .left button{
        float: left;
        background-color: #1BBC9B;
        color:#fff;
    }

    .nangtamthuonghieu .right img{
        height: auto;
        width: initial;margin-left: 100px;
    }
    .nangtamthuonghieu .left h3{
        margin-top: 0px;
    }

    .xaydungthuonghieu{
         background-image: url(/nhandienthuonghieu/bg_xaydungthuonghieu.png);
        background-color: initial;
        background-size: cover;
        padding-top: 50px;
        padding-bottom: 50px;
        background-repeat: no-repeat;
        margin-bottom: 50px;
    }
    .xaydungthuonghieu .btn_tuvan{
        background-color: #FFFFFF;
        float: left;
    }
    .xaydungthuonghieu h3{
        font-family: 'RobotoCondensedBold' !important;
        line-height: 24px;
        color:#333333;
        font-size: 18px;
        margin-bottom: 25px;
        position: relative;
    }
    .xaydungthuonghieu h3:after{
        content: '';
        width: 50px;
        height: 5px;
        position: absolute;
        bottom: -10px;
        left: 0px;
        background-color: #fff;
    }
    .xaydungthuonghieu .left{
        width: 50%;
    }
    .xaydungthuonghieu p{
        color:#333333;
        font-family: 'RobotoCondensedBold' !important;
        font-size: 14px;
    }
    .box_image{
        height: initial;
    }
    .item_project:nth-child(3n+1) {
        clear: both;
    }
   
   .description h3{
    padding-top: 0px;
   }
   .btn_tuvan:hover,{
        background-color: #fff;
   }
   .xaydungthuonghieu .btn_tuvan:hover{
        background-color: #38b9a0;
   }
   .banner_bonhandien .left button:hover,.nangtamthuonghieu .left button:hover{
        background-color: #333333;
   }
   .footer_b .left button:hover{
       background-color: #fff;
       color:#333333; 
   }
    @media(max-width:468px){
        .banner_about{
            padding-left:15px;
            padding-right:15px;
            height:auto;
        }
        .banner_about h2{
            margin-top:100px;
            margin-bottom:10px;
        }
        .banner_about .button_banner{
            margin-top:10px;
        }
        .banner_bonhandien{
            margin-top: 0px;
        }
        .description p{
            padding-right: 10px;
        }
        .banner_bonhandien .left{
            width: 100%;
            margin-left: 0px;
        }
        .nangtamthuonghieu{
                background-size: cover;
                padding-bottom: 50px;
        }
        .footer_b .left{
            width: 100%;
        }
        .nangtamthuonghieu .right img{
            display: none;
        }
        .xaydungthuonghieu .left{
            width: 100%;
        }
        .item_project{
            width: 50%;

        }
        .item_project:nth-child(2n+1) {
            clear: both;
        }
        .list_quytrinh .center img{
            display: none;
        }
        .list_quytrinh .left{
            width: 50%;
            padding-left: 0px;
        }
        .list_quytrinh{
            overflow:hidden;
        }
        .list_quytrinh .right{
            width: 50%;
            padding-right: 0px;
        }
        .donghanh .left{
            display: none
        }
        .donghanh .right{
            width: 100%;
            padding-bottom: 50px;
        }
        .nguyentac .left{
            width: 100%;
            padding: 0px;
        }
        .nguyentac .panel-group .panel{
            overflow:hidden;
        }
        .collapse{
            display: none;
        }
        .nguyentac .right{
            width: 100%;
        }
        .nguyentac .right img{
            width: 100%;
        }
        .footer_b .right img{
            display: none;
        }
        .footer_b .left{
            padding-bottom: 50px;
        }
        .footer_b .left h3{
            margin-top: 0px;
        }
        .xaydungthuonghieu .left{
            display: block;
        }
        .left_loaibonnhandien{
            margin-top: -15px !important;
        }
    }

</style>