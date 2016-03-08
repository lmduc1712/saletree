<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<?php $this->layout = 'error'; ?>
<?php $this->set('panelTitle', 'Lỗi'); ?>
<?php echo $this->Html->css('error-common'); ?>
<p class="error">
<div class="hidden-sm hidden-xs">
    <div id="ribbon">
    <p>Không thể tìm thấy trang này.<br>Vui lòng kiểm tra lại đường dẫn.</p>
</div>
</div>

<div class="visible-sm visible-xs">
    <div id="ribbon-sm">
    <p>Không thể tìm thấy trang này.<br>Vui lòng kiểm tra lại đường dẫn.</p>
</div>
</div>
<?php

if (Configure::read('debug') > 0):
    echo $this->element('exception_stack_trace');
endif;
?>
