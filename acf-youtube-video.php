<?php
/*
Plugin Name: Advanced Custom Fields: YouTube Video
Plugin URI: https://github.com/omoikane/acf-youtube-video
Description: Adds a 'YouTube Video' field type for the Advanced Custom Fields WordPress plugin.
Version: 1.0.0
Author: Daniele De Nobili
Author URI: http://www.metaline.it/
License: MIT
License URI: http://opensource.org/licenses/MIT
*/


class acf_field_youtube_video_plugin
{
	/*
	*  Construct
	*
	*  @description:
	*  @since: 3.6
	*  @created: 1/04/13
	*/

	function __construct()
	{
		// set text domain
		/*
		$domain = 'acf-youtube_video';
		$mofile = trailingslashit(dirname(__File__)) . 'lang/' . $domain . '-' . get_locale() . '.mo';
		load_textdomain( $domain, $mofile );
		*/


		// version 4+
		add_action('acf/register_fields', array($this, 'register_fields'));


		// version 3-
		add_action( 'init', array( $this, 'init' ), 5);
	}


	/*
	*  Init
	*
	*  @description:
	*  @since: 3.6
	*  @created: 1/04/13
	*/

	function init()
	{
		if(function_exists('register_field'))
		{
			register_field('acf_field_youtube_video', dirname(__File__) . '/youtube_video-v3.php');
		}
	}

	/*
	*  register_fields
	*
	*  @description:
	*  @since: 3.6
	*  @created: 1/04/13
	*/

	function register_fields()
	{
		include_once('youtube_video-v4.php');
	}

}

new acf_field_youtube_video_plugin();
