<?php
/**
 * EasySocialShareButtons DisplayMethod: Flyin
 *
 * @package   EasySocialShareButtons
 * @author    AppsCreo
 * @link      http://appscreo.com/
 * @copyright 2016 AppsCreo
 * @since 3.6
 *
 */

class ESSBDisplayMethodFlyin {

	public static function generate_flyin_code($options, $share_buttons, $is_shortcode, $shortcode_options = array()) {
		$output = '';
		// loading flyin display settings
		$flyin_window_title = essb_object_value($options, 'flyin_window_title');
		$flyin_user_message = essb_object_value($options, 'flyin_user_message');
		$flyin_user_autoclose = essb_object_value($options, 'flyin_user_autoclose');
		$flyin_position = essb_object_value($options, 'flyin_position');
		// display settings
		$flyin_user_width = essb_object_value($options, 'flyin_user_width');
		$flyin_window_popafter = essb_object_value($options, 'flyin_window_popafter');
		$flyin_user_percent = essb_object_value($options, 'flyin_user_percent');
		$flyin_display_end = essb_object_bool_value($options, 'flyin_display_end');
		$flyin_user_manual_show = essb_object_bool_value($options, 'flyin_user_manual_show');
		$flyin_window_close_after = essb_object_value($options, 'flyin_window_close_after');
		$flyin_user_notshow_onclose = essb_object_bool_value($options, 'flyin_user_notshow_onclose');
		$flyin_user_notshow_onclose_all = essb_object_bool_value($options, 'flyin_user_notshow_onclose_all');
		
		$flyin_trigger_oncomment = essb_object_bool_value($options, 'flyin_display_comment') ? " essb-flyin-oncomment" : "";
		
		// if the message is set to appear after comment it will have automatically manual display mode
		if (essb_object_bool_value($options, 'flyin_display_comment')) {
			$flyin_user_manual_show = true;
		}
			
		if ($is_shortcode) {
			$shortcode_window_title = isset($shortcode_options['flyin_title']) ? $shortcode_options['flyin_title'] : '';
			$shortcode_window_message = isset($shortcode_options['flyin_message']) ? $shortcode_options['flyin_message'] : '';
			$shortcode_pop_on_percent = isset($shortcode_options['flyin_percent']) ? $shortcode_options['flyin_percent'] : '';
			$shortcode_pop_end = isset($shortcode_options['flyin_end']) ? $shortcode_options['flyin_end'] : '';
		
			if (!empty($shortcode_window_title)) {
				$flyin_window_title = $shortcode_window_title;
			}
			if (!empty($shortcode_window_message)) {
				$flyin_user_message = $shortcode_window_message;
			}
			if (!empty($shortcode_pop_on_percent)) {
				$flyin_user_percent = $shortcode_pop_on_percent;
			}
			if (!empty($shortcode_pop_end)) {
				$flyin_display_end = essb_unified_true($shortcode_pop_end);
			}
		}
			
		if (!empty($flyin_user_message)) {
			$flyin_user_message = stripslashes($flyin_user_message);
			$flyin_user_message = do_shortcode($flyin_user_message);
			$flyin_user_message = essb_post_details_to_content($flyin_user_message);
		}
		if (!empty($flyin_window_title)) {
			$flyin_window_title = stripslashes($flyin_window_title);
			$flyin_window_title = essb_post_details_to_content($flyin_window_title);
		}
		
		if (essb_option_bool_value('flyin_mobile_deactivate')) {
			$flyin_position .= ' essb_mobile_hidden';
		}
		if (essb_option_bool_value('flyin_tablet_deactivate')) {
			$flyin_position .= ' essb_tablet_hidden';
		}
		if (essb_option_bool_value('flyin_desktop_deactivate')) {
			$flyin_position .= ' essb_desktop_hidden';
		}
			
		$output .= sprintf('<div class="essb-flyin%10$s essb-flyin-%11$s" data-width="%1$s" data-load-percent="%2$s" data-load-end="%3$s" data-load-manual="%4$s" data-load-time="%5$s" data-close-after="%6$s" data-close-hide="%7$s" data-close-hide-all="%8$s" data-postid="%9$s">',
				esc_attr($flyin_user_width), esc_attr($flyin_user_percent), esc_attr($flyin_display_end), 
				esc_attr($flyin_user_manual_show), esc_attr($flyin_window_popafter),
				esc_attr($flyin_window_close_after), esc_attr($flyin_user_notshow_onclose), 
				esc_attr($flyin_user_notshow_onclose_all), esc_attr(get_the_ID()), 
				esc_attr($flyin_trigger_oncomment), esc_attr($flyin_position));
		$output .= '<a href="#" class="essb-flyin-close" onclick="essb.flyin_close(); return false;"></a>';
		$output .= '<div class="essb-flyin-content">';
		
		if ($flyin_window_title != '') {
			$output .= sprintf('<h3>%1$s</h3>', stripslashes($flyin_window_title));
		}
		if ($flyin_user_message != '') {
			$output .= sprintf('<div class="essb-flyin-content-message">%1$s</div>', stripslashes($flyin_user_message));
		}
		
		if (!$is_shortcode) {
			$flyin_noshare = essb_object_bool_value($options, 'flyin_noshare');
			if (!$flyin_noshare) {
				$output .= $share_buttons;
			}
		}
		else {
			$output .= $share_buttons;
		}
		
		if ($flyin_window_close_after != '') {
			$output .= '<div class="essb_flyin_counter_text"></div>';
		}
		
		$output .= '</div>';
		$output .= "</div>";
		
		if ($flyin_window_popafter != '') {
			$output .= '<div class="essb-forced-hidden" id="essb_settings_flyafter_counter"></div>';
		}
		if ($flyin_user_autoclose != '') {
			$output .= sprintf('<div id="essb_settings_flyin_user_autoclose" class="essb-forced-hidden">%1$s</div>', $flyin_user_autoclose);
		}
		
		return $output;
	}
}