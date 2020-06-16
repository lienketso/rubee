<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
 
 

Router::connect('/', array('controller' => 'home', 'action' => 'index'));
Router::connect('/gioi-thieu.html', array('controller' => 'home', 'action' => 'introduction'));
Router::connect('/chi-tiet-gioi-thieu/*', array('controller' => 'post', 'action' => 'detail'));

Router::connect('/chat', array('controller' => 'contact', 'action' => 'chat'));
Router::connect('/tim-kiem.html', array('controller' => 'product', 'action' => 'search'));

Router::connect('/khach-hang.html', array('controller' => 'news', 'action' => 'khachhang'));

Router::connect('/tuyen-dung/*', array('controller' => 'news', 'action' => 'indexkh'));
Router::connect('/chi-tiet-tin-tuc/*', array('controller' => 'news', 'action' => 'detail'));
Router::connect('/blog/*', array('controller' => 'news', 'action' => 'blog'));
Router::connect('/tags/:slug-:id.html', array('controller' => 'news', 'action' => 'tags'), array( 'pass' => array('slug', 'id')));
Router::connect('/tim-kiem-tin.html', array('controller' => 'news', 'action' => 'search'));

Router::connect('/ct-sp/*', array('controller' => 'product', 'action' => 'detail'));
Router::connect('/demo-01.html', array('controller' => 'product', 'action' => 'demo01'));
Router::connect('/demo-02.html', array('controller' => 'product', 'action' => 'demo02'));
Router::connect('/demo-04.html', array('controller' => 'product', 'action' => 'demo04'));


// Sản phẩm bao bì
Router::connect('/du-an/thiet-ke-bao-bi-nuoc-giai-khat-chanh-muoi.html', array('controller' => 'product', 'action' => 'baobichanhmuoi'));
Router::connect('/du-an/thiet-ke-bao-bi-kem-trang-tien.html', array('controller' => 'product', 'action' => 'baobikemtrangtien'));
Router::connect('/du-an/thiet-ke-bao-bi-banh-ngot-kbell.html', array('controller' => 'product', 'action' => 'banhngotkbell'));
Router::connect('/du-an/thiet-ke-bao-bi-sua-hop-goldhead.html', array('controller' => 'product', 'action' => 'baobigoldhead'));
Router::connect('/du-an/thiet-ke-bao-bi-nuoc-tang-luc-kbel.html', array('controller' => 'product', 'action' => 'nuoctangluckbell'));
Router::connect('/du-an/thiet-ke-bao-bi-cafe-modano.html', array('controller' => 'product', 'action' => 'cafemodano'));
Router::connect('/du-an/thiet-ke-bao-bi-beer-ha-long.html', array('controller' => 'product', 'action' => 'baobibeerhalong'));
Router::connect('/du-an/thiet-ke-bao-bi-nuoc-mam-hai-thinh.html', array('controller' => 'product', 'action' => 'baobihaithinh'));
Router::connect('/du-an/thiet-ke-bao-bi-tinh-dau-dat-viet.html', array('controller' => 'product', 'action' => 'tinhdaudatviet'));

Router::connect('/du-an/thiet-ke-bao-bi-tinh-dau-donavi.html', array('controller' => 'product', 'action' => 'tinhdaudonavi'));

