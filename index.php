<?php 
require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' 			=> "41323133-3hrnlQ31I15TSGN3J5Ojv3OnORs9ho3pEezl8yRjy",
    'oauth_access_token_secret' 	=> "seNgZB0Rami1Hj1G0QfWQ9me23NOnPPMEzGCgQSzr6tix",
    'consumer_key' 					=> "aCIgGdPmHdpVxfCleuwPAuQVM",
    'consumer_secret' 				=> "R1l7HHz1JF7W96RtLIYEKF4vrP7lfYX9yOJqlmwzBa1NcpARio"
);

$url = "https://api.twitter.com/1.1/search/tweets.json";
// $url = "https://api.twitter.com/1.1/firehose/tweets.json";

$requestMethod = "GET";

$getfield = '?q=FCBayern';

$twitter = new TwitterAPIExchange($settings);
$sFeed = json_decode($twitter->setGetfield($getfield)
			->buildOauth($url, $requestMethod)
			->performRequest());

echo "<pre>";
print_r($sFeed);
echo "</pre>";
?>