
<div class="moduleClasses form panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Chỉnh sửa thông tin lớp học'); ?></h3>
    </div>
    <div class="panel-body">
        <?php
        echo $this->Form->create('ModuleClass', array(
            'role' => 'form',
            'id' => 'module-class-form',
            'inputDefaults' => array('label' => false)
        ));
        echo $this->Form->hidden('id');
        echo $this->Form->hidden('backCount', array('id' => 'back-count'));
        ?>
        <?php echo $this->Form->hidden('save', array('value' => 0, 'id' => 'save-param')); ?>
        <div class="col-md-6">
            <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
                <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Tên lớp</strong></div>
                <?php
                echo $this->Form->input('tenlop', array(
                    'div' => false,
                    'class' => 'form-control',
                    'type' => 'text',
                    'div' => array(
                        'class' => 'col-md-9'
                    ),
                    'maxlength' => 100
                ));
                ?>
            </div>
            <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
                <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Ngày học</strong></div>
                <?php
                echo $this->Form->input('ngayhoc', array(
                    'class' => 'form-control',
                    'options' => Configure::read('ngayhoc'),
                    'empty' => true,
                    'div' => array(
                        'class' => 'col-md-9'
                    )
                ));
                ?>
            </div>
            <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
                <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Ca học</strong></div>
                <?php
                echo $this->Form->input('cahoc', array(
                    'class' => 'form-control',
                    'options' => Configure::read('cahoc'),
                    'empty' => true,
                    'div' => array(
                        'class' => 'col-md-9'
                    )
                ));
                ?>
            </div>
            <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
                <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Tên giáo viên</strong></div>
                <?php
                echo $this->Form->input('tengv', array(
                    'class' => 'form-control',
                    'div' => array(
                        'class' => 'col-md-9'
                    )
                ));
                ?>
            </div>
            <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
                <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Trợ giảng</strong></div>
                <?php
                echo $this->Form->input('trogiang', array(
                    'class' => 'form-control',
                    'div' => array(
                        'class' => 'col-md-9'
                    )
                ));
                ?>
            </div>
        </div>
        <div class="col-md-6" id="ds-lop">
            <span class="col-md-12 text-center"><strong>DANH SÁCH LỚP</strong></span>
            <span class="col-md-12 text-right margin-bottom" id="siso">Sĩ số: 0</span>
            <?php if (!empty($this->request->data['Student']) && empty($this->request->data['Student']['Student'])): ?>
                <?php foreach ($this->request->data['Student'] as $row): ?>
                    <div class="input-group margin-bottom hocvien" id="hv<?php echo $row['STT'] ?>">
                        <a class="input-group-addon btn btn-danger" href="javascript:removerow(hv<?php echo $row['STT'] ?>);">x</a>
                        <input type="hidden" name="data[Student][Student][<?php echo $row['STT'] ?>]" value="<?php echo $row['STT'] ?>">
                        <span class="input-group-addon"><?php echo $row['STT'] ?></span>
                        <?php
                        echo $this->Form->input('Student.Student.' + $row['STT'], array(
                            'value' => $row['hoten'],
                            'class' => 'form-control',
                            'disabled' => true
                        ));
                        ?>
                        <span class="input-group-addon"><?php echo $row['dienthoai'] ?></span>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <?php if (!empty($studentInfo)): ?>
                <?php foreach ($studentInfo as $row): ?>
                    <div class="input-group margin-bottom hocvien" id="hv<?php echo $row['Student']['STT'] ?>">
                        <a class="input-group-addon btn btn-danger" href="javascript:removerow(hv<?php echo $row['Student']['STT'] ?>);">x</a>
                        <input type="hidden" name="data[Student][Student][<?php echo $row['Student']['STT'] ?>]" value="<?php echo $row['Student']['STT'] ?>">
                        <span class="input-group-addon"><?php echo $row['Student']['STT'] ?></span>
                        <?php
                        echo $this->Form->input('Student.Student.' + $row['Student']['STT'], array(
                            'value' => $row['Student']['hoten'],
                            'class' => 'form-control',
                            'disabled' => true
                        ));
                        ?>
                        <span class="input-group-addon"><?php echo $row['Student']['dienthoai'] ?></span>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="form-group panel panel-primary col-md-12">
            <div class="panel-body">
                <div class="col-md-7" style="padding: 0px; clear: both;">
                    <div class="col-md-12 form-group margin-bottom">
                        <p><b>Hãy nhập điều kiện tìm kiếm học viên</b></p>
                    </div>
                    <div class="col-md-12" style="padding: 0px; clear: both;">
                        <div class="col-md-12">
                            <div>
                                <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;">Tên học viên</div>
                                <?php
                                echo $this->Form->input('hoten', array(
                                    'div' => array(
                                        'class' => 'col-md-7'
                                    ),
                                    'class' => 'form-control',
                                    'type' => 'text',
                                    'maxlength' => 100
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix margin-bottom"></div>
                    <div class="col-md-12" style="padding: 0px; clear: both;">
                        <div class="col-md-12">
                            <div>
                                <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;">Email</div>
                                <?php
                                echo $this->Form->input('email', array(
                                    'div' => array(
                                        'class' => 'col-md-7'
                                    ),
                                    'class' => 'form-control',
                                    'type' => 'text',
                                    'maxlength' => 100
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix margin-bottom"></div>
                    <div class="col-md-12" style="padding: 0px; clear: both;">
                        <div class="col-md-12">
                            <div>
                                <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;">Số điện thoại</div>
                                <?php
                                echo $this->Form->input('dienthoai', array(
                                    'div' => array(
                                        'class' => 'col-md-7'
                                    ),
                                    'class' => 'form-control ',
                                    'type' => 'text',
                                    'maxlength' => 100
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix margin-bottom"></div>
                    <div class="col-md-12" style="padding: 0px; clear: both;">
                        <div class="col-md-12">
                            <div>
                                <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;">Ngày đăng ký</div>
                                <div class="input-daterange input-group col-md-7" style="padding: 0px 15px; margin-bottom: 15px;" >
                                    <?php
                                    echo $this->Form->input(
                                            'fromDate', array(
                                        'div' => false,
                                        'class' => 'form-control from-datepicker must-date half-width',
                                        'type' => 'text',
                                        'maxlength' => 10
                                    ));
                                    ?>
                                    <span class="input-group-addon">~</span>
                                    <?php
                                    echo $this->Form->input('toDate', array(
                                        'div' => false,
                                        'class' => 'form-control to-datepicker must-date half-width',
                                        'type' => 'text',
                                        'maxlength' => 10
                                    ));
                                    ?>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center" style="padding: 0px; clear: both;">
                        <div class="form-group col-md-4 ">
                            <?php
                            echo $this->Form->Button('Tìm kiếm học viên', array(
                                'class' => 'form-control btn btn-warning',
                                'div' => false
                            ));
                            ?>
                        </div>
                        <div class="form-group col-md-4 ">
                            <?php
                            echo $this->Form->Button('Lưu thông tin lớp', array(
                                'type' => 'button',
                                'class' => 'form-control btn btn-success',
                                'onclick' => 'save();',
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
                    </div>

                </div>
                <div class="col-md-5">
                    <table cellpadding="0" cellspacing="0" class="table table-striped">
                        <tbody>
                            <tr>
                                <th class="padding-top-10"><?php echo __('Level 1'); ?></th>
                                <td>
                                    <?php
                                    echo $this->Form->input('l1', array(
                                        'id' => 'l1',
                                        'options' => Configure::read('level1'),
                                        'class' => 'form-control',
                                        'label' => false,
                                        'empty' => 'Tất cả',
                                        'div' => false,
                                    ));
                                    ?>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th class="padding-top-10"><?php echo __('Level 2'); ?></th>
                                <td>
                                    <?php
                                    echo $this->Form->input('l2', array(
                                        'id' => 'l2',
                                        'options' => Configure::read('level2I'),
                                        'class' => 'l2 form-control',
                                        'label' => false,
                                        'empty' => 'Tất cả',
                                        'div' => false,
                                    ));
                                    ?>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th class="padding-top-10"><?php echo __('Level 3'); ?></th>
                                <td>
                                    <?php
                                    echo $this->Form->input('l3', array(
                                        'id' => 'l3',
                                        'class' => 'l3 form-control',
                                        'options' => Configure::read('level3I'),
                                        'label' => false,
                                        'empty' => 'Tất cả',
                                        'div' => false,
                                    ));
                                    ?>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th class="padding-top-10"><?php echo __('Level 4'); ?></th>
                                <td>
                                    <?php
                                    echo $this->Form->input('l4', array(
                                        'id' => 'l4',
                                        'class' => 'l4 form-control',
                                        'options' => Configure::read('level4I'),
                                        'label' => false,
                                        'empty' => 'Tất cả',
                                        'div' => false,
                                    ));
                                    ?>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th class="padding-top-10"><?php echo __('Level 5'); ?></th>
                                <td>
                                    <?php
                                    echo $this->Form->input('l5', array(
                                        'id' => 'l5',
                                        'class' => 'l5 form-control',
                                        'options' => Configure::read('level5I'),
                                        'label' => false,
                                        'empty' => 'Tất cả',
                                        'div' => false,
                                    ));
                                    ?>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th class="padding-top-10"><?php echo __('Level 6'); ?></th>
                                <td>
                                    <?php
                                    echo $this->Form->input('l6', array(
                                        'id' => 'l6',
                                        'class' => 'l6 form-control',
                                        'options' => Configure::read('level6I'),
                                        'label' => false,
                                        'empty' => 'Tất cả',
                                        'div' => false,
                                    ));
                                    ?>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th class="padding-top-10"><?php echo __('Level 7'); ?></th>
                                <td>
                                    <?php
                                    echo $this->Form->input('l7', array(
                                        'id' => 'l7',
                                        'options' => Configure::read('level7'),
                                        'class' => 'form-control',
                                        'label' => false,
                                        'empty' => 'Tất cả',
                                        'div' => false,
                                    ));
                                    ?>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th class="padding-top-10"><?php echo __('Level 8'); ?></th>
                                <td>
                                    <?php
                                    echo $this->Form->input('l8', array(
                                        'id' => 'l8',
                                        'class' => 'l8 form-control',
                                        'options' => Configure::read('level8I'),
                                        'label' => false,
                                        'empty' => 'Tất cả',
                                        'div' => false,
                                    ));
                                    ?>
                                    &nbsp;
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-center">STT</th>
                    <th class="text-center">Họ tên</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Số điện thoại</th>
                    <th class="text-center">Ngày đăng ký</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $order => $student): ?>
                    <tr>
                        <td><?php echo h($student['Student']['STT']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['hoten']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['email']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['dienthoai']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['date']); ?>&nbsp;</td>
                        <td>
                            <?php
                            echo $this->Form->button('Thêm', array(
                                'type' => 'button',
                                'class' => 'btn btn-default',
                                'onclick' => 'addrow(\'' . $student['Student']['STT']
                                . '\',\'' . h($student['Student']['hoten'])
                                . '\',\'' . h($student['Student']['dienthoai'])
                                . '\');'
                            ));
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php echo $this->Form->end() ?>

    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        updateStudentNumber();
    });
    /**
     * Thêm học viên vào lớp
     * @param {string} STT
     * @param {string} hoten
     * @param {string} dienthoai
     * @param {string} email
     * @returns void
     */
    function addrow(STT, hoten, dienthoai) {
        var addContent = '<div class="input-group margin-bottom hocvien" id="hv' + STT + '">';
        addContent += '<a class="input-group-addon btn btn-danger" href="javascript:removerow(hv' + STT + ');">x</a>';
        addContent += '<input type="hidden" name="data[Student][Student][' + STT + ']" value="' + STT + '">';
        addContent += '<span class="input-group-addon">' + STT + '</span>';
        addContent += '<input name="data[Student][Student][100]" value="' + hoten + '" disabled="disabled" class="form-control" type="text">';
        addContent += '<span class="input-group-addon">' + dienthoai + '</span>';
        addContent += '</div>';
        $('#ds-lop').append(addContent);
        updateStudentNumber();
        location.href = '#';
    }

    /**
     * xóa học viên khỏi lớp
     */
    function removerow(id) {
        $(id).remove();
        updateStudentNumber();
    }

    /**
     * Cập nhật sĩ số
     */
    function updateStudentNumber() {
        var siso = $('.hocvien').length;
        $('#siso').text('Sĩ số: ' + siso);
    }

    /**
     * Lưu thông tin lớp
     */
    function save() {
        $('#save-param').val(1);
        $('#module-class-form').submit();
    }

</script>