Router::connect('/du-an/thiet-ke-logo-f-b.html', array('controller' => 'product', 'action' => 'thietkelogofb'));
Router::connect('/du-an/thiet-ke-logo-hai-thinh.html', array('controller' => 'product', 'action' => 'thietkelogohaithinh'));
Router::connect('/du-an/thiet-ke-logo-akka.html', array('controller' => 'product', 'action' => 'thietkelogoakka'));
Router::connect('/du-an/thiet-ke-logo-klb.html', array('controller' => 'product', 'action' => 'thietkelogoklb'));
Router::connect('/du-an/thiet-ke-logo-parpa.html', array('controller' => 'product', 'action' => 'thietkelogoparpa'));
Router::connect('/du-an/thiet-ke-logo-vpic.html', array('controller' => 'product', 'action' => 'thietkelogovpic'));
Router::connect('/du-an/thiet-ke-logo-ja-jon.html', array('controller' => 'product', 'action' => 'thietkelogojajon'));
Router::connect('/du-an/thiet-ke-logo-gia-an.html', array('controller' => 'product', 'action' => 'logogiaan'));
Router::connect('/du-an/thiet-ke-logo-green-ocean.html', array('controller' => 'product', 'action' => 'logogreenocean'));
Router::connect('/du-an/thiet-ke-logo-hung-thinh-phat-bio.html', array('controller' => 'product', 'action' => 'logohungthinhphat'));
Router::connect('/du-an/thiet-ke-logo-minh-phat.html', array('controller' => 'product', 'action' => 'logominhphat'));
Router::connect('/du-an/thiet-ke-logo-baria.html', array('controller' => 'product', 'action' => 'logobaria'));
Router::connect('/du-an/thiet-ke-logo-siton.html', array('controller' => 'product', 'action' => 'logositon'));
Router::connect('/du-an/thiet-ke-logo-du-lich-sai-gon.html', array('controller' => 'product', 'action' => 'logodulichsaigon'));
Router::connect('/du-an/thiet-ke-logo-en-roses.html', array('controller' => 'product', 'action' => 'logoenroses'));
Router::connect('/du-an/thiet-ke-logo-duc-toan.html', array('controller' => 'product', 'action' => 'logoductoan'));
Router::connect('/du-an/thiet-ke-logo-hamzaa.html', array('controller' => 'product', 'action' => 'logohamzaa'));
Router::connect('/du-an/thiet-ke-logo-lam-viet.html', array('controller' => 'product', 'action' => 'logolamviet'));
Router::connect('/du-an/thiet-ke-logo-tmi.html', array('controller' => 'product', 'action' => 'logotmi'));
Router::connect('/du-an/thiet-ke-logo-sendo.html', array('controller' => 'product', 'action' => 'thietkelogosendo'));
Router::connect('/du-an/thiet-ke-logo-winsea-tech.html', array('controller' => 'product', 'action' => 'logowinsea'));
Router::connect('/du-an/thiet-ke-logo-jawoco.html', array('controller' => 'product', 'action' => 'logojawoco'));
Router::connect('/du-an/thiet-ke-logo-cafe-vamos.html', array('controller' => 'product', 'action' => 'thietkelogovamos'));
Router::connect('/du-an/thiet-ke-logo-dh-audio.html', array('controller' => 'product', 'action' => 'thietkelogodhaudio'));
Router::connect('/du-an/thiet-ke-logo-nha-khoa-hung-cuong.html', array('controller' => 'product', 'action' => 'thietkelogohungcuong'));
Router::connect('/du-an/thiet-ke-logo-glotek.html', array('controller' => 'product', 'action' => 'thietkelogoglotek'));
Router::connect('/du-an/thiet-ke-logo-nat.html', array('controller' => 'product', 'action' => 'thietkelogonat'));

Router::connect('/du-an/thiet-ke-website-amitea.html', array('controller' => 'product', 'action' => 'websiteamitea'));
Router::connect('/du-an/thiet-ke-website-artex.html', array('controller' => 'product', 'action' => 'websiteartex'));
Router::connect('/du-an/thiet-ke-website-indeco.html', array('controller' => 'product', 'action' => 'websiteindeco'));
Router::connect('/du-an/thiet-ke-website-lien-dai-vien.html', array('controller' => 'product', 'action' => 'websiteliendaivien'));
Router::connect('/du-an/thiet-ke-website-long-son.html', array('controller' => 'product', 'action' => 'websitelongson'));
Router::connect('/du-an/thiet-ke-website-roxa-beer.html', array('controller' => 'product', 'action' => 'websiteroxa'));
Router::connect('/du-an/thiet-ke-website-t-t-group.html', array('controller' => 'product', 'action' => 'websitettgroup'));
Router::connect('/du-an/thiet-ke-website-tin-nghia.html', array('controller' => 'product', 'action' => 'websitetinnghia'));
Router::connect('/du-an/thiet-ke-website-siton.html', array('controller' => 'product', 'action' => 'websitesiton'));
Router::connect('/du-an/thiet-ke-website-aquamedia-spa.html', array('controller' => 'product', 'action' => 'websiteaqua'));
Router::connect('/du-an/thiet-ke-website-lalisse.html', array('controller' => 'product', 'action' => 'websitelalisse'));
Router::connect('/du-an/thiet-ke-website-smartdoor.html', array('controller' => 'product', 'action' => 'websitesmardoor'));
Router::connect('/du-an/thiet-ke-website-sumi.html', array('controller' => 'product', 'action' => 'websitesumi'));

