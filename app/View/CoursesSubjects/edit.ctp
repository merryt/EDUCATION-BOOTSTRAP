<div class="coursesSubjects form">
<?php echo $this->Form->create('CoursesSubject'); ?>
	<fieldset>
		<legend><?php echo __('Edit Courses Subject'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subject_id');
		echo $this->Form->input('course_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CoursesSubject.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CoursesSubject.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Courses Subjects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
