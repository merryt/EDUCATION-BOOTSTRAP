<h2><?php  echo __('Course'); ?></h2>
	<div class="course">
		<div class="image">
			<?php echo $this->Html->image($course['Course']['imageurl'],array()); ?>
		</div>
		<div class="title"><?php echo $this->Html->link($course['Course']['title'],array('action'=>'view',$course['Course']['id'])); ?>
		</div>
		<div class="description"><?php echo $this->Text->truncate($course['Course']['description'],200); ?>
		</div>
		<div class="cost">Cost: $<?php echo $course['Course']['cost']; ?>
		</div>
		<div class="duration"><?php echo $course['Course']['duration']; ?> Minutes
		</div>
	</div>

		<?php echo __('Vendor: ').$course['Vendor']['name'].' ';?>
		<small><?php echo $this->Html->link('More from this Vendor', array('controller' => 'vendors', 'action' => 'view', $course['Vendor']['id'])); ?></small>
		<br/>
		<?php echo $course['Level']['name']. ' ';?>
		<small><?php echo $this->Html->link('More at this level', array('controller' => 'levels', 'action' => 'view', $course['Level']['id'])); ?></small>
		<br/>
		<?php echo __('Facilitation:'); ?>
		<?php echo $course['Facilitation']['name'].' ';?>
		<small><?php echo $this->Html->link('More like this', array('controller' => 'facilitations', 'action' => 'view', $course['Facilitation']['id'])); ?></small>
		<br/>
		<?php echo __('Rating: '); ?>
		<?php echo $this->Html->image('rating/stars-'.($course['Course']['rating'] * 2).'.png'); ?>
		<br/>

		<?php echo __('Author: '). h($course['Course']['author']); ?> 
		<br/>

		<?php echo $this->Html->link('Click to Enroll', $course['Course']['courseurl']); ?>
