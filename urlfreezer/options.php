<?php defined( 'ABSPATH' ) or die; ?>
<div class="wrap wrap-urlfreezer">
<?php settings_errors(); ?>
	<h1><?php _e( 'URL Freezer - Options', 'urlfreezer' ); ?></h1>
    <p>
        In this page you can enable the integration with  <a href="http://urlfreezer.com"> URL Freezer </a>,
        you can find the required user id logging in your account in URL Freezer 
        and accessing the <a href="http://urlfreezer.com/app/script.html"> Install Page </a>.
    </p>
    <p>
        Once enabled the plugin will install a script in all the website pages, the script on page open will scan for all the page outgoing links, send them to URL Freezer
        to check if the links are offline and if there is a relative replacement link 
        that point to a back in time snapshot.
    </p>
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
				<td><input type="text" required="required" name="urlfreezer_id" value="<?php esc_attr_e( get_option( 'urlfreezer_id' ) ); ?>" class="regular-text"></td>
			</tr>
		</table>
		<?php submit_button(); ?>
	</form>
</div>
