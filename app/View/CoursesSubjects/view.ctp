<div class="coursesSubjects view">
<h2><?php  echo __('Courses Subject'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coursesSubject['CoursesSubject']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coursesSubject['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $coursesSubject['Subject']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coursesSubject['Course']['title'], array('controller' => 'courses', 'action' => 'view', $coursesSubject['Course']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Courses Subject'), array('action' => 'edit', $coursesSubject['CoursesSubject']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Courses Subject'), array('action' => 'delete', $coursesSubject['CoursesSubject']['id']), null, __('Are you sure you want to delete # %s?', $coursesSubject['CoursesSubject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses Subjects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courses Subject'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
