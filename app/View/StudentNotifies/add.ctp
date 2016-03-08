
<div class="studentNotifies form panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Thêm ghi chú'); ?></h3>
    </div>
    <div class="panel-body">
        <?php echo $this->Form->create('StudentNotify', array('role' => 'form')); ?>

        <div class="form-group">
            <?php
            echo $this->Form->hidden('student_id', array(
                'class' => 'form-control',
                'type' => 'text',
                'value' => $student['Student']['STT']
            ));

            echo $this->Form->input('student_name', array(
                'class' => 'form-control',
                'type' => 'text',
                'label' => 'Học viên',
                'disabled' => true,
                'value' => $student['Student']['hoten']
            ));
            ?>
        </div>
        <div class="form-group">
            <?php
            echo $this->Form->input('content', array(
                'class' => 'form-control',
                'label' => 'Ghi chú',
                'placeholder' => 'Nội dung ghi chú'
            ));
            ?>
        </div>
        <div class="col-md-12 text-center margin-bottom">
            <?php
            echo $this->Form->submit(__('Submit'), array(
                'class' => 'btn btn-primary margin-right',
                'div' => false
            ));
            ?>
            <?php
            echo $this->Html->link('Đóng', array(
                'controller' => 'StudentNotifies',
                'action' => 'index'), array(
                'class' => 'btn btn-default'
            ));
            ?>
        </div>

<?php echo $this->Form->end() ?>

    </div>
</div>
