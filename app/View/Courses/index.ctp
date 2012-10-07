</head>
<body>
	<div class="wrap">
		<?php echo $this->Html->link($this->Html->image('logo.png',array('id'=>'logo')), '#', array('escape'=>false));?>
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

			
			<a href="#">SIGN-IN</a> - <a href="#">CREATE ACCOUNT</a>
			<br />
			<?php echo $this->Html->link($this->Html->image('browse.png'), array('action' => 'search'),array('escape'=>false));?>
		</div>
		<form action="<?php echo Router::url(array('action'=>'search')); ?>" class="form-search">
			<input type="text" class="input-medium search-query" name="data[keywords]">
			<button type="submit" class="btn">Search</button>
		</form>
	</div>
	<div class="gray">
		<div class="wrap">
			<?php echo $this->Html->image('centerImg.jpg');?>

		<div id="courses">
		</div>
	<?php
	foreach ($courses as $course) { ?>
	<div class="course">
		<div class="image">
			<?php echo $this->Html->image($course['Course']['imageurl'],array()); ?>
		</div>
		<div class="title"><?php echo $this->Html->link($this->Text->truncate($course['Course']['title'],25),array('action'=>'view',$course['Course']['id'])); ?>
		</div>
		<div class="description"><?php echo $this->Text->truncate($course['Course']['description'],115); ?>
		</div>
		<div class="cost">Cost: $<?php echo $course['Course']['cost']; ?>
		</div>
		<div class="duration"><?php echo $course['Course']['duration']; ?> Minutes
		</div>
	</div>
	<?php } ?>
	<div class="paging">

	</div>

		<div id="browse">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
	<div id="footer">
		<div class="wrap2">
		<a href="#">browse</a> - <a href="#">search</a> - <a href="#">log-in</a>
		</div>
	</div>
	
</div>
