
<div class="moduleClasses index panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Module Classes'); ?></h3>
    </div>
    <div class="panel-body">
        <?php
        echo $this->Form->create('ModuleClass', array(
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
                        <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;">Tên lớp</div>
                        <?php
                        echo $this->Form->input('tenlop', array(
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
                        <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;">Tên giáo viên</div>
                        <?php
                        echo $this->Form->input('tengv', array(
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
                        <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;">Trợ giảng</div>
                        <?php
                        echo $this->Form->input('trogiang', array(
                            'div' => false,
                            'class' => 'form-control',
                            'empty' => true,
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
                        <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;">Ngày học</div>
                        <?php
                        echo $this->Form->input('ngayhoc', array(
                            'div' => false,
                            'class' => 'form-control',
                            'options' => Configure::read('ngayhoc'),
                            'empty' => true,
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
                        <div class="col-md-3 margin-top-7 margin-bottom" style="padding: 0px;">Ca học</div>
                        <?php
                        echo $this->Form->input('cahoc', array(
                            'div' => false,
                            'class' => 'form-control',
                            'options' => Configure::read('cahoc'),
                            'empty' => true,
                            'maxlength' => 100
                        ));
                        ?>
                    </div>
                </div>
            </div>
            <div class="clearfix margin-bottom"></div>
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
                            echo $this->Html->link("Thêm lớp học mới", array(
                                'controller' => 'ModuleClasses',
                                'action' => 'add'), array(
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
    <table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center"><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
                <th class="text-center"><?php echo $this->Paginator->sort('tenlop', 'Tên lớp'); ?></th>
                <th class="text-center"><?php echo $this->Paginator->sort('tengv', 'Giáo viên'); ?></th>
                <th class="text-center"><?php echo $this->Paginator->sort('user_id', 'Trợ giảng'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($moduleClasses as $order => $moduleClass): ?>
                <tr onmouseover="changeColor(this, true);" 
                onmouseout="changeColor(this, false);" 
                onclick="DoNav('<?php
            echo $this->Html->url(array(
                'controller' => 'Lessons',
                'action' => 'class_index',
                $moduleClass['ModuleClass']['id']
            ));
            ?>');">
                    <td class="text-center"><?php echo h($moduleClass['ModuleClass']['id']); ?>&nbsp;</td>
                    <td><?php echo h($moduleClass['ModuleClass']['tenlop']); ?>&nbsp;</td>
                    <td><?php echo h($moduleClass['ModuleClass']['tengv']); ?>&nbsp;</td>
                    <td><?php echo h($moduleClass['User']['name']); ?>&nbsp;</td>
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
</div><!-- end containing of content -->