<?php

/**
* Custom Post Type UI Admin UI
*/
class cptui_admin_ui {

	function __construct() {

	}

	public function tr_start() {
		return '<tr valign="top">';
	}

	public function tr_end() {
		return '</tr>';
	}

	public function th_start() {
		return '<th scope="row">';
	}

	public function th_end() {
		return '</th>';
	}

	/**
	 * closing <tr> and </td> tags
	 *
	 * @since  0.9
	 *
	 * @return string  completed closing wrapper
	 */
	public function tr_wrap_end() {
		return '</td></tr>';
	}
	/**
	 * Display a select input with true/false values.
	 * @param  array  $args values to use in the input
	 * @return string       constructed input for the form.
	 */
	public function select_bool_input( $args ) {
		$defaults = array(

		);
		$args = wp_parse_args( $args, $defaults );

		$value = $this->tr_wrap_start('','');
		$value .= '<select name="' . $args['name'] . '">';

		foreach( $args['values'] as $val ) {
			$value .= '<option value="' . $val['value_int'] . '" ' . selected( $args['selected'], $val['value_int'] ) . '>' . $val['value_string'] . '</option>';
		}
		$value .= '</select>' . $args['help_text'];

		$value .= $this->tr_wrap_end();

		return $value;
	}

	/**
	 * Display a text input for the user. Will populate if data is available from options
	 * @param  array  $args values to use in the input
	 * @return string       constructed input for the form.
	 */
	public function text_input( $args ) { //TODO: Finish output of other attributes
		$defaults = array(
			'namearray'     => '',
			'name'          => '',
			'textvalue'     => '',
			'maxlength'     => '',
			'onblur'        => '',
			'labeltext'     => '',
			'aftertext'     => '',
			'helptext'      => '',
			'required'      => false
		);
		$args = wp_parse_args( $args, $defaults );
		extract( $args );

		$value = $this->tr_wrap_start( $name, $labeltext, $helptext, $required );

		$value .= '<input type="text" name="' . $namearray . '[' . $name . ']" value="' . $textvalue . '" /><br/>';

		if ( !empty( $aftertext) )
			$value .= $aftertext;

		$value .= $this->tr_wrap_end();

		return $value;

	}

	/**
	 * Display a textarea input for the user. Will populate if data is available from options
	 * @param  array  $args values to use in the input
	 * @return string       constructed input for the form.
	 */
	public function textarea_input( $args ) {
		$defaults = array(

		);
		$args = wp_parse_args( $args, $defaults );

		$value = $this->tr_wrap_start('','');

		$value .= '<textarea name="" rows="" cols=""></textarea>';

		$value .= $this->tr_wrap_end();

		return $value;
	}

	/**
	 * Display a checkbox input for the user. Will check the already selected options if data is available from options.
	 * @param  array  $args values to use in the input
	 * @return string       constructed input for the form
	 */
	public function check_input( $args ) {
		$defaults = array(

		);
		$args = wp_parse_args( $args, $defaults );

		$value = '<input type="checkbox" name="" value="" /> <a href="#" title="" class="help">?</a> <br/>';
	}
}
