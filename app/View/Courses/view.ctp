<div class="courses view">
<h2><?php  echo __('Course'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($course['Course']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($course['Course']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($course['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $course['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($course['Course']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($course['Course']['duration']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courseequivalents'), array('controller' => 'courseequivalents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courseequivalent'), array('controller' => 'courseequivalents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Courseequivalents'); ?></h3>
	<?php if (!empty($course['Courseequivalent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['Courseequivalent'] as $courseequivalent): ?>
		<tr>
			<td><?php echo $courseequivalent['id']; ?></td>
			<td><?php echo $courseequivalent['name']; ?></td>
			<td><?php echo $courseequivalent['course_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courseequivalents', 'action' => 'view', $courseequivalent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courseequivalents', 'action' => 'edit', $courseequivalent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courseequivalents', 'action' => 'delete', $courseequivalent['id']), null, __('Are you sure you want to delete # %s?', $courseequivalent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Courseequivalent'), array('controller' => 'courseequivalents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
