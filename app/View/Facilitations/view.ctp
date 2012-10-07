<div class="facilitations view">
<h2><?php  echo __('Facilitation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($facilitation['Facilitation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($facilitation['Facilitation']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Facilitation'), array('action' => 'edit', $facilitation['Facilitation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Facilitation'), array('action' => 'delete', $facilitation['Facilitation']['id']), null, __('Are you sure you want to delete # %s?', $facilitation['Facilitation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Facilitations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facilitation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($facilitation['Course'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Level Id'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Author'); ?></th>
		<th><?php echo __('Likes'); ?></th>
		<th><?php echo __('Facilitation Id'); ?></th>
		<th><?php echo __('Includes'); ?></th>
		<th><?php echo __('Released'); ?></th>
		<th><?php echo __('Courseurl'); ?></th>
		<th><?php echo __('Imageurl'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($facilitation['Course'] as $course): ?>
		<tr>
			<td><?php echo $course['id']; ?></td>
			<td><?php echo $course['title']; ?></td>
			<td><?php echo $course['description']; ?></td>
			<td><?php echo $course['vendor_id']; ?></td>
			<td><?php echo $course['cost']; ?></td>
			<td><?php echo $course['duration']; ?></td>
			<td><?php echo $course['level_id']; ?></td>
			<td><?php echo $course['rating']; ?></td>
			<td><?php echo $course['author']; ?></td>
			<td><?php echo $course['likes']; ?></td>
			<td><?php echo $course['facilitation_id']; ?></td>
			<td><?php echo $course['includes']; ?></td>
			<td><?php echo $course['released']; ?></td>
			<td><?php echo $course['courseurl']; ?></td>
			<td><?php echo $course['imageurl']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), null, __('Are you sure you want to delete # %s?', $course['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
