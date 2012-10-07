<div class="courses index">
	<h2><?php echo __('Courses'); ?></h2>
	<table class="table-striped table-bordered" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('cost'); ?></th>
			<th><?php echo $this->Paginator->sort('vendor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('duration'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($courses as $course): ?>
	<tr>
		<td><?php echo h($course['Course']['id']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['name']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['cost']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($course['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $course['Vendor']['id'])); ?>
		</td>
		<td><?php echo h($course['Course']['description']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['duration']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('<i class="icon-white icon-play"></i>View'), array('action' => 'view', $course['Course']['id']),array("class"=>"btn btn-success", "escape"=> false )); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $course['Course']['id']),array("class"=>"hide")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $course['Course']['id']),array("class"=>"hide"), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courseequivalents'), array('controller' => 'courseequivalents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courseequivalent'), array('controller' => 'courseequivalents', 'action' => 'add')); ?> </li>
	</ul>
</div>
