<div class="lessons view panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Thông tin buổi học'); ?></h3>
    </div>
    <div class="col-md-6">
        <div class="panel-body">
            <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tbody>
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <td>
                            <?php echo h($lesson['Lesson']['id']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Lớp học'); ?></th>
                        <td>
                            <?php echo h($lesson['ModuleClass']['tenlop']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Buổi học ngày:'); ?></th>
                        <td>
                            <?php echo date('Y-m-d', strtotime(h($lesson['Lesson']['ngayhoc']))); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Nội dung'); ?></th>
                        <td>
                            <?php echo h($lesson['Lesson']['noidung']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Bài tập'); ?></th>
                        <td>
                            <?php echo h($lesson['Lesson']['baitap']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Deadline'); ?></th>
                        <td>
                            <?php echo date('Y-m-d', strtotime(h($lesson['Lesson']['deadline']))) ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Note'); ?></th>
                        <td>
                            <?php echo h($lesson['Lesson']['note']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Ngày tạo'); ?></th>
                        <td>
                            <?php echo h($lesson['Lesson']['created']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Người tạo'); ?></th>
                        <td>
                            <?php echo h($lesson['Lesson']['creator']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Ngày cập nhật'); ?></th>
                        <td>
                            <?php echo h($lesson['Lesson']['modified']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Người cập nhật'); ?></th>
                        <td>
                            <?php echo h($lesson['Lesson']['modifier']); ?>
                            &nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-12" style="padding: 0px; clear: both;">
            <!--<div class="col-md-2 margin-top-7" style="padding: 0px;"><strong>Điểm danh</strong></div>-->
            <h3>Điểm danh</h3>
        </div>
        <div class="form-group">
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Mã học viên</th>
                        <th class="text-center">Học viên</th>
                        <th class="text-center">Điểm danh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lesson['Student'] as $order => $student): ?>
                        <tr>
                            <td class="text-center"><?php echo h($student['STT']); ?></td>
                            <td class="text-capitalize">
                                <?php echo h($student['hoten']); ?>
                            </td>
                            <td class="text-center">
                                    <?php $diemdanh = Configure::read('diemdanh'); ?>
                                <?php echo $diemdanh[$student['LessonsStudent']['status']] ?>
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
            'controller' => 'Lessons',
            'action' => 'edit',
            $lesson['Lesson']['id']), array(
            'class' => 'btn btn-warning',
        ));
        ?>
    </div>
    <div class="col-md-12 text-center margin-bottom">
        <?php
        echo $this->Html->link('Xóa nhật ký', array(
            'controller' => 'Lessons',
            'action' => 'delete',
            $lesson['Lesson']['id']), array(
            'class' => 'btn btn-danger',
                ), 'Sau khi xóa sẽ không thể khôi phục lại. Bạn thực sự muốn xóa nhật ký này ?');
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