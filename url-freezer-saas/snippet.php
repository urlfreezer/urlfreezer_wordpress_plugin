<?php defined( 'ABSPATH' ) or die; ?>
<script type="text/javascript"> 
let url = 'https://urlfreezer.com/';
var _pars = _pars || {};
_pars["user"] = '<?php esc_attr_e( $user_id ); ?>';
_pars["url"] = url;
(function() {
	var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	g.type='text/javascript'; g.async=true; g.defer=true; g.src=url+'app/urlfreezer.js';
	s.parentNode.insertBefore(g,s);
})();
</script> 