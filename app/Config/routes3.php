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
//Router::connect('/video/*', array('controller' => 'tin', 'action' => 'index'));
//Router::connect('/video.html', array('controller' => 'tin', 'action' => 'index'));
//Router::connect('/ban-do', array('controller' => 'home', 'action' => 'bando'));
Router::connect('/chat', array('controller' => 'contact', 'action' => 'chat'));

Router::connect('/khach-hang.html', array('controller' => 'news', 'action' => 'khachhang'));

Router::connect('/tin-tuc/*', array('controller' => 'news', 'action' => 'index'));
Router::connect('/tuyen-dung/*', array('controller' => 'news', 'action' => 'indexkh'));
Router::connect('/chi-tiet-tin-tuc/*', array('controller' => 'news', 'action' => 'detail'));
Router::connect('/blog/*', array('controller' => 'news', 'action' => 'blog'));
//Router::connect('/chi-tiet-blog/*', array('controller' => 'news', 'action' => 'detailblog'));

//Router::connect('/ds-sp/*', array('controller' => 'product', 'action' => 'index'));

//Router::connect('/thiet-ke-logo/', array('controller' => 'product', 'action' => 'index'));
Router::connect('/ct-sp/*', array('controller' => 'product', 'action' => 'detail'));
Router::connect('/san-pham/*', array('controller' => 'product', 'action' => 'index1'));
Router::connect('/rss', array('controller' => 'product', 'action' => 'rss'));

Router::connect('/hoi-dap.html', array('controller' => 'home', 'action' => 'hoidap'));
Router::connect('/ct-dich-vu/*', array('controller' => 'recruitment', 'action' => 'detail'));
Router::connect('/dich-vu/*', array('controller' => 'recruitment', 'action' => 'index1'));
Router::connect('/dich-vu.html', array('controller' => 'tintuc', 'action' => 'index'));
Router::connect('/danh-sach-tin/*', array('controller' => 'tintuc', 'action' => 'index'));
Router::connect('/chi-tiet-tin/*', array('controller' => 'tintuc', 'action' => 'detail'));
Router::connect('/tuyen-dung/*', array('controller' => 'news', 'action' => 'detailtd'));

Router::connect('/tuyen-dung.html', array('controller' => 'news', 'action' => 'indextd'));
Router::connect('/lien-he.html', array('controller' => 'contact', 'action' => 'index'));
Router::connect('/de-nghi-gui-bao-gia', array('controller' => 'contact', 'action' => 'baogia'));
Router::connect('/tim-kiem.html', array('controller' => 'product', 'action' => 'search'));
Router::connect('/gio-hang', array('controller' => 'product', 'action' => 'viewshopingcart'));
Router::connect('/dat-mua', array('controller' => 'product', 'action' => 'datmua'));
Router::connect('/them-vao-gio/*', array('controller' => 'product', 'action' => 'addshopingcart'));
//Router::connect('/:language/:controller/:action/*', array(), array('language' => '[a-z]{3}'));

//Router::connect('/:language/:controller/:action/*', array(), array('language' => '[a-z]{3}'));
Router::connect('/thiet-ke-logo.html', array('controller' => 'product', 'action' => 'thietkelogo'));
Router::connect('/nhan-dien-thuong-hieu.html', array('controller' => 'product', 'action' => 'nhandienthuonghieu'));
Router::connect('/thiet-ke-bao-bi.html', array('controller' => 'product', 'action' => 'thietkebaobi'));
Router::connect('/thiet-ke-bien-quang-cao.html', array('controller' => 'product', 'action' => 'thietkebienquangcao'));
Router::connect('/thiet-ke-to-roi-to-gap.html', array('controller' => 'product', 'action' => 'thietketoroitogap'));
Router::connect('/thiet-ke-ho-so-nang-luc.html', array('controller' => 'product', 'action' => 'thietkehosonangluc'));
Router::connect('/thiet-ke-brochure.html', array('controller' => 'product', 'action' => 'thietkebrochure'));
Router::connect('/thiet-ke-catalogue.html', array('controller' => 'product', 'action' => 'thietkecatalogue'));
Router::connect('/thiet-ke-lich-tet-thiep.html', array('controller' => 'product', 'action' => 'thietkelichtet'));
Router::connect('/thiet-ke-website.html', array('controller' => 'product', 'action' => 'thietkewebsite'));
Router::connect('/thiet-ke-noi-that.html', array('controller' => 'product', 'action' => 'thietkenoithat'));
Router::connect('/thiet-ke-poster-banner.html', array('controller' => 'product', 'action' => 'thietkeposter'));
Router::connect('/bao-cao-thuong-nien.html', array('controller' => 'product', 'action' => 'thietkebaocao'));
Router::connect('/thiet-ke-ky-yeu.html', array('controller' => 'product', 'action' => 'thietkekyyeu'));

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
