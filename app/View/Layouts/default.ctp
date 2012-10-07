<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('edubootstrap');

		echo $this->Html->script('jquery-1.7.1.min');
		echo $this->Html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<?php

if(isset($fb)) {
	require_once('../Vendor/facebook/src/facebook.php');

	$facebook = new Facebook(array(
		'appId'  => 289332017837387,
		'secret' => '0cd6d3e6b92c134583c535d9bb519101',
	));

	$user = $facebook->getUser();
	if(!empty($user)) {
		try {

			// Grab the user id, try to pull the user data, if exists. If not,
			// create a new id.

		} catch(FacebookApiException $e) {
			// If the user is logged out, you can have a 
			// user ID even though the access token is invalid.
			// In this case, we'll get an exception, so we'll
			// just ask the user to login again here.
			$params = array(
				//'scope'         => $this->permissions,
				//'redirect_uri'  => $this->facebookConfig->applink
			);
			$loginUrl = $facebook->getLoginUrl($params);

			//error_log($e->getType());
			//error_log($e->getMessage());

			// redirect if not logged in or not enough permissions
			//echo "<script>top.location=\"".$loginUrl."\";</script>";die;
		}

		// Give the user a logout link 
		echo '<br /><a href="' . $facebook->getLogoutUrl() . '">logout</a>';
	} else {

		$params = array(
			//'redirect_uri'  => $this->facebookConfig->applink
			'redirect_uri'  => 'http://educationbootstrap.com'
		);
		$loginUrl = $facebook->getLoginUrl($params);

		// log errors
		//error_log($e->getType());
		//error_log($e->getMessage());

		// redirect if not logged in or not enough permissions
		//echo "<script>top.location=\"".$loginUrl."\";</script>";die;

	}
}
?>
<body>
	<div id="container">
		<div id="header">
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>
