<div class="students index panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Kết quả'); ?></h3>
    </div>
    <div class="panel-body">
        <div class="col-md-12">
            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="col-md-3">Tổng số học viên:</div>
                    <div class="col-md-6"><?php echo count($students) ?></div>
                    <div class="clearfix"></div>
                    <div class="col-md-3">Đã gắn mã:</div>
                    <div class="col-md-6"><?php echo $validStudents ?> học viên</div>
                    <div class="clearfix"></div>
                    <div class="col-md-3">Trùng contact:</div>
                    <div class="col-md-6"><?php echo $failStudents ?> học viên</div>

                </div>
                <div style="padding-top: 20px; clear: both;">
                    <div class="col-md-7">
                        <div class="col-md-6 left">
                            <?php
                            echo $this->Html->link("Xuất file excel", array(
                                'controller' => 'students',
                                'action' => 'export_checking_contact',
                                $dateFilter), array(
                                'class' => 'btn btn-default btn-success right col-md-12'
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/><br>
    </div>
</div>

<table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th class="text-center"><?php echo $this->Paginator->sort('STT'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('hoten', 'Họ tên'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('dienthoai', 'Số điện thoại'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('email', 'Email'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('madiem', 'Mã điểm'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('vitri', 'Địa chỉ'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('sid', 'Mã học viên'); ?></th>
            <th class="text-center">Kết quả</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $order => $student): ?>
            <tr>
                <td><?php echo h($student['Student']['STT']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['hoten']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['dienthoai']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['email']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['madiem']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['vitri']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['sid']); ?>&nbsp;</td>
                <td class="text-center">
                    <?php
                    if (array_key_exists('regStatus', $student['Student'])) {
                        if ($student['Student']['regStatus']) {
                            echo '<span class="glyphicon glyphicon-ok text-success"></span>';
                        } else {
                            echo '<span class="glyphicon glyphicon-remove text-danger"></span>';
                        }
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>