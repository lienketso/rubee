<?php
/**
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
 * @package       Cake.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!--
<script type="text/javascript">
	window.location = 'http://rubee.com.vn/';
</script>
-->

<div id="page-title-bar">
				<div id="sphome" class="wrap">
					<div class="overlay-bar"></div>
					<h2 id="page-title"><span><?php echo $name; ?></span></h2>
					<div class="cleared"></div>
				</div>
			</div>
   
   <div id="sphome" class="warn">
        <div class="wrap">
        <div id="sphome" class="warn">
   
            <p class="error">
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php printf(
		__d('cake', 'Không tìm thấy %s '),
		"<strong>'{$url}'</strong>"
	); ?>
</p>
        </p><a href="<?php echo DOMAIN?>" title="Rubee Việt Nam">Về Trang chủ</a>
        <div class="cleared"></div>
        </div>
        </div>
        </div>

<?php
if (Configure::read('debug') > 0 ):
	echo $this->element('exception_stack_trace');
endif;
?>
