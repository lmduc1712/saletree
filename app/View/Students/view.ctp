<div class="students view panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Student'); ?></h3>
    </div>
    <div class="panel-body col-md-6">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
                <tr>
                    <th><?php echo __('STT'); ?></th>
                    <td>
                        <?php echo h($student['Student']['STT']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Họ tên'); ?></th>
                    <td>
                        <?php echo h($student['Student']['hoten']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Email'); ?></th>
                    <td>
                        <?php echo h($student['Student']['email']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Số điện thoại'); ?></th>
                    <td>
                        <?php echo h($student['Student']['dienthoai']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Địa chỉ'); ?></th>
                    <td>
                        <?php echo h($student['Student']['vitri']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Ngày sinh'); ?></th>
                    <td>
                        <?php echo h($student['Student']['birth']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Giới tính'); ?></th>
                    <td>
                        <?php echo $student['Student']['gioitinh'] ? 'Nam' : 'Nữ'; ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th>Nghề nghiệp</th>
                    <td colspan="2">
                        <div class="col-md-12">
                            <p class="col-md-6">
                                <b><?php echo __('Sinh viên'); ?></b><br>
                                <?php echo h($student['Student']['sinhvien']); ?>
                                &nbsp;
                            </p>
                            <p class="col-md-6">
                                <b><?php echo __('Người đi làm'); ?></b><br>
                                <?php echo h($student['Student']['dilam']); ?>
                                &nbsp;
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Tình trạng hôn nhân'); ?></th>
                    <td>
                        <?php echo h($student['Student']['tinhtrang']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Trình độ học vấn'); ?></th>
                    <td>
                        <?php echo h($student['Student']['trinhdo']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Kinh nghiệm'); ?></th>
                    <td>
                        <?php echo h($student['Student']['exp']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Nguồn'); ?></th>
                    <td>
                        <?php echo h($student['Student']['nguon']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Facebook'); ?></th>
                    <td>
                        <?php echo h($student['Student']['why']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Mã điểm'); ?></th>
                    <td>
                        <?php echo h($student['Student']['madiem']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Ngày đăng ký'); ?></th>
                    <td>
                        <?php echo h($student['Student']['date']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <th>Ca học</th>
                    <td colspan="2">
                        <div class="col-md-12">
                            <p class="col-md-3">
                                <b><?php echo __('Ca1'); ?></b><br>
                                <?php echo h($student['Student']['ca1']); ?>
                                &nbsp;
                            </p>
                            <p class="col-md-3">
                                <b><?php echo __('Ca2'); ?></b><br>
                                <?php echo h($student['Student']['ca2']); ?>
                                &nbsp;
                            </p>
                            <p class="col-md-3">
                                <b><?php echo __('Ca3'); ?></b><br>
                                <?php echo h($student['Student']['ca3']); ?>
                                &nbsp;
                            </p>
                            <p class="col-md-3">
                                <b><?php echo __('Ca4'); ?></b><br>
                                <?php echo h($student['Student']['ca4']); ?>
                                &nbsp;
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Ngày học</th>
                    <td colspan="2">
                        <div class="col-md-12">
                            <p class="col-md-3">
                                <b><?php echo __('Thứ 2 4 6'); ?></b><br>
                                <?php echo h($student['Student']['evenday']); ?>
                                &nbsp;
                            </p>
                            <p class="col-md-3">
                                <b><?php echo __('Thứ 3 5 7'); ?></b><br>
                                <?php echo h($student['Student']['oddday']); ?>
                                &nbsp;
                            </p>
                            <p class="col-md-3">
                                <b><?php echo __('Sáng thứ 7'); ?></b><br>
                                <?php echo h($student['Student']['st7']); ?>
                                &nbsp;
                            </p>
                            <p class="col-md-3">
                                <b><?php echo __('Chiều thứ 7'); ?></b><br>
                                <?php echo h($student['Student']['ct7']); ?>
                                &nbsp;
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="panel-body col-md-6" style="padding: 0px; clear: both;">
<!--        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
                <tr>
                    <th class="padding-top-10" style="width:20%;"><?php echo __('Level 1'); ?></th>
                    <td>
                        <div class="col-md-9">
        <?php
        echo $this->Form->input('l1', array(
            'type' => 'checkbox',
            'label' => 'L1',
            'style' => 'width: 20px; height: 20px;',
            'div' => false,
            'checked' => $student['Student']['l1'],
            'disabled' => true,
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
            'options' => Configure::read('level2'),
            'legend' => false,
            'label' => true,
            'style' => 'width: 20px; height: 20px;',
            'value' => $student['Student']['l2'],
            'div' => false,
            'disabled' => true,
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
            'options' => Configure::read('level3'),
            'legend' => false,
            'label' => true,
            'style' => 'width: 20px; height: 20px;',
            'value' => $student['Student']['l3'],
            'div' => false,
            'disabled' => true,
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
            'options' => Configure::read('level4'),
            'legend' => false,
            'label' => true,
            'style' => 'width: 20px; height: 20px;',
            'value' => $student['Student']['l4'],
            'div' => false,
            'disabled' => true,
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
            'options' => Configure::read('level5'),
            'legend' => false,
            'label' => true,
            'style' => 'width: 20px; height: 20px;',
            'value' => $student['Student']['l5'],
            'div' => false,
            'disabled' => true,
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
            'options' => Configure::read('level6'),
            'legend' => false,
            'label' => true,
            'style' => 'width: 20px; height: 20px;',
            'value' => $student['Student']['l6'],
            'div' => false,
            'disabled' => true,
        ));
        ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="padding-top-10"><?php echo __('Level 7'); ?></th>
                    <td>
                        <div class="col-md-9">
        <?php
        echo $this->Form->input('l7', array(
            'type' => 'checkbox',
            'label' => 'L7A',
            'style' => 'width: 20px; height: 20px;',
            'div' => false,
            'checked' => $student['Student']['l7'],
            'disabled' => true,
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
            'options' => Configure::read('level8'),
            'legend' => false,
            'label' => true,
            'style' => 'width: 20px; height: 20px;',
            'value' => $student['Student']['l8'],
            'div' => false,
            'disabled' => true,
        ));
        ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th><?php echo __('Giải trình'); ?></th>
                    <td>
        <?php
        echo $this->Form->input('giaitrinh', array(
            'type' => 'textarea',
            'id' => 'giai-trinh',
            'style' => 'width: 100%;',
            'label' => false,
            'required' => true,
            'disabled' => true,
            'value' => $student['Student']['giaitrinh'],
            'div' => false,
        ));
        ?>
                    </td>
                </tr>
            </tbody>
        </table>-->
        <div class="col-md-12 text-center margin-bottom">
            <?php
            if (AuthComponent::user('type') != 4) {
                echo $this->Html->link('Cập nhật thông tin', array(
                    'controller' => 'students',
                    'action' => 'edit',
                    $student['Student']['STT']), array(
                    'class' => 'btn btn-warning margin-right'
                ));
            }

            echo $this->Html->link('Tạo ghi chú', array(
                'controller' => 'StudentNotifies',
                'action' => 'add',
                $student['Student']['STT']), array(
                'class' => 'btn btn-success margin-right'
            ));

            echo $this->Form->button('Đóng', array(
                'class' => 'btn btn-default',
                'type' => 'button',
                'onclick' => 'javascript:history.back();'
            ));
            ?>
        </div>
    </div>
</div>