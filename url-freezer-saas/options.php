<?php defined( 'ABSPATH' ) or die; ?>
<div class="wrap wrap-url-freezer-saas">
<?php settings_errors(); ?>
	<h1><?php _e( 'URL Freezer SaaS - Options', 'url-freezer-saas' ); ?></h1>
	<form method="post" action="options.php">
		<?php settings_fields( 'url_freezer_saas_optsgroup' ); ?>
		<?php do_settings_sections( 'url_freezer_saas_optsgroup' ); ?>
		<table class="form-table">
			<tr>
				<th><?php _e( 'Enabled', 'url-freezer-saas' ); ?></td>
				<td><input type="checkbox" name="url_freezer_saas_enabled" value="1" <?php echo get_option( 'url_freezer_saas_enabled' ) == '' ? '' : 'checked'; ?>></td>
			</tr>
			<tr>
				<th><?php _e( 'User ID', 'url-freezer-saas' ); ?></td>
				<td><input type="text" name="url_freezer_saas_id" value="<?php esc_attr_e( get_option( 'url_freezer_saas_id' ) ); ?>" class="regular-text"></td>
			</tr>
		</table>
		<?php submit_button(); ?>
	</form>
</div>