<div class="users view panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Thông tin người dùng'); ?></h3>
    </div>
    <div class="panel-body">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <td>
                        <?php echo h($user['User']['id']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Tên đăng nhập'); ?></th>
                    <td>
                        <?php echo h($user['User']['username']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Họ tên'); ?></th>
                    <td>
                        <?php echo h($user['User']['name']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Chức vụ'); ?></th>
                    <td>
                        <?php 
                        $permission = Configure::read('PERMISSION');
                        echo h($permission[$user['User']['type']]); 
                        ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Ngày tạo'); ?></th>
                    <td>
                        <?php echo h($user['User']['created']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Người tạo'); ?></th>
                    <td>
                        <?php echo h($user['User']['creator']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Ngày cập nhật'); ?></th>
                    <td>
                        <?php echo h($user['User']['modified']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Người cập nhật'); ?></th>
                    <td>
                        <?php echo h($user['User']['modifier']); ?>
                        &nbsp;
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="col-md-12 text-center margin-bottom">
            <?php
            echo $this->Html->link('Cập nhật thông tin', array(
                'controller' => 'users',
                'action' => 'edit',
                $user['User']['id']), array(
                'class' => 'btn btn-warning',
            ));
            ?>
        </div>
        <div class="col-md-12 text-center margin-bottom">
            <?php
            echo $this->Html->link('Xóa người dùng', array(
                'controller' => 'Users',
                'action' => 'delete',
                $user['User']['id']), array(
                'class' => 'btn btn-danger',
                    ), 'Sau khi xóa sẽ không thể khôi phục lại. Bạn thực sự muốn xóa người dùng này ?');
            ?>
        </div>
        <div class="col-md-12 text-center margin-bottom">
            <?php
            echo $this->Form->button('Đóng', array(
                'class' => 'btn btn-default',
                'type' => 'button',
                'onclick' => 'javascript:history.back();'
            ));
            ?>
        </div>
    </div>
</div>