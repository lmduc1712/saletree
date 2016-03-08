<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li>
            <?php
            echo $this->Html->link('Kiểm tra ứng viên', array(
                'controller' => 'Students',
                'action' => 'checking_contact'
            ));
            ?>
        </li>
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
    </ul>
</div>