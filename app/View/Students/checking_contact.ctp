
<div class="students index panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Kiểm tra đăng ký'); ?></h3>
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
                <p><b>Hãy nhập ngày đăng ký</b></p>
            </div>
            <div class="col-md-12" style="padding: 0px; clear: both;">
                <div class="col-md-12">
                    <div>
                        <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;">Ngày đăng ký</div>
                        <?php
                        echo $this->Form->input('date', array(
                            'div' => false,
                            'class' => 'form-control datepicker must-date half-width',
                            'type' => 'text',
                            'maxlength' => 10
                        ));
                        ?>
                    </div>
                </div>
            </div>
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
                            echo $this->Html->link("Kiểm tra", array(
                                'controller' => 'students',
                                'action' => 'result_checking_contact',
                                $this->request->data['Student']['date']), array(
                                'class' => 'btn btn-default btn-success right col-md-12'
                            )); //new student button
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
<?php echo $this->Form->create('Student') ?>
<table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th class="text-center"><?php echo $this->Paginator->sort('STT'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('hoten', 'Họ tên'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('dienthoai', 'Số điện thoại'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('email', 'Email'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('madiem', 'Mã điểm'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('vitri', 'Địa chỉ'); ?></th>
            <th class="text-center"><span class="glyphicon glyphicon-trash"></span></th>
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
                <td class="text-center"><?php echo $this->Form->checkbox(false, array('value' => $student['Student']['STT'], 'name' => "data[Student][STT][]",)) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div class="col-md-12">
    <div class="col-md-6">
        <p>
            <small><?php echo $this->Paginator->counter(array('format' => __('Trang {:page}/{:pages}, hiển thị {:current}/{:count} bản ghi, từ bản ghi thứ {:start} đến bản ghi thứ {:end}.'))); ?></small>
        </p>
    </div>
    <div class="col-md-6 text-right no-padding">
        <?php
        echo $this->Form->button('<span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Delete', array('class' => 'btn btn-default btn-danger', 'escape' => false));
        echo $this->Form->end();
        ?>
    </div>
</div>
<div class="clearfix"></div>

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