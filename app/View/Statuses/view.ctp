<div class="statuses view">
<h2><?php  echo __('Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($status['Status']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($status['Status']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Status'), array('action' => 'edit', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Status'), array('action' => 'delete', $status['Status']['id']), null, __('Are you sure you want to delete # %s?', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses Users'), array('controller' => 'courses_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courses User'), array('controller' => 'courses_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Courses Users'); ?></h3>
	<?php if (!empty($status['CoursesUser'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($status['CoursesUser'] as $coursesUser): ?>
		<tr>
			<td><?php echo $coursesUser['id']; ?></td>
			<td><?php echo $coursesUser['course_id']; ?></td>
			<td><?php echo $coursesUser['user_id']; ?></td>
			<td><?php echo $coursesUser['status_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses_users', 'action' => 'view', $coursesUser['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses_users', 'action' => 'edit', $coursesUser['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses_users', 'action' => 'delete', $coursesUser['id']), null, __('Are you sure you want to delete # %s?', $coursesUser['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Courses User'), array('controller' => 'courses_users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
