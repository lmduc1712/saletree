<div class="col-lg-12">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
        <?php
        echo $this->Html->link('Quản lý học viên', array(
            'controller' => 'students',
            'action' => 'index'), array(
            'class' => 'btn btn-primary col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-top-7'
        ));
        ?>
    </div>

    <?php if (AuthComponent::user('id')): ?>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
            <?php
            echo $this->Html->link('Đăng xuất', array(
                'controller' => 'users',
                'action' => 'logout'), array(
                'class' => 'btn btn-primary col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-top-7'
            ));
            ?>
        </div>
    <?php endif; ?>

</div>