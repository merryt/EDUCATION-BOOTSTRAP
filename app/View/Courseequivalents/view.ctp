<div class="courseequivalents view">
<h2><?php  echo __('Courseequivalent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseequivalent['Courseequivalent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($courseequivalent['Courseequivalent']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($courseequivalent['Course']['name'], array('controller' => 'courses', 'action' => 'view', $courseequivalent['Course']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Courseequivalent'), array('action' => 'edit', $courseequivalent['Courseequivalent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Courseequivalent'), array('action' => 'delete', $courseequivalent['Courseequivalent']['id']), null, __('Are you sure you want to delete # %s?', $courseequivalent['Courseequivalent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courseequivalents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courseequivalent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Subjects'); ?></h3>
	<?php if (!empty($courseequivalent['Subject'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($courseequivalent['Subject'] as $subject): ?>
		<tr>
			<td><?php echo $subject['id']; ?></td>
			<td><?php echo $subject['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subjects', 'action' => 'view', $subject['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subjects', 'action' => 'edit', $subject['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subjects', 'action' => 'delete', $subject['id']), null, __('Are you sure you want to delete # %s?', $subject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
