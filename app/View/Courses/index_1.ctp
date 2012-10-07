<div class="courses index">
	<h2><?php echo __('Courses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('vendor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cost'); ?></th>
			<th><?php echo $this->Paginator->sort('duration'); ?></th>
			<th><?php echo $this->Paginator->sort('level_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rating'); ?></th>
			<th><?php echo $this->Paginator->sort('author'); ?></th>
			<th><?php echo $this->Paginator->sort('likes'); ?></th>
			<th><?php echo $this->Paginator->sort('facilitation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('includes'); ?></th>
			<th><?php echo $this->Paginator->sort('released'); ?></th>
			<th><?php echo $this->Paginator->sort('courseurl'); ?></th>
			<th><?php echo $this->Paginator->sort('imageurl'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($courses as $course): ?>
	<tr>
		<td><?php echo h($course['Course']['id']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['title']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($course['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $course['Vendor']['id'])); ?>
		</td>
		<td><?php echo h($course['Course']['cost']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['duration']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($course['Level']['name'], array('controller' => 'levels', 'action' => 'view', $course['Level']['id'])); ?>
		</td>
		<td><?php echo h($course['Course']['rating']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['author']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['likes']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($course['Facilitation']['name'], array('controller' => 'facilitations', 'action' => 'view', $course['Facilitation']['id'])); ?>
		</td>
		<td><?php echo h($course['Course']['includes']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['released']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['courseurl']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['imageurl']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $course['Course']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $course['Course']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facilitations'), array('controller' => 'facilitations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facilitation'), array('controller' => 'facilitations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
