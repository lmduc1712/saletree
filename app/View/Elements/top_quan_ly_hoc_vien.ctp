<?php if (count($dangerNotifies) > 0): ?>
    <a href="<?php
    echo $this->Html->url(array(
        "controller" => "StudentNotifies",
        "action" => "index",
        "?" => array("danger" => "true"),
    ));
    ?>">
        <div class="alert alert-danger">
            <h4>
                <?php echo 'Bạn có ' . count($dangerNotifies) . ' ghi chú cần xử lý ngay lập tức !' ?>
            </h4>
        </div>
    </a>
<?php endif; ?>
<?php if (count($notifies) > 0): ?>
    <a href="<?php
    echo $this->Html->url(array(
        "controller" => "StudentNotifies",
        "action" => "index",
        "?" => array("stage" => "0"),
    ));
    ?>">
        <div class="alert alert-warning">
            <h4>
                <?php echo 'Bạn có ' . count($notifies) . ' ghi chú cần phải xử lý !' ?>
            </h4>
        </div>
    </a>
<?php endif; ?>
<div class="col-lg-12">
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
        echo $this->Html->link('Quản lý ghi chú', array(
            'controller' => 'StudentNotifies',
            'action' => 'index'), array(
            'class' => 'btn btn-primary col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-top-7'
        ));
        ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
        <?php
        echo $this->Html->link('Quản lý lớp học', array(
            'controller' => 'ModuleClasses',
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