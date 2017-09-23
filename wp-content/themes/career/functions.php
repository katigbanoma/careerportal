<?php

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function career_content_width() {
	$GLOBALS['content_width'] = apply_filters('career_content_width', 557);
}
add_action('after_setup_theme', 'career_content_width', 0);

add_theme_support('post-thumbnails');

function career_enqueue() {
	wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/scripts/jquery.js', array('', false, false));
	wp_enqueue_script('flex-slider', get_stylesheet_directory_uri().'/scripts/jquery.flexslider-min.js', array('jquery'));
	wp_enqueue_script('plugin', get_stylesheet_directory_uri().'/scripts/plugins.js', array('jquery'));
	wp_enqueue_script('modernizr', get_stylesheet_directory_uri().'/scripts/modernizr.js', array('jquery'));
	wp_enqueue_script('custom', get_stylesheet_directory_uri().'/scripts/custom.js', array('jquery', 'modernizr'));
}
// add_action('wp_footer', 'career_enqueue');

/*
 **  VALIDATE SUBSCRIPTION
 **  @desc Redirect to Subscription Page if Number not detected or Subscription has expired
 */

// add_action( 'wp', 'validate_subscription');

function validate_subscription() {
	session_start();

	// Dummy Entry
	// $_SESSION['_msisdn'] = '8027400442';
	// $_SESSION['expiryDate'] = '2017-03-01';
	// $_SESSION['user_id'] = '1';

	$expiry_date = isset($_SESSION['expiryDate'])?$_SESSION['expiryDate']:null;

	if (isset($_GET['do']) && $_GET['do'] == 'logout') {
		# Set Expiry date to old
		$expiry_date = date('2016-01-01');
	}

	if (isset($_GET['m']) && isset($_GET['d'])) {
		# code...

		$home_url = get_home_url();
		// Decode MSISDN and accompanying data
		//     foreach($_GET as $loc => $item) $_GET[$loc] = urldecode(base64_decode($item));

		$_SESSION['_msisdn']    = $_GET['m'];
		$_SESSION['expiryDate'] = $_GET['d'];

		$expiry_date = $_SESSION['expiryDate'];
		// $_SESSION['subscriptionRequestTime'] = isset($_GET['subscriptionRequestTime']) ? $_GET['subscriptionRequestTime'] : '';

		$user_id = mobichurch_get_user_id($_GET['m']);
		error_log($user_id);

		// Assign to SEssion variable
		$_SESSION['user_id'] = $user_id;

		// $st = strtotime($_GET['subscriptionRequestTime']);
		$expiry_date = $_GET['d'];

		// if (date('Y-m-d', $st) >= date('Y-m-d') || !$_SESSION['seenAd'] ) {
		//   $_SESSION['seenAd'] = TRUE;
		//   header('Location: ' . $home_url . '/landing');
		// }

		// Empty GET array
		$_GET = array();

	}

	if (!isset($_SESSION['_msisdn']) || (isset($_SESSION['_msisdn']) && isExpired($expiry_date))) {
		header('Location: http://spexweb.atp-sevas.com/subscription/5433');
	}

	// Do nothing and go to site.
}

/*
 * Check if subscription is expired for user or user is new
 * @return BOOL
 */

function isExpired($expiry_date) {

	$cur_date = date('Y-m-d', $_SERVER['REQUEST_TIME']);

	// error_log($cur_date);
	// error_log($expiry_date);

	# code...
	if ($expiry_date < $cur_date || is_null($expiry_date)) {
		# code...
		session_destroy();
		return true;
	}

	return false;
}



//////////////////////
//////////////////////
///////////// MockTest
add_action('wp', 'test_handler');

function test_handler(){

	$action = isset($_GET['action']) ? $_GET['action'] : '';

	global $test_tpl;

	if ($action != ''){	
		switch($action){
			case 'main_test_page':
				$file = get_template_directory() . '/MockTest/pages/test/main_test_page.php';
			break;
			case 'test_result_page':
				$file = get_template_directory() . '/MockTest/pages/test/test_result_page.php';
			break;
			default:
				$file = get_template_directory() . '/MockTest/pages/test/select_question.php';
			break;
		}

		$test_tpl = $file;
	}

}

//////////////////////
///////////////////////
///////////// CVbuilder

add_action('wp', 'cvbuilder');

function cvbuilder(){

	$active = isset($_GET['active']) ? $_GET['active'] : '';
	global $testing_cvfile;

	if ($active != ''){	
		switch($active){
			case 'template_selection_page':
				$cvfile = get_template_directory() . '/CVbuilder/pages/templates/template_selection_page.php';
			break;

			case 'result':
				header('Location: ' . get_home_url() . '/cv-output');
				exit;
			break;
			default:
				$cvfile = get_template_directory() . '/CVbuilder/cvbuilder.php';
				break;
		}

		$testing_cvfile = $cvfile;
	}
}