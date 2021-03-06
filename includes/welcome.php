<?php
/**
 * This is a welcome message that displays after theme activation 
 * 
 * @package Rookie welcome
 * @since rookie 1.0
 * @author Abukwaik
 */

	$protocol = isset( $_SERVER['https'] ) ? 'https://' : 'http://';
	$rookie_ajax_url = admin_url( 'admin-ajax.php', $protocol );
?>
<script>
	(function($) {
		$(document).ready(function() {
				$("body").on('click', '#rookie_welcome_box_hide',function(e){
	    			e.preventDefault();
	    			$(this).parent().parent().remove();
	    			$.post('<?php echo $rookie_ajax_url; ?>', {action: 'rookie_hide_welcome'}, function(response) {});
    			});
		});
	})(jQuery);
</script> 
<?php global $current_user; ?>
<h3><?php echo __( 'Welcome to Rookie!', 'rookie' ); ?></h3>
<p><?php echo __( 'Dear', 'rookie' ); ?> <?php echo $current_user->display_name; ?>,</p>
<p><?php echo __( 'Thanks for installing <strong>Rookie</strong> I really hope you enjoy using this theme as much as i have enjoyed creating it.<br>I have spent a lot of time to develop/support this theme, if you liked it, Please consider donating so I can keep this as a free theme and add more features in the future. If you cant that is okay as well, I will do my best to make sure you enjoy using our theme!', 'rookie' ); ?></p>
<p><?php echo __( 'Thank you!', 'rookie' ); ?></p>
<p></p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="JUXUWMEFUEJPW">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<h3><?php echo __( 'Start using Rookie', 'rookie' ); ?></h3>
<ol class="rookie-usage">
	<li>
		<?php echo __( 'Refer to ', 'rookie' ); ?><a href="<?php echo esc_url('http://www.croti.com/starter.html'); ?>" target="_blank">Rookie Documentation</a> to learn more about rookie features.
	</li>
	<li>
		<?php echo __( 'If you have any issue do not hesitate to join the ', 'rookie' ); ?><a href="<?php echo esc_url('https://github.com/abukwaik/_rookie-starter/issues'); ?>" target="_blank">issues tracker</a>
	</li>
	<li>
		<?php echo __( 'Donate again! ^_^ ', 'rookie' ); ?>
	</li>
</ol>
<?php get_template_part('includes/welcome-share'); ?>
<p class="description"><a href="#" id="rookie_welcome_box_hide"><?php echo __( 'Hide this message', 'rookie' ); ?></a></p>