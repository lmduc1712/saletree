
<div class="lessons form panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Nhật ký buổi học'); ?></h3>
    </div>
    <div class="panel-body">
        <?php
        echo $this->Form->create('Lesson', array(
            'role' => 'form',
            'inputDefaults' => array('label' => false)
        ));
        echo $this->Form->hidden('Lesson.id');
        echo $this->Form->hidden('backCount', array('id' => 'back-count'));
        ?>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Tên lớp</strong></div>
            <?php
            echo $this->Form->hidden('ModuleClass.id');
            echo $this->Form->hidden('ModuleClass.tenlop');
            echo $this->Form->input('ModuleClass.tenlop', array(
                'div' => false,
                'type' => 'text',
                'class' => 'form-control',
                'div' => array(
                    'class' => 'col-md-4'
                ),
                'disabled' => true
            ));
            ?>
        </div>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Ngày học</strong></div>
            <?php
            echo $this->Form->input('ngayhoc', array(
                'div' => false,
                'type' => 'text',
                'class' => 'form-control datepicker',
                'div' => array(
                    'class' => 'col-md-4'
                ),
                'value' => date('Y-m-d', strtotime($this->request->data['Lesson']['ngayhoc'])),
                'maxlength' => 10
            ));
            ?>
        </div>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Nội dung</strong></div>
            <?php
            echo $this->Form->input('noidung', array(
                'div' => false,
                'type' => 'textarea',
                'class' => 'form-control',
                'div' => array(
                    'class' => 'col-md-4'
                ),
                'maxlength' => 500
            ));
            ?>
        </div>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Bài tập</strong></div>
            <?php
            echo $this->Form->input('baitap', array(
                'div' => false,
                'type' => 'textarea',
                'class' => 'form-control',
                'div' => array(
                    'class' => 'col-md-4'
                ),
                'maxlength' => 500
            ));
            ?>
        </div>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Deadline</strong></div>
            <?php
            echo $this->Form->input('deadline', array(
                'div' => false,
                'type' => 'text',
                'class' => 'form-control datepicker',
                'div' => array(
                    'class' => 'col-md-4'
                ),
                'value' => date('Y-m-d', strtotime($this->request->data['Lesson']['deadline'])),
                'maxlength' => 10
            ));
            ?>
        </div>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Note</strong></div>
            <?php
            echo $this->Form->input('note', array(
                'div' => false,
                'type' => 'textarea',
                'class' => 'form-control',
                'div' => array(
                    'class' => 'col-md-4'
                ),
                'maxlength' => 500
            ));
            ?>
        </div>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Điểm danh</strong></div>
        </div>
        <div class="form-group">
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Học viên</th>
                        <th class="text-center">Điểm danh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->request->data['Student'] as $order => $student): ?>
                        <tr>
                            <td>
                                <?php
                                echo $this->Form->hidden('Student.' . $order . '.STT');
                                echo $this->Form->hidden('Student.' . $order . '.hoten');
                                echo h($student['hoten']);
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $this->Form->hidden('Student.' . $order . '.LessonsStudent.student_id');
                                echo $this->Form->hidden('Student.' . $order . '.LessonsStudent.lesson_id');
                                echo $this->Form->input('Student.' . $order . '.LessonsStudent.status', array(
                                    'options' => Configure::read('diemdanh'),
                                    'value' => $student['LessonsStudent']['status'],
                                    'class' => 'form-control'
                                ));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="form-group col-md-offset-3 col-md-2">
            <?php
            echo $this->Form->submit(__('Cập nhật'), array(
                'class' => 'form-control btn btn-warning',
                'div' => false
            ));
            ?>
        </div>
        <div class="form-group col-md-2 ">
            <?php
            echo $this->Form->Button('Đóng', array(
                'type' => 'button',
                'class' => 'form-control btn btn-default',
                'onclick' => 'goback();',
                'div' => false
            ));
            ?>
        </div>

        <?php echo $this->Form->end() ?>

    </div>
</div>
