<div class="wrap">
	<?php echo $this->Html->link($this->Html->image('logo.png',array('id'=>'logo')), Router::url('/'), array('escape'=>false));?>
	<div class="loginBox">
		<div id="fb-root"></div>
		<script>
			window.fbAsyncInit = function() {
			FB.init({
				appId      : '289332017837387', // App ID
				channelUrl : 'educationbootstrap.com/fbchannel', // Channel File
				status     : true, // check login status
				cookie     : true, // enable cookies to allow the server to access the session
				xfbml      : true  // parse XFBML
			});
			};
			// Load the SDK Asynchronously
			(function(d){
			var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement('script'); js.id = id; js.async = true;
			js.src = "//connect.facebook.net/en_US/all.js";
			ref.parentNode.insertBefore(js, ref);
			}(document));
		</script>
			<div class="fb-login-button">Login with Facebook</div>
			<br />
			<?php echo $this->Html->link($this->Html->image('browse.png'), array('action' => 'search'),array('escape'=>false));?>
	</div>

	<div class="courses index">
		<div id="search2">
			<form action="<?php echo Router::url(array('action'=>'search')); ?>" class="form-search">
				<input type="text" class="input-medium search-query" name="keywords">
				<button type="submit" class="btn btn-primary">Search</button>
			</form>
		</div>
		<h2 style="margin: 10px 0 0 10px"><?php echo __('Search Results'); ?></h2>
		<?php
		foreach ($courses as $course){ ?>
		<div class="course2">
			<div class="image">
				<?php echo $this->Html->image($course['Course']['imageurl'],array()); ?>
			</div>
			<div class="title"><?php echo $this->Html->link($course['Course']['title'],array('action'=>'view',$course['Course']['id'])); ?>
			</div>
			<div class="description2"><?php echo $this->Text->truncate($course['Course']['description'],85); ?>
			</div>
			<div class="cost">Cost: $<?php echo $course['Course']['cost']; ?>
			</div>
			<div class="duration"><?php echo $course['Course']['duration']; ?> Minutes
			</div>
			<div class="duration">
				<?php echo $this->Html->link($course['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $course['Vendor']['id'])); ?>
			</div>
			<div class="duration">
			</div>
				<?php echo $this->Html->link($course['Level']['name'], array('controller' => 'levels', 'action' => 'view', $course['Level']['id'])); ?>
			<div class="duration">
				Class rating of: <?php echo h($course['Course']['rating']); ?>
			</div>
		</div>
	<?php } ?>
		<div style="clear:both; margin: 5px;">
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	</p>
		</div>
		<div class="paging">
			<div id="browse">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
			</div>
		</div>
	</div>
</div>
