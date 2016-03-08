
<div class="users form panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Cập nhật thông tin người dùng'); ?></h3>
    </div>
    <div class="panel-body">
        <?php echo $this->Form->create('User', array('role' => 'form')); ?>
        <?php echo $this->Form->hidden('id'); ?>
        <?php echo $this->Form->hidden('backCount', array('id' => 'back-count')); ?>
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
                'class' => 'form-control margin-bottom',
                'value' => '',
                'required' => false,
                'label' => 'Đổi mật khẩu'
            ));
            ?>
            <p>* Bỏ trống nếu không muốn thay đổi mật khẩu</p>
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
            echo $this->Form->submit(__('Cập nhật'), array(
                'class' => 'btn btn-success margin-right',
                'div' => false
            ));
            echo $this->Form->button('Đóng', array(
                'class' => 'btn btn-default',
                'type' => 'button',
                'onclick' => 'goback();'
            ));
            ?>
        </div>
        <?php echo $this->Form->end() ?>
    </div>
</div>