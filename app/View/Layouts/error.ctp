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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title id="title">
            <?php echo 'Tree Sale System' ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->script(array('jquery-1.11.1.min', 'bootstrap.min'));
        echo $this->Html->css(array('bootstrap.min', 'common'));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <script type="text/javascript">
        <?php echo 'var rootUrl = "' . $this->Html->url('/', true) . '";' ?>
        </script>
    </head>
    <body>
        <?php echo $this->Element('topbar'); ?>
        <div id="container" class="container-fluid">
            <div class="panel-body">
                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <?php //echo $this->element('sql_dump');  ?>
    </body>
</html>