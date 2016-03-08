<?php echo $this->Html->css('topmenu', 'stylesheet');?>
<ul id="menu">
    <li>
        <?php
        echo $this->Html->link(
                '注文管理', array('controller' => 'orders', 'action' => 'index')
        );
        ?>
    </li>
    <li>
        <?php
        echo $this->Html->link(
                'ポイント利用状況', array('controller' => 'point_exchanges', 'action' => 'index')
        );
        ?>
    </li>
</ul>