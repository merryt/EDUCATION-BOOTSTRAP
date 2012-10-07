<div class="courses index">
	<h2><?php echo __('Courses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<?php
	foreach ($courses as $course): ?>
	<tr>
		<td><?php echo h($course['Course']['title']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['description']); ?>&nbsp;</td>
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
		<td><?php echo h($course['Course']['imageurl']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('<i class="icon-white icon-play"></i>View'), array('action' => 'view', $course['Course']['id']),array("class"=>"btn btn-success", "escape"=> false )); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $course['Course']['id']),array("class"=>"hide")); ?>
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
