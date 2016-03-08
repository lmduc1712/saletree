
<div class="moduleClasses form panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Tạo lớp'); ?></h3>
    </div>
    <div class="panel-body">
        <?php
        echo $this->Form->create('ModuleClass', array(
            'role' => 'form',
            'inputDefaults' => array('label' => false)
        ));
        ?>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Tên lớp</strong></div>
            <?php
            echo $this->Form->input('tenlop', array(
                'div' => false,
                'class' => 'form-control',
                'type' => 'text',
                'div' => array(
                    'class' => 'col-md-4'
                ),
                'maxlength' => 100
            ));
            ?>
        </div>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Ngày học</strong></div>
            <?php
            echo $this->Form->input('ngayhoc', array(
                'class' => 'form-control',
                'options' => Configure::read('ngayhoc'),
                'empty' => true,
                'div' => array(
                    'class' => 'col-md-4'
                )
            ));
            ?>
        </div>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Ca học</strong></div>
            <?php
            echo $this->Form->input('cahoc', array(
                'class' => 'form-control',
                'options' => Configure::read('cahoc'),
                'empty' => true,
                'div' => array(
                    'class' => 'col-md-4'
                )
            ));
            ?>
        </div>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Tên giáo viên</strong></div>
            <?php
            echo $this->Form->input('tengv', array(
                'class' => 'form-control',
                'div' => array(
                    'class' => 'col-md-4'
                )
            ));
            ?>
        </div>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Trợ giảng</strong></div>
            <?php
            echo $this->Form->input('trogiang', array(
                'class' => 'form-control',
                'div' => array(
                    'class' => 'col-md-4'
                )
            ));
            ?>
        </div>
        <div class="form-group col-md-offset-3 col-md-4">
            <?php
            echo $this->Form->submit(__('Tạo lớp'), array(
                'class' => 'form-control btn btn-success',
                'div' => array(
                    'class' => 'col-md-4'
                )
            ));
            ?>
        </div>

<?php echo $this->Form->end() ?>

    </div>
</div>