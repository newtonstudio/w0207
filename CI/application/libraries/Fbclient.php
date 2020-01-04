<?php
require "./vendor/autoload.php";

class Fbclient {

	public function connect($accesstoken){

		$fb = new \Facebook\Facebook([
		  'app_id' => '159816581382232',
		  'app_secret' => '7142c29f0e73ac20fb189842aa79f953',
		  'default_graph_version' => 'v2.10',
		  //'default_access_token' => $accesstoken, // optional
		]);

		// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
		//   $helper = $fb->getRedirectLoginHelper();
		//   $helper = $fb->getJavaScriptHelper();
		//   $helper = $fb->getCanvasHelper();
		//   $helper = $fb->getPageTabHelper();

		try {
		  // Get the \Facebook\GraphNodes\GraphUser object for the current user.
		  // If you provided a 'default_access_token', the '{access-token}' is optional.


		  $response = $fb->get('/me?fields=id,name,email', $accesstoken);
		  $me = $response->getGraphUser();

		  return array(
		  	'id' => $me->getId(),
		  	'name' => $me->getName(),
		  	'email' => $me->getEmail(),
		  );
		  

		} catch(\Facebook\Exceptions\FacebookResponseException $e) {
		  // When Graph returns an error
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(\Facebook\Exceptions\FacebookSDKException $e) {
		  // When validation fails or other local issues
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}

		

	}

}
?>