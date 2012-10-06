<div class="courseequivalentsSubjects form">
<?php echo $this->Form->create('CourseequivalentsSubject'); ?>
	<fieldset>
		<legend><?php echo __('Edit Courseequivalents Subject'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subject_id');
		echo $this->Form->input('courseequivalent_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CourseequivalentsSubject.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CourseequivalentsSubject.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Courseequivalents Subjects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courseequivalents'), array('controller' => 'courseequivalents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courseequivalent'), array('controller' => 'courseequivalents', 'action' => 'add')); ?> </li>
	</ul>
</div>
