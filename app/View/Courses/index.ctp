</head>
<body>
	<div class="wrap">
		<?php echo $this->Html->link($this->Html->image('logo.png'), '#',array('escape'=>false));?>
		<div class="loginBox">
			<a href="#">SIGN-IN</a> - <a href="#">CREATE ACCOUNT</a>
			<br />
			<?php echo $this->Html->link($this->Html->image('browse.png'), array('action' => 'search'),array('escape'=>false));?>
		</div>
	</div>
	<div class="gray">
		<div class="wrap">
			<?php echo $this->Html->image('centerImg.jpg');?>
		</div>
	</div>
	<div class="wrap">
		<div id="courses">
		</div>
	<?php
	foreach ($courses as $course) { ?>
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
	</div>
	<?php } ?>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

		<div id="browse"><a href="#">click to browse more...</a></div>
	</div>
	<div id="footer">
		<div class="wrap2">
		<a href="#">browse</a> - <a href="#">search</a> - <a href="#">log-in</a>
		</div>
	</div>
	
</div>
