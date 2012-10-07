<?php
// include the FB SDK
require_once('../Vendor/facebook/src/facebook.php');

// create the application instance
$facebook = new Facebook(array(
	'appId'  => 289332017837387,
	'secret' => '0cd6d3e6b92c134583c535d9bb519101',
));

// get the user id
$user = $facebook->getUser();
if(!empty($user)) {
    // We have a user ID, so probably a logged in user.
    // If not, we'll get an exception, which we handle below.
    try {

        // do something

    } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a 
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
        $params = array(
            'scope'         => $this->permissions,
            'redirect_uri'  => $this->facebookConfig->applink
        );
        $loginUrl = $facebook->getLoginUrl($params);

        // log errors
        error_log($e->getType());
        error_log($e->getMessage());

        // redirect if not logged in or not enough permissions
        //echo "<script>top.location=\"".$loginUrl."\";</script>";die;
    }

    // Give the user a logout link 
    echo '<br /><a href="' . $facebook->getLogoutUrl() . '">logout</a>';
} else {

    $params = array(
            'scope'         => $this->permissions,
            'redirect_uri'  => $this->facebookConfig->applink
        );
    $loginUrl = $facebook->getLoginUrl($params);

    // log errors
    error_log($e->getType());
    error_log($e->getMessage());

    // redirect if not logged in or not enough permissions
    //echo "<script>top.location=\"".$loginUrl."\";</script>";die;

}
?>