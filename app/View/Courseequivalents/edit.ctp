<div class="courseequivalents form">
<?php echo $this->Form->create('Courseequivalent'); ?>
	<fieldset>
		<legend><?php echo __('Edit Courseequivalent'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('course_id');
		echo $this->Form->input('Subject');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Courseequivalent.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Courseequivalent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Courseequivalents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
