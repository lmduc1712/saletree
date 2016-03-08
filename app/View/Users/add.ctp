
<div class="users form panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Thêm người dùng'); ?></h3>
    </div>
    <div class="panel-body">
        <?php echo $this->Form->create('User', array('role' => 'form')); ?>

        <div class="form-group">
            <?php
            echo $this->Form->input('username', array(
                'class' => 'form-control',
                'placeholder' => 'Tên đăng nhập',
                'label' => 'Tên đăng nhập'
            ));
            ?>
        </div>
        <div class="form-group">
            <?php
            echo $this->Form->input('password', array(
                'class' => 'form-control',
                'placeholder' => 'Mật khẩu',
                'label' => 'Mật khẩu'
            ));
            ?>
        </div>
        <div class="form-group">
            <?php
            echo $this->Form->input('name', array(
                'class' => 'form-control',
                'placeholder' => 'Họ tên',
                'label' => 'Họ tên'
            ));
            ?>
        </div>
        <div class="form-group">
            <?php
            echo $this->Form->input('type', array(
                'class' => 'form-control',
                'label' => 'Chức vụ',
                'options' => Configure::read('PERMISSION')
            ));
            ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->hidden('creator', array('value' => AuthComponent::user('username'))); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->hidden('modifier', array('value' => AuthComponent::user('username'))); ?>
        </div>
        <div class="form-group">
            <?php
            echo $this->Form->submit(__('Tạo người dùng'), array(
                'class' => 'btn btn-primary margin-right',
                'div' => false
                )); 
            echo $this->Form->button('Đóng', array(
                'class' => 'btn btn-default',
                'type' => 'button',
                'onclick' => 'javascript:history.back();'
            ));
            ?>
        </div>

        <?php echo $this->Form->end() ?>

    </div>
</div>
