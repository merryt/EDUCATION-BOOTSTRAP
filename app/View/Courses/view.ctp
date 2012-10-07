<div class="courses view">
<h2><?php  echo __('Course'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($course['Course']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($course['Course']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($course['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $course['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($course['Course']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($course['Course']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo $this->Html->link($course['Level']['name'], array('controller' => 'levels', 'action' => 'view', $course['Level']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($course['Course']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($course['Course']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Likes'); ?></dt>
		<dd>
			<?php echo h($course['Course']['likes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facilitation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($course['Facilitation']['name'], array('controller' => 'facilitations', 'action' => 'view', $course['Facilitation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Includes'); ?></dt>
		<dd>
			<?php echo h($course['Course']['includes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Released'); ?></dt>
		<dd>
			<?php echo h($course['Course']['released']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Courseurl'); ?></dt>
		<dd>
			<?php echo h($course['Course']['courseurl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imageurl'); ?></dt>
		<dd>
			<?php echo h($course['Course']['imageurl']); ?>
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
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facilitations'), array('controller' => 'facilitations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facilitation'), array('controller' => 'facilitations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Subjects'); ?></h3>
	<?php if (!empty($course['Subject'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['Subject'] as $subject): ?>
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
