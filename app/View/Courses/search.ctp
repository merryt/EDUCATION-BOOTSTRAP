<div class="courses index">
	<h2><?php echo __('Search Results'); ?></h2>
	<?php
	foreach ($courses as $course){ ?>
	<div class="course">
		<div class="image">
			<?php echo $this->Html->image($course['Course']['imageurl'],array()); ?>
		</div>
		<div class="title"><?php echo $this->Html->link($course['Course']['title'],array('action'=>'view',$course['Course']['id'])); ?>
		</div>
		<div class="description"><?php echo $this->Text->truncate($course['Course']['description'],140); ?>
		</div>
		<div class="cost">Cost: $<?php echo $course['Course']['cost']; ?>
		</div>
		<div class="duration"><?php echo $course['Course']['duration']; ?> Minutes
		</div>
		<div class="">
			<?php echo $this->Html->link($course['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $course['Vendor']['id'])); ?>
		</div>
		<div class="">
		</div>
			<?php echo $this->Html->link($course['Level']['name'], array('controller' => 'levels', 'action' => 'view', $course['Level']['id'])); ?>
		<div class="">
			<?php echo h($course['Course']['rating']); ?>
		</div>
		<div class="">
			<?php echo h($course['Course']['courseurl']); ?>
		</div>
	</div>
<?php } ?>
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
