<div class="courseequivalentsSubjects index">
	<h2><?php echo __('Courseequivalents Subjects'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('subject_id'); ?></th>
			<th><?php echo $this->Paginator->sort('courseequivalent_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($courseequivalentsSubjects as $courseequivalentsSubject): ?>
	<tr>
		<td><?php echo h($courseequivalentsSubject['CourseequivalentsSubject']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($courseequivalentsSubject['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $courseequivalentsSubject['Subject']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($courseequivalentsSubject['Courseequivalent']['name'], array('controller' => 'courseequivalents', 'action' => 'view', $courseequivalentsSubject['Courseequivalent']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $courseequivalentsSubject['CourseequivalentsSubject']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $courseequivalentsSubject['CourseequivalentsSubject']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $courseequivalentsSubject['CourseequivalentsSubject']['id']), null, __('Are you sure you want to delete # %s?', $courseequivalentsSubject['CourseequivalentsSubject']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Courseequivalents Subject'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courseequivalents'), array('controller' => 'courseequivalents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courseequivalent'), array('controller' => 'courseequivalents', 'action' => 'add')); ?> </li>
	</ul>
</div>
