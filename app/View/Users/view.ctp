<body>
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
	<div style="margin: 0 0 0 20px;">
	<h2>Welcome to your courses Gregg.</h1>
	<?php echo $this->Html->link($this->Html->image('GoodJob.png',array('id'=>'pic2')), Router::url('/'), array('escape'=>false));?>
	<h4>View your enrolled classes</h4>
	</div>
	
	<?php echo $this->Html->link($this->Html->image('classes.png',array('id'=>'pic')), Router::url('/'), array('escape'=>false));?>
</div>
	<div id="footer">
		<div class="wrap2">
		<a href="#">browse</a> - <a href="#">search</a> - <a href="#">log-in</a>
		</div>
	</div>
</body>
</html>