<div class="courseequivalentsSubjects view">
<h2><?php  echo __('Courseequivalents Subject'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseequivalentsSubject['CourseequivalentsSubject']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo $this->Html->link($courseequivalentsSubject['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $courseequivalentsSubject['Subject']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Courseequivalent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($courseequivalentsSubject['Courseequivalent']['name'], array('controller' => 'courseequivalents', 'action' => 'view', $courseequivalentsSubject['Courseequivalent']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Courseequivalents Subject'), array('action' => 'edit', $courseequivalentsSubject['CourseequivalentsSubject']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Courseequivalents Subject'), array('action' => 'delete', $courseequivalentsSubject['CourseequivalentsSubject']['id']), null, __('Are you sure you want to delete # %s?', $courseequivalentsSubject['CourseequivalentsSubject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courseequivalents Subjects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courseequivalents Subject'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courseequivalents'), array('controller' => 'courseequivalents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courseequivalent'), array('controller' => 'courseequivalents', 'action' => 'add')); ?> </li>
	</ul>
</div>