Router::connect('/san-pham/*', array('controller' => 'product', 'action' => 'index1'));
Router::connect('/rss', array('controller' => 'product', 'action' => 'rss'));


Router::connect('/ct-dich-vu/*', array('controller' => 'recruitment', 'action' => 'detail'));
Router::connect('/dich-vu/*', array('controller' => 'recruitment', 'action' => 'index1'));

Router::connect('/chi-tiet-tin/*', array('controller' => 'tintuc', 'action' => 'detail'));
Router::connect('/tuyen-dung/*', array('controller' => 'news', 'action' => 'detailtd'));
Router::connect('/chi-tiet-tuyen-dung/*', array('controller' => 'news', 'action' => 'chitiettd'));

Router::connect('/tuyen-dung.html', array('controller' => 'news', 'action' => 'indextd'));
Router::connect('/lien-he.html', array('controller' => 'contact', 'action' => 'index'));
Router::connect('/de-nghi-gui-bao-gia', array('controller' => 'contact', 'action' => 'baogia'));

// Router::connect('/:language/:controller/:action/*', array(), array('language' => '[a-z]{3}'));
Router::connect('/thiet-ke-logo.html', array('controller' => 'product', 'action' => 'thietkelogoo'));

Router::connect('/thiet-ke-logo-moi.html', array('controller' => 'product', 'action' => 'thietkelogonew'));

Router::connect('/nhan-dien-thuong-hieu.html', array('controller' => 'product', 'action' => 'bonhandienthuonghieu'));

Router::connect('/thiet-ke-profile.html', array('controller' => 'product', 'action' => 'thietkeprofile'));
Router::connect('/thiet-ke-bao-bi.html', array('controller' => 'product', 'action' => 'thietkebaobi'));
// Router::connect('/thiet-ke-bao-bi.html', array('controller' => 'product', 'action' => 'thietkebaobi'));
// Router::connect('/thiet-ke-bien-quang-cao.html', array('controller' => 'product', 'action' => 'thietkebienquangcao'));
// Router::connect('/thiet-ke-to-roi.html', array('controller' => 'product', 'action' => 'thietketoroitogap'));
// Router::connect('/thiet-ke-to-gap.html', array('controller' => 'product', 'action' => 'thietketogap'));
 Router::connect('/thiet-ke-ho-so-nang-luc.html', array('controller' => 'product', 'action' => 'thietkehosonangluc'));
// Router::connect('/thiet-ke-brochure.html', array('controller' => 'product', 'action' => 'thietkebrochure'));
// Router::connect('/thiet-ke-catalogue.html', array('controller' => 'product', 'action' => 'thietkecatalogue'));
// Router::connect('/thiet-ke-lich-tet-thiep.html', array('controller' => 'product', 'action' => 'thietkelichtet'));
Router::connect('/thiet-ke-website.html', array('controller' => 'product', 'action' => 'thietkewebsite'));
// Router::connect('/thiet-ke-noi-that.html', array('controller' => 'product', 'action' => 'thietkenoithat'));
// Router::connect('/thiet-ke-poster.html', array('controller' => 'product', 'action' => 'thietkeposter'));
// Router::connect('/thiet-ke-banner.html', array('controller' => 'product', 'action' => 'thietkebanner'));
// Router::connect('/bao-cao-thuong-nien.html', array('controller' => 'product', 'action' => 'thietkebaocao'));
// Router::connect('/thiet-ke-ky-yeu.html', array('controller' => 'product', 'action' => 'thietkekyyeu'));
// Router::connect('/dat-ten-thuong-hieu.html', array('controller' => 'product', 'action' => 'dattenthuonghieu'));
// Router::connect('/sang-tac-sologan.html', array('controller' => 'product', 'action' => 'sangtacsologan'));
// Router::connect('/thiet-ke-sales-kit.html', array('controller' => 'product', 'action' => 'thietkesaleskit'));
Router::connect('/:slug.html', array('controller' => 'product', 'action' => 'danhmucsanpham'), array( 'pass' => array('slug')));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';
