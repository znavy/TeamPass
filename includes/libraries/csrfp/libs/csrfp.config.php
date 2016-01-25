<?php
/**
 * Configuration file for CSRF Protector z
 */

return array(
	"CSRFP_TOKEN" => "2142d72794a002ea25de714030df7138b9b73b0dd8bd69a815",
	"logDirectory" => "../log",
	"failedAuthAction" => array(
		"GET" => 0,
		"POST" => 0),
	"errorRedirectionPage" => "",
	"customErrorMessage" => "",
	"jsPath" => "../js/csrfprotector.js",
	"jsUrl" => "https://localhost/teampass/includes/libraries/csrfp/js/csrfprotector.js",
	"tokenLength" => 25,
	"disabledJavascriptMessage" => "This site attempts to protect users against <a href=\"https://www.owasp.org/index.php/Cross-Site_Request_Forgery_%28CSRF%29\">
	Cross-Site Request Forgeries </a> attacks. In order to do so, you must have JavaScript enabled in your web browser otherwise this site will fail to work correctly for you.
	 See details of your web browser for how to enable JavaScript.",
	 "verifyGetFor" => array()
);