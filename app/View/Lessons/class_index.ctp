
<div class="lessons index panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Nhật ký lớp học'); ?></h3>
    </div>
    <div class="panel-body">
        <h2><?php echo $class['ModuleClass']['tenlop'] ?></h2>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Giáo viên</strong></div>
            <p><?php echo $class['ModuleClass']['tengv'] ?></p>
        </div>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2 margin-top-7 margin-bottom" style="padding: 0px;"><strong>Trợ giảng</strong></div>
            <p><?php echo $class['User']['name'] ?></p>
        </div>
        <div class="col-md-12 margin-bottom" style="padding: 0px; clear: both;">
            <div class="col-md-2">
                <?php
                echo $this->Html->link("Thêm nhật ký mới", array(
                    'controller' => 'Lessons',
                    'action' => 'add',
                    $class['ModuleClass']['id']), array(
                    'class' => 'btn btn-default btn-success right col-md-12'
                ));
                ?>
            </div>
            <div class="col-md-2">
                <?php
                echo $this->Form->button('Đóng', array(
                    'class' => 'btn btn-default left col-md-12',
                    'type' => 'button',
                    'onclick' => 'goback();'
                )); //close button 
                ?>
            </div>
        </div>
        <table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th><?php echo $this->Paginator->sort('ngayhoc', 'Ngày'); ?></th>
                    <th><?php echo $this->Paginator->sort('noidung', 'Nội dung'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lessons as $order => $lesson): ?>
                    <tr onmouseover="changeColor(this, true);" 
                        onmouseout="changeColor(this, false);" 
                        onclick="DoNav('<?php
                        echo $this->Html->url(array(
                            'controller' => 'Lessons',
                            'action' => 'view',
                            $lesson['Lesson']['id']
                        ));
                        ?>');">
                        <td><?php echo $order + 1; ?>&nbsp;</td>
                        <td><?php echo date('Y-m-d', strtotime($lesson['Lesson']['ngayhoc'])); ?>&nbsp;</td>
                        <td><?php echo h($lesson['Lesson']['noidung']); ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p>
            <small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?></small>
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