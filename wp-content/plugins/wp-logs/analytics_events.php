<?php
/**
 * Google Analytics event tracking
 *
 * @author there4 development
 * @created 07/15/2010
 */

class Analytics {
	
	private $code;
	private $domain;
	private $useragent;
	private $cookie;
	private $verbose;

	function __construct($code = '', $domain = '') {
		if ($code == '') { //Use settings from the Yoast Google Analytics plugin if no UA code is provided
			$yoast = get_option('Yoast_Google_Analytics');
			
			if ($yoast['uastring'] != '')
				$code = $yoast['uastring'];
		}
		
		$this->code      = $code ? $code : 'UA-XXXXXX-1';
		
		if ($this->code == '')
			exit();
		
		$this->domain    = $domain ? $domain : $_SERVER['HTTP_HOST'];
		$this->verbose   = false;
		$this->useragent = 'EventAgent/0.1';
		// you may wish to set this
		$this->referer  = $this->domain;
		$this->cookie    = "mycookie";
	}

  /**
   * @see http://code.google.com/apis/analytics/docs/tracking/eventTrackerGuide.html
   *
   * @param string $object the name you supply for the group of objects you want to track.
   * @param string $action A string that is uniquely paired with each category, and commonly
   *    used to define the type of user interaction for the web object.
   * @param string $label An optional string to provide additional dimensions to the event data.
   * @param string $value An integer that you can use to provide numerical data about the user event.
   */
	public function trackEvent($object, $action, $label = '', $value = 1) {
		if ($this->code == '')
			exit();
		
		$var_utmac   = $this->code;
		$var_utmhn   = $this->domain;
		$var_utmn    = rand(1000000000,9999999999); //random request number
		$var_cookie  = rand(10000000,99999999);     //random cookie number
		$var_random  = rand(1000000000,2147483647); //number under 2147483647
		$var_today   = time();                      //today
		$var_referer = $this->referer;             //referer url
		$var_utmp    = 'index.php';
		$var_uservar = '';
		
		/**
		 * url to fetch the gif image from
		 * @see http://code.google.com/intl/de-DE/apis/analytics/docs/tracking/gaTrackingTroubleshooting.html#gifParameters
		 */
		$urchin_url = 'http://www.google-analytics.com/__utm.gif';
		$urchin_params = array(
			'utmwv' => 1,               // Tracking code version
			'utmn' => $var_utmn,       // Prevent caching random number
			'utmsr' => '-',               // Screen resolution
			'utmsc' => '-',               // Screen color depth
			'utmul' => '-',               // Browser language
			'utmje' => 0,               // Is browser Java-enabled
			'utmfl' => '-',               // Flash Version
			'utmdt' => '-',               // Page title, url encoded
			'utmhn' => $var_utmhn,     // Host Name
			'utmp=' => $var_utmp,       // page
			'utmr=' => $var_referer,    // Referral, complete url
			'utmac=' => $var_utmac,     // Account code
			'utmt' => 'event',            // Type of request
			'utme' => rawurlencode("5($object*$action*$label)($value):"), // Extensible parameter, used for the event data here
			'utmcc' => '=__utma%3D'.$var_cookie.'.'.$var_random.'.'.$var_today.'.'.$var_today.'.'.$var_today.'.2%3B%2B__utmb%3D'.$var_cookie.'%3B%2B__utmc%3D'.$var_cookie.'%3B%2B__utmz%3D'.$var_cookie.'.'.$var_today.'.2.2.utmccn%3D(direct)%7Cutmcsr%3D(direct)%7Cutmcmd%3D(none)%3B%2B__utmv%3D'.$var_cookie.'.'.$var_uservar.'%3B'
		); // Cookie values are in this utmcc
	
		$this->curl_post_async($urchin_url,$urchin_params);
	}
	
	function curl_post_async($url, $params) {
	    foreach ($params as $key => &$val) {
	    	if (is_array($val)) $val = implode(',', $val);
	    		$post_params[] = $key.'='.urlencode($val);
	    }
	    $post_string = implode('&', $post_params);

	    $parts=parse_url($url);

	    $fp = fsockopen($parts['host'],
	    	isset($parts['port'])?$parts['port']:80,
	    	$errno, $errstr, 30);

	    $out = "POST ".$parts['path']." HTTP/1.1\r\n";
	    $out.= "Host: ".$parts['host']."\r\n";
	    $out.= "Content-Type: application/x-www-form-urlencoded\r\n";
	    $out.= "Content-Length: ".strlen($post_string)."\r\n";
	    $out.= "Connection: Close\r\n\r\n";
	    if (isset($post_string)) $out.= $post_string;

	    fwrite($fp, $out);
	    fclose($fp);
	}
}
?>