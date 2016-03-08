<div class="col-lg-12">

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
        <?php
        echo $this->Html->link('Quản lý lớp học', array(
            'controller' => 'ModuleClasses',
            'action' => 'index'), array(
            'class' => 'btn btn-primary col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-top-7'
        ));
        ?>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
        <?php
        echo $this->Html->link('Quản lý học viên', array(
            'controller' => 'Students',
            'action' => 'index'), array(
            'class' => 'btn btn-primary col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-top-7'
        ));
        ?>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
        <?php
        echo $this->Html->link('Thông tin tài khoản', array(
            'controller' => 'Users',
            'action' => 'my_info'), array(
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