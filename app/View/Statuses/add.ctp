<div class="statuses form">
<?php echo $this->Form->create('Status'); ?>
	<fieldset>
		<legend><?php echo __('Add Status'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses Users'), array('controller' => 'courses_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courses User'), array('controller' => 'courses_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
