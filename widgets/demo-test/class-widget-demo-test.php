<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' );

class Widget_Demo_Test extends WP_Widget
{
	public function __construct()
	{
		parent::WP_Widget( false, 'Demo Test', array( 'description' => '' ) );
	}

	/**
	 * {@inheritdoc}
	 */
	public function widget($args, $instance) {
		echo '<p>Demo Test Widget</p>';
	}
}
