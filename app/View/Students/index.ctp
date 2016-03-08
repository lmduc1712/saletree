<div class="students index panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Students'); ?></h3>
    </div>
    <div class="panel-body">
        <?php echo $this->Form->create(null, array('type' => 'get', 'class' => 'form-inline', 'inputDefaults' => array('div' => false, 'label' => false))); ?>
        <fieldset>
            <?php
            echo $this->Form->input('keyword', array('placeholder' => 'Keyword'));
            echo $this->Form->button('Search', array('type' => 'submit', 'div' => false, 'class' => 'btn'));
            ?>
        </fieldset>
        <?php echo $this->Form->end(); ?>
        <table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th><?php echo $this->Paginator->sort('STT'); ?></th>
                    <th><?php echo $this->Paginator->sort('hoten'); ?></th>
                    <th><?php echo $this->Paginator->sort('email'); ?></th>
                    <th><?php echo $this->Paginator->sort('dienthoai'); ?></th>
                    <th><?php echo $this->Paginator->sort('vitri'); ?></th>
                    <th><?php echo $this->Paginator->sort('mavitri'); ?></th>
                    <th><?php echo $this->Paginator->sort('birth'); ?></th>
                    <th><?php echo $this->Paginator->sort('gioitinh'); ?></th>
                    <th><?php echo $this->Paginator->sort('tinhtrang'); ?></th>
                    <th><?php echo $this->Paginator->sort('trinhdo'); ?></th>
                    <th><?php echo $this->Paginator->sort('exp'); ?></th>
                    <th><?php echo $this->Paginator->sort('nguon'); ?></th>
                    <th><?php echo $this->Paginator->sort('why'); ?></th>
                    <th><?php echo $this->Paginator->sort('madiem'); ?></th>
                    <th><?php echo $this->Paginator->sort('date'); ?></th>
                    <th><?php echo $this->Paginator->sort('ip'); ?></th>
                    <th><?php echo $this->Paginator->sort('ca1'); ?></th>
                    <th><?php echo $this->Paginator->sort('ca2'); ?></th>
                    <th><?php echo $this->Paginator->sort('ca3'); ?></th>
                    <th><?php echo $this->Paginator->sort('ca4'); ?></th>
                    <th><?php echo $this->Paginator->sort('evenday'); ?></th>
                    <th><?php echo $this->Paginator->sort('oddday'); ?></th>
                    <th><?php echo $this->Paginator->sort('sinhvien'); ?></th>
                    <th><?php echo $this->Paginator->sort('dilam'); ?></th>
                    <th><?php echo $this->Paginator->sort('dinh_kem'); ?></th>
                    <th><?php echo $this->Paginator->sort('st7'); ?></th>
                    <th><?php echo $this->Paginator->sort('ct7'); ?></th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $order => $student): ?>
                    <tr>
                        <td><?php echo $order + 1; ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['STT']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['hoten']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['email']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['dienthoai']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['vitri']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['mavitri']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['birth']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['gioitinh']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['tinhtrang']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['trinhdo']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['exp']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['nguon']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['why']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['madiem']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['date']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['ip']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['ca1']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['ca2']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['ca3']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['ca4']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['evenday']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['oddday']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['sinhvien']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['dilam']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['dinh_kem']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['st7']); ?>&nbsp;</td>
                        <td><?php echo h($student['Student']['ct7']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $student['Student']['STT']), array('escape' => false)); ?>
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $student['Student']['STT']), array('escape' => false)); ?>
                            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $student['Student']['STT']), array('escape' => false), __('Are you sure you want to delete # %s?', $student['Student']['STT'])); ?>
                        </td>
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