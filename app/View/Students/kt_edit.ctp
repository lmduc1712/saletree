<?php echo $this->Html->script('level-validation', array('inline' => false)) ?>
<div class="students form panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Chỉnh sửa thông tin học viên'); ?></h3>
    </div>
    <div class="panel-body col-md-6">
        <?php
        echo $this->Form->create('Student', array(
            'role' => 'form',
            'inputDefaults' => array(
                'label' => false
            )
        ));
        echo $this->Form->hidden('STT');
        echo $this->Form->hidden('backCount', array('id' => 'back-count'));
        ?>
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
                <tr>
                    <th><?php echo __('Họ tên'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('hoten', array(
                            'class' => 'form-control',
                            'placeholder' => 'Tên học viên'
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Email'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('email', array(
                            'class' => 'form-control',
                            'placeholder' => 'Địa chỉ email'
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Số điện thoại'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('dienthoai', array(
                            'class' => 'form-control',
                            'placeholder' => 'Điện thoại liên hệ'
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Địa chỉ'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('vitri', array(
                            'class' => 'form-control',
                            'placeholder' => 'Địa chỉ'
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Ngày sinh'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('birth', array(
                            'class' => 'form-control'
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Giới tính'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('gioitinh', array(
                            'class' => 'form-control'
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Nghề nghiệp</th>
                    <td colspan="2">
                        <?php
                        echo $this->Form->input('nghenghiep', array(
                            'class' => 'form-control',
                            'empty' => '',
                            'options' => Configure::read('JOBS')
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Tình trạng hôn nhân'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('tinhtrang', array(
                            'class' => 'form-control',
                            'empty' => '',
                            'options' => Configure::read('STATUS')
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Trình độ học vấn'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('trinhdo', array(
                            'class' => 'form-control',
                            'empty' => '',
                            'options' => Configure::read('LEVEL')
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Kinh nghiệm'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('exp', array(
                            'class' => 'form-control',
                            'empty' => '',
                            'options' => Configure::read('EXP')
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Nguồn'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('nguon', array(
                            'class' => 'form-control'
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Facebook'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('why', array(
                            'class' => 'form-control',
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Mã điểm'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('madiem', array(
                            'class' => 'form-control',
                            'disabled' => true
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Ngày đăng ký'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('date', array(
                            'type' => 'text',
                            'class' => 'form-control',
                            'disabled' => true
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Ca học</th>
                    <td colspan="2">
                        <div class="col-md-12">
                            <p class="col-md-3 text-center">
                                <b><?php echo __('Ca1'); ?></b><br>
                                <?php
                                echo $this->Form->input('ca1', array(
                                    'class' => 'form-control',
                                    'type' => 'checkbox',
                                    'div' => false
                                ));
                                ?>
                                &nbsp;
                            </p>
                            <p class="col-md-3 text-center">
                                <b><?php echo __('Ca2'); ?></b><br>
                                <?php
                                echo $this->Form->input('ca2', array(
                                    'class' => 'form-control',
                                    'type' => 'checkbox',
                                    'div' => false
                                ));
                                ?>
                                &nbsp;
                            </p>
                            <p class="col-md-3 text-center">
                                <b><?php echo __('Ca3'); ?></b><br>
                                <?php
                                echo $this->Form->input('ca3', array(
                                    'class' => 'form-control',
                                    'type' => 'checkbox',
                                    'div' => false
                                ));
                                ?>
                                &nbsp;
                            </p>
                            <p class="col-md-3 text-center">
                                <b><?php echo __('Ca4'); ?></b><br>
                                <?php
                                echo $this->Form->input('ca4', array(
                                    'class' => 'form-control',
                                    'type' => 'checkbox',
                                    'div' => false
                                ));
                                ?>
                                &nbsp;
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Ngày học</th>
                    <td colspan="2">
                        <div class="col-md-12">
                            <p class="col-md-3 text-center">
                                <b><?php echo __('Thứ 2 4 6'); ?></b><br>
                                <?php
                                echo $this->Form->input('evenday', array(
                                    'class' => 'form-control',
                                    'type' => 'checkbox',
                                    'div' => false
                                ));
                                ?>
                                &nbsp;
                            </p>
                            <p class="col-md-3 text-center">
                                <b><?php echo __('Thứ 3 5 7'); ?></b><br>
                                <?php
                                echo $this->Form->input('oddday', array(
                                    'class' => 'form-control',
                                    'type' => 'checkbox',
                                    'div' => false
                                ));
                                ?>
                                &nbsp;
                            </p>
                            <p class="col-md-3 text-center">
                                <b><?php echo __('Sáng thứ 7'); ?></b><br>
                                <?php
                                echo $this->Form->input('st7', array(
                                    'class' => 'form-control',
                                    'type' => 'checkbox',
                                    'div' => false
                                ));
                                ?>
                                &nbsp;
                            </p>
                            <p class="col-md-3 text-center">
                                <b><?php echo __('Chiều thứ 7'); ?></b><br>
                                <?php
                                echo $this->Form->input('ct7', array(
                                    'class' => 'form-control',
                                    'type' => 'checkbox',
                                    'div' => false
                                ));
                                ?>
                                &nbsp;
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="panel-body col-md-6">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
                <tr>
                    <th class="padding-top-10" style="width:20%;"><?php echo __('Level 1'); ?></th>
                    <td>
                        <div class="col-md-9">
                            <?php
                            echo $this->Form->input('l1', array(
                                'type' => 'checkbox',
                                'id' => 'l1',
                                'label' => 'L1',
                                'style' => 'width: 20px; height: 20px;',
                                'onclick' => 'updateLevel("l1")',
                                'div' => false,
                            ));
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="padding-top-10"><?php echo __('Level 2'); ?></th>
                    <td>
                        <div class="col-md-9">
                            <?php
                            echo $this->Form->input('l2', array(
                                'type' => 'radio',
                                'id' => 'l2',
                                'options' => Configure::read('level2'),
                                'required' => true,
                                'class' => 'l2',
                                'legend' => false,
                                'label' => true,
                                'style' => 'width: 20px; height: 20px;',
                                'onclick' => 'updateLevel("l2")',
                                'div' => false,
                                'disabled' => true
                            ));
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="padding-top-10"><?php echo __('Level 3'); ?></th>
                    <td>
                        <div class="col-md-9">
                            <?php
                            echo $this->Form->input('l3', array(
                                'type' => 'radio',
                                'id' => 'l3',
                                'class' => 'l3',
                                'options' => Configure::read('level3'),
                                'required' => true,
                                'legend' => false,
                                'label' => true,
                                'style' => 'width: 20px; height: 20px;',
                                'onclick' => 'updateLevel("l3")',
                                'div' => false,
                                'disabled' => true
                            ));
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="padding-top-10"><?php echo __('Level 4'); ?></th>
                    <td>
                        <div class="col-md-9">
                            <?php
                            echo $this->Form->input('l4', array(
                                'type' => 'radio',
                                'id' => 'l4',
                                'class' => 'l4',
                                'options' => Configure::read('level4'),
                                'legend' => false,
                                'required' => true,
                                'label' => true,
                                'style' => 'width: 20px; height: 20px;',
                                'onclick' => 'updateLevel("l4")',
                                'div' => false,
                                'disabled' => true
                            ));
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="padding-top-10"><?php echo __('Level 5'); ?></th>
                    <td>
                        <div class="col-md-9">
                            <?php
                            echo $this->Form->input('l5', array(
                                'type' => 'radio',
                                'id' => 'l5',
                                'class' => 'l5',
                                'options' => Configure::read('level5'),
                                'required' => true,
                                'legend' => false,
                                'label' => true,
                                'style' => 'width: 20px; height: 20px;',
                                'onclick' => 'updateLevel("l5")',
                                'div' => false,
                                'disabled' => true
                            ));
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="padding-top-10"><?php echo __('Level 6'); ?></th>
                    <td>
                        <div class="col-md-9">
                            <?php
                            echo $this->Form->input('l6', array(
                                'type' => 'radio',
                                'id' => 'l6',
                                'class' => 'l6',
                                'options' => Configure::read('level6'),
                                'required' => true,
                                'legend' => false,
                                'label' => true,
                                'style' => 'width: 20px; height: 20px;',
                                'onclick' => 'updateLevel("l6")',
                                'div' => false,
                                'disabled' => true
                            ));
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="padding-top-10"><?php echo __('Level 8'); ?></th>
                    <td>
                        <div class="col-md-9">
                            <?php
                            echo $this->Form->input('l8', array(
                                'type' => 'radio',
                                'id' => 'l8',
                                'class' => 'l8',
                                'options' => Configure::read('level8'),
                                'required' => true,
                                'legend' => false,
                                'label' => true,
                                'style' => 'width: 20px; height: 20px;',
                                'onclick' => 'updateLevel("l8")',
                                'div' => false,
                                'disabled' => true
                            ));
                            ?>
                        </div>
                </tr>
                <tr>
                    <th class="padding-top-10"><?php echo __('Giải trình'); ?></th>
                    <td>
                        <?php
                        echo $this->Form->input('giaitrinh', array(
                            'type' => 'textarea',
                            'id' => 'giai-trinh',
                            'style' => 'width: 100%;',
                            'required' => true,
                            'disabled' => true,
                            'div' => false,
                        ));
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="col-md-12 text-center margin-bottom">
            <?php
            echo $this->Form->submit(__('Cập nhật'), array(
                'class' => 'btn btn-primary margin-right',
                'div' => false
            ));
            echo $this->Form->button('Đóng', array(
                'class' => 'btn btn-default',
                'type' => 'button',
                'onclick' => 'goback();'
            ));
            ?>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>
