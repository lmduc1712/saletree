<div class="students index panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Học viên đăng ký lại sau 90 ngày'); ?></h3>
    </div>
</div>
<table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th class="text-center"><?php echo $this->Paginator->sort('STT'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('hoten', 'Họ tên'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('dienthoai', 'Số điện thoại'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('Email', 'Email'); ?></th>
            <th class="text-center"><?php echo $this->Paginator->sort('madiem', 'Mã Điểm'); ?></th>
            <th class="text-center">Lớp</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $order => $student): ?>
            <tr onmouseover="changeColor(this, true);" 
                onmouseout="changeColor(this, false);" 
                onclick="DoNav('<?php
            echo $this->Html->url(array(
                'controller' => 'students',
                'action' => 'loc_contact',
                $student['Student']['STT']
            ));
            ?>');">
                <td><?php echo h($student['Student']['STT']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['hoten']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['dienthoai']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['email']); ?>&nbsp;</td>
                <td><?php echo h($student['Student']['madiem']); ?>&nbsp;</td>
                <td><?php echo empty($student['ModuleClass'][0])? '' : h($student['ModuleClass'][0]['tenlop']); ?>&nbsp;</td>
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