<?

	add_action('init', 'post_type_EventLog');
	
	add_action("manage_posts_custom_column",  "EventLog_custom_columns");
	add_filter("manage_edit-EventLog_columns", "EventLog_edit_columns");
	
	function post_type_EventLog() {
		register_post_type(
			'EventLog', 
			array(
				'label' => __('Logs'),
				'public' => true,
				'show_ui' => true,
				'exclude_from_search' => true,
				'show_in_nav_menus' => false,
				'supports' => array(
					'title',
					'editor',
					'tags'
				),
				'menu_position' => 5
	        	)
	        );

		//remove the 'Add New' link
		global $submenu;
		unset($submenu['edit.php?post_type=EventLog'][10]);
	}
	
	function EventLog_edit_columns($columns){
		$columns = array(
		  "cb" => "<input type=\"checkbox\" />",
		  "title" => "Title",
		  "timestamp" => "Timestamp",
		  "user" => "User"
		);
		
		return $columns;
	}
	
	function EventLog_custom_columns($column){
		global $post;
		$custom = get_post_custom($post->ID);
	
		switch ($column) {
			case "timestamp":
		    	print date('m-d-Y h:i:a',strtotime($post->post_date));
		  	break;

			case "user":
				$user = get_userdata($post->post_author);
				print $user->ID . ' (' . $user->user_login . ')';
			break;
		}
	}

?>