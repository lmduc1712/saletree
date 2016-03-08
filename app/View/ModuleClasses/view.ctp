<div class="moduleClasses view panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Thông tin lớp học'); ?></h3>
    </div>

    <div class="panel-body">
        <div class="col-md-6">
            <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tbody>
                    <tr>
                        <th><?php echo __('Tên lớp'); ?></th>
                        <td>
                            <?php echo h($moduleClass['ModuleClass']['tenlop']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Ngày học'); ?></th>
                        <td>
                            <?php $ngayhoc = Configure::read('ngayhoc'); ?>
                            <?php echo $ngayhoc[$moduleClass['ModuleClass']['ngayhoc']]; ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Ca học'); ?></th>
                        <td>
                            <?php $cahoc = Configure::read('cahoc'); ?>
                            <?php echo $cahoc[$moduleClass['ModuleClass']['cahoc']]; ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Tên giáo viên'); ?></th>
                        <td>
                            <?php echo h($moduleClass['ModuleClass']['tengv']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Trợ giảng'); ?></th>
                        <td>
                            <?php echo h($moduleClass['ModuleClass']['trogiang']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Ngày tạo'); ?></th>
                        <td>
                            <?php echo h($moduleClass['ModuleClass']['created']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Người tạo'); ?></th>
                        <td>
                            <?php echo h($moduleClass['ModuleClass']['creator']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Ngày chỉnh sửa'); ?></th>
                        <td>
                            <?php echo h($moduleClass['ModuleClass']['modified']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Người chỉnh sửa'); ?></th>
                        <td>
                            <?php echo h($moduleClass['ModuleClass']['modifier']); ?>
                            &nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
        <div class="col-md-12" style="padding: 0px; clear: both;">
            <!--<div class="col-md-2 margin-top-7" style="padding: 0px;"><strong>Điểm danh</strong></div>-->
            <h3>Danh sách lớp</h3>
        </div>
        <div class="form-group">
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Mã học viên</th>
                        <th class="text-center">Học viên</th>
                        <th class="text-center">Số điện thoại</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($moduleClass['Student'] as $order => $student): ?>
                        <tr>
                            <td class="text-center"><?php echo h($student['STT']); ?></td>
                            <td class="text-capitalize">
                                <?php echo h($student['hoten']); ?>
                            </td>
                            <td class="text-center">
                                <?php echo h($student['dienthoai']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
        <div class="col-md-12 text-center margin-bottom">
            <?php
            echo $this->Html->link('Cập nhật thông tin', array(
                'controller' => 'ModuleClasses',
                'action' => 'edit',
                $moduleClass['ModuleClass']['id']), array(
                'class' => 'btn btn-warning',
            ));
            ?>
        </div>
        <div class="col-md-12 text-center margin-bottom">
            <?php
            echo $this->Html->link('Xem nhật ký lớp học', array(
                'controller' => 'Lessons',
                'action' => 'class_index',
                $moduleClass['ModuleClass']['id']), array(
                'class' => 'btn btn-info',
            ));
            ?>
        </div>
        <div class="col-md-12 text-center margin-bottom">
            <?php
            echo $this->Html->link('Xóa lớp', array(
                'controller' => 'ModuleClasses',
                'action' => 'delete',
                $moduleClass['ModuleClass']['id']), array(
                'class' => 'btn btn-danger',
                    ), 'Sau khi xóa sẽ không thể khôi phục lại. Bạn thực sự muốn xóa lớp này ?');
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