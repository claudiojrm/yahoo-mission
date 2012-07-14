<?

	//Event logging class for iYumm
	
	class EventLog {
		function __construct ($data = null) {
			if ($data) {				
				/*
				if (!class_exists('Analytics'))
					require_once('analytics_events.php');
				
				$analytics = new Analytics();
				$analytics->trackEvent('WP-Logs', $data['event'], $data['user_id'], $data['text']);
				*/
				
				$post = array(
					'post_type' => 'EventLog',
					'post_content' => $data['text'],
					'post_title' => $data['event'],
					'post_status' => 'publish',
					'post_author' => ($data['user_id'] != '' ? $data['user_id'] : 1) //if no user id given, post from admin account
				);
				
				$post_id = wp_insert_post($post);
				
				if ($data['notifo'] && function_exists('notifo_message')) {
					notifo_message($data['event'],$data['text'],get_permalink($post_id));
				}
				
				//remove things that wont be in metadata
				unset($data['text'],$data['event'],$data['user_id']);
				
				//save everything else as metadata
				foreach ($data as $item => $value) {
					update_post_meta($post_id,'log_'.$item,$value);
				}
			}
		}
	}
	
?>