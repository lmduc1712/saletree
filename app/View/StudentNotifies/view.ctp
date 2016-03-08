<div class="studentNotifies view panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Ghi chú học viên'); ?></h3>
    </div>
    <div class="panel-body">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <td>
                        <?php echo h($studentNotify['StudentNotify']['id']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Học viên'); ?></th>
                    <td>
                        <?php echo $this->Html->link($studentNotify['Student']['hoten'], array('controller' => 'students', 'action' => 'view', $studentNotify['Student']['STT'])); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Ghi chú'); ?></th>
                    <td>
                        <?php echo h($studentNotify['StudentNotify']['content']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Ngày tạo'); ?></th>
                    <td>
                        <?php echo h($studentNotify['StudentNotify']['created']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Trạng thái giải quyết'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('stage', array(
                            'label' => false,
                            'type' => 'checkbox',
                            'checked' => $studentNotify['StudentNotify']['stage'],
                            'disabled' => true,
                            'class' => 'form-control'));
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="col-md-12 text-center margin-bottom">
            <?php
            if (!$studentNotify['StudentNotify']['stage']) {
                echo $this->Html->link('Giải quyết', array(
                    'controller' => 'StudentNotifies',
                    'action' => 'solved',
                    $studentNotify['StudentNotify']['id']), array(
                    'class' => 'btn btn-warning'
                ));
            }
            echo '&nbsp;';
            echo $this->Html->link('Đóng', array(
                'controller' => 'StudentNotifies',
                'action' => 'index'), array(
                'class' => 'btn btn-default'
            ));
            ?>
        </div>
    </div>