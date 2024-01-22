<?php defined( '\ABSPATH' ) || exit; ?>
<input type="text" class="input-sm col-md-4" ng-model="query_params.<?php echo esc_attr($module_id); ?>.min_price"
       ng-init="query_params.<?php echo esc_attr($module_id); ?>.min_price = ''"
       placeholder="<?php esc_html_e( 'Min. price', 'content-egg' ); ?>"/>
<input type="text" class="input-sm col-md-4" ng-model="query_params.<?php echo esc_attr($module_id); ?>.max_price"
       ng-init="query_params.<?php echo esc_attr($module_id); ?>.max_price = ''"
       placeholder="<?php esc_html_e( 'Max. price', 'content-egg' ); ?>"/>