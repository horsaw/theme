<?php

use Carbon_Fields\Widget;
use Carbon_Fields\Field;

class Horsaw_Widget_Rich_Text extends Widget {
	/**
	 * Constructor.
	 *
	 * Setup widget title, description, custom fields and custom css classes
	 *
	 * @access public
	 */
	public function __construct() {
		$this->setup(
			__( 'Rich Text', 'horsaw' ),
			__( 'Displays a WYSIWYG editor.', 'horsaw' ),
			[
				Field::make( 'text', 'title', __( 'Title', 'horsaw' ) ),
				Field::make( 'rich_text', 'text', __( 'Text', 'horsaw' ) ),
			]
		);
	}

	/**
	 * Renders the Widget.
	 *
	 * @access public
	 *
	 * @param array $args
	 * @param array $instance
	 *
	 * @return void
	 */
	public function front_end( $args, $instance ) {
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . $instance['title'] . $args['after_title'];
		}
		?>

		<div class="widget-body">
			<?php echo wp_kses_post( $instance['text'] ); ?>
		</div>

		<?php
	}
}