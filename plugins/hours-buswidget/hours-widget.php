<?php
/**
 *
 * @package   Hours Widget
 * @author    Nosa Paath <adepaath@gmail.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2019 Inhabitent
 *
 * @wordpress-plugin
 * Plugin Name:       Hours Widget
 * Plugin URI:        https://github.com/nosapaath/inhabitentCo
 * Description:       Business Hours; when are you open??
 * Version:           1.0.0
 * Author:            Nosa
 * Author URI:        https://github.com/nosapaath/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

class Hours_Widget extends WP_Widget {

    /**
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'hours-widget';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		parent::__construct(
			$this->get_widget_slug(),
			'Hours Widget',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Tell people when you are open'
			)
		);

	} 

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
        $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title2 = empty( $instance['title2'] ) ? '' : apply_filters( 'widget_title2', $instance['title2'] );
		$week = empty( $instance['week'] ) ? '' : apply_filters( 'widget_week', $instance['week'] );
		$saturday = empty( $instance['saturday'] ) ? '' : apply_filters( 'widget_saturday', $instance['saturday'] );
		$sunday = empty( $instance['sunday'] ) ? '' : apply_filters( 'widget_sunday', $instance['sunday'] );

		// TODO: other fields go here...

		ob_start();

		if ( $title2 ){
			$widget_string .= $before_title;
			$widget_string .= $title2;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title2'] = strip_tags( $new_instance['title2'] );
		$instance['week'] = strip_tags( $new_instance['week'] );
		$instance['saturday'] = strip_tags( $new_instance['saturday'] );
		$instance['sunday'] = strip_tags( $new_instance['sunday'] );
		// TODO: Here is where you update the rest of your widget's old values with the new, incoming values

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		// TODO: Define default values for your variables, create empty value if no default
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title2' => 'Business Hours',
				'week' => '9am to 5pm',
				'saturday' => '10am to 2pm',
				'sunday' => 'Closed',
			)
		);

		$title2 = strip_tags( $instance['title2'] );
		$week = strip_tags( $instance['week'] );
		$saturday = strip_tags( $instance['saturday'] );
		$sunday = strip_tags( $instance['sunday'] );
		// TODO: Store the rest of values of the widget in their own variables

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action( 'widgets_init', function(){
    register_widget( 'Hours_Widget' );
});
