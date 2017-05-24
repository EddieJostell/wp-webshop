<?php
/*
* Plugin Name: Text Inserter
* Description: A simple plugin to insert a text snippet wherever you want it.
* Version: 1.0
* Author: Eduardo Jostello
*/

function insert_text()
{
	//echo "Hello World";
	echo '<h1>' . get_option('insert_text_data') . '</h1>';
}

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'insert_text_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'insert_text_remove' );

function insert_text_install() {
	/* Creates new database field */
	add_option("insert_text_data", 'Default', '', 'yes');
}

function insert_text_remove() {
	/* Deletes the database field */
	delete_option('insert_text_data');
}

if ( is_admin() ){

	/* Call the html code */
	add_action('admin_menu', 'insert_text_admin_menu');

	function insert_text_admin_menu() {
		add_options_page('Insert Text Plugin', 'Insert Text Plugin', 'administrator',
			'insert-text-plugin', 'insert_text_html_page');
	}
}

function insert_text_html_page() {
	?>
	<div>
		<h2>Insert Text Options</h2>

		<form method="post" action="options.php">
			<?php wp_nonce_field('update-options'); ?>

			<table width="510">
				<tr valign="top">
					<th width="92" scope="row">Enter Text</th>
					<td width="406">
						<input name="insert_text_data" type="text" id="insert_text_data"
						value="<?php echo get_option('insert_text_data'); ?>" />
						(ex. Hello World)</td>
					</tr>
				</table>

				<input type="hidden" name="action" value="update" />
				<input type="hidden" name="page_options" value="insert_text_data" />

				<p>
					<input type="submit" value="<?php _e('Save Changes') ?>" />
				</p>

			</form>
		</div>
		<?php
	}

	?>
