
<div class="studentNotifies form panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Edit Student Notify'); ?></h3>
    </div>
    <div class="panel-body">
        			<?php echo $this->Form->create('StudentNotify', array('role' => 'form')); ?>

        				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('student_id', array('class' => 'form-control', 'placeholder' => 'Student Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'Content'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('stage', array('class' => 'form-control', 'placeholder' => 'Stage'));?>
				</div>
        				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

    </div>
</div>
