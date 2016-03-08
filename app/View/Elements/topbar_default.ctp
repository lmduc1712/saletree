<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <?php if (AuthComponent::user('type') == 1): ?>
            <li>
                <?php
                echo $this->Html->link('Quản lý người dùng', array(
                    'controller' => 'Users',
                    'action' => 'index'
                ));
                ?>
            </li>
        <?php endif; ?>
        <li>
            <?php
            echo $this->Html->link('Quản lý học viên', array(
                'controller' => 'Students',
                'action' => 'index'
            ));
            ?>
        </li>
        <?php if (AuthComponent::user('type') == 1 || AuthComponent::user('type') == 5): ?>
            <li>
                <?php
                echo $this->Html->link('Quản lý ghi chú', array(
                    'controller' => 'StudentNotifies',
                    'action' => 'index'
                ));
                ?>
            </li>
        <?php endif; ?>
        <li>
            <?php
            echo $this->Html->link('Quản lý lớp học', array(
                'controller' => 'ModuleClasses',
                'action' => 'index'
            ));
            ?>
        </li>
        <?php if (AuthComponent::user('type') == 1): ?>
            <li>
                <?php
                echo $this->Html->link('Quản lý nhật ký', array(
                    'controller' => 'Lessons',
                    'action' => 'index'
                ));
                ?>
            </li>
        <?php endif; ?>
        <?php if (AuthComponent::user('id')): ?>
            <li>
                <?php
                echo $this->Html->link('Thông tin tài khoản', array(
                    'controller' => 'Users',
                    'action' => 'my_info'
                ));
                ?>
            </li>
            <li>
                <?php
                if (!isset($logoutUrl)) {
                    $logoutUrl = array('controller' => 'Users', 'action' => 'logout');
                }
                echo $this->Html->link('Đăng xuất', $logoutUrl);
                ?>
            </li>
        <?php endif; ?>
    </ul>
</div>