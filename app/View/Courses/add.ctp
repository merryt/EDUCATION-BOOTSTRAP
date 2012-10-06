<div class="courses form">
<?php echo $this->Form->create('Course'); ?>
	<fieldset>
		<legend><?php echo __('Add Course'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('cost');
		echo $this->Form->input('vendor_id');
		echo $this->Form->input('description');
		echo $this->Form->input('duration');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courseequivalents'), array('controller' => 'courseequivalents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courseequivalent'), array('controller' => 'courseequivalents', 'action' => 'add')); ?> </li>
	</ul>
</div>
