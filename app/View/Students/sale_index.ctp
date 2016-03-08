
<div class="students index panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Quản lý học viên'); ?></h3>
    </div>
    <div class="panel-body">
        <?php
        echo $this->Form->create('Student', array(
            'type' => 'get',
            'class' => 'form-inline',
            'inputDefaults' => array(
                'div' => false,
                'label' => false,
                'required' => false
            )
        ));
        ?>
        <div class="col-md-7" style="padding: 0px; clear: both;">
            <div class="col-md-12 form-group margin-bottom">
                <p><b>Hãy nhập điều kiện tìm kiếm</b></p>
            </div>
            <div class="col-md-12" style="padding: 0px; clear: both;">
                <div class="col-md-12">
                    <div>
                        <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;">Mã học viên</div>
                        <?php
                        echo $this->Form->input('STT', array(
                            'div' => false,
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
                        <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;">Tên học viên</div>
                        <?php
                        echo $this->Form->input('hoten', array(
                            'div' => false,
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
                            'div' => false,
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
                            'div' => false,
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
                        <div class="input-daterange input-group col-md-8" style="padding: 0px; margin-bottom: 15px;" >
                            <?php
                            echo $this->Form->input('fromDate', array(
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
        <div class="col-md-12">
            <div class="col-md-8">
                <div style="padding-top: 20px; clear: both;">
                    <div class="col-md-5 left">
                        <div class="col-md-7 left margin-bottom">
                            <?php
                            echo $this->Form->button('Tìm kiếm', array(
                                'type' => 'submit',
                                'div' => false,
                                'class' => 'btn btn-primary right col-md-12'
                            )); //search button 
                            ?>
                        </div>
                        <div class="col-md-5 right">
                            <?php
                            echo $this->Html->link('Đóng', array(
                                'controller' => 'top',
                                'action' => 'index'), array(
                                'div' => false,
                                'class' => 'btn btn-default left col-md-12'
                            )); //close button 
                            ?>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="col-md-6 left">
                            <?php
                            echo $this->Html->link(
                                    "Thêm học viên mới", array(
                                'controller' => 'students',
                                'action' => 'add'), array(
                                'class' => 'btn btn-default btn-success right col-md-12'
                                    )
                            ); //new student button
                            ?>
                        </div>
                        <div class="col-md-4 left">
                            <?php
                            echo $this->Html->link(
                                    "Lọc", array(
                                'controller' => 'students',
                                'action' => 'loc_contact'), array(
                                'class' => 'btn btn-default right col-md-12 loc-color'
                                    )
                            ); //distinct button
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/><br>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
<table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th class="text-center"><?php echo $this->Paginator->sort('STT'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('hoten', 'Họ tên'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('dienthoai', 'Số điện thoại'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('email', 'Email'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('madiem', 'Mã Điểm'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $order => $student): ?>
            <tr onmouseover="changeColor(this, true);" 
                onmouseout="changeColor(this, false);" 
                onclick="DoNav('<?php
                echo $this->Html->url(array(
                    'controller' => 'students',
                    'action' => 'view',
                    $student['Student']['STT']
                ));
                ?>');">
                <td><?php echo h($student['Student']['STT']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['hoten']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['dienthoai']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['email']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['madiem']); ?>&nbsp;</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p>
    <small><?php echo $this->Paginator->counter(array('format' => __('Trang {:page}/{:pages}, hiển thị {:current}/{:count} bản ghi, từ bản ghi thứ {:start} đến bản ghi thứ {:end}.'))); ?></small>
</p>

<?php
$params = $this->Paginator->params();
if ($params['pageCount'] > 1) {
    ?>
    <ul class="pagination pagination-sm">
        <?php
        echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
        echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'a'));
        echo $this->Paginator->next('Next &rarr;', array('class' => 'next', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled', 'tag' => 'li', 'escape' => false));
        ?>
    </ul>
<?php } ?>
</div>
</div><!-- end containing of content -->