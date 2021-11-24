<?php defined( 'ABSPATH' ) or die; ?>
<div class="wrap wrap-urlfreezer">
<?php settings_errors(); ?>
	<h1><?php _e( 'URL Freezer - Options', 'urlfreezer' ); ?></h1>
	<form method="post" action="options.php">
		<?php settings_fields( 'urlfreezer_optsgroup' ); ?>
		<?php do_settings_sections( 'urlfreezer_optsgroup' ); ?>
		<table class="form-table">
			<tr>
				<th><?php _e( 'Enabled', 'urlfreezer' ); ?></td>
				<td><input type="checkbox" name="urlfreezer_enabled" value="1" <?php echo get_option( 'urlfreezer_enabled' ) == '' ? '' : 'checked'; ?>></td>
			</tr>
			<tr>
				<th><?php _e( 'User ID', 'urlfreezer' ); ?></td>
				<td><input type="text" name="urlfreezer_id" value="<?php esc_attr_e( get_option( 'urlfreezer_id' ) ); ?>" class="regular-text"></td>
			</tr>
		</table>
		<?php submit_button(); ?>
	</form>
</div>
