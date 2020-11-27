<?php
define('DIR_PLUGIN_PATH', plugin_dir_path(__FILE__));

/**
 * Plugin Name:       WP_course_plugin
 * Plugin URI:        https://.../
 * Description:       test plugin
 * Version:           1.0.0
 * Requires PHP:      7.4
 * Author:            Shalko Eugene
 * Author URI:        https://.../
 */

require_once(DIR_PLUGIN_PATH . 'wrapper.php');
require_once(DIR_PLUGIN_PATH . 'class-shortcode.php');

/*
define( 'DIR_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
require_once(DIR_PLUGIN_PATH . 'wrapper.php');
require_once(DIR_PLUGIN_PATH . 'class-shortcode.php');
 * >>>>>>>>>>>sidebar.php>>>>>>>>>>>>>>>
use View\WheatherShortcode;
WheatherShortcode::registration();
WheatherShortcode::renderShortcode();
*/

add_action('admin_menu', 'mt_add_pages');

// action function for above hook
function mt_add_pages()
{

    add_menu_page('API', 'API config', 8, __FILE__, 'mt_toplevel_page');

}


function mt_toplevel_page()
{

    $api_key = 'api_options';
    $city_name = 'city_name';

    $hidden_field_name = 'api_options_hidden';

    $data_key_name = 'api_options_content';
    $data_city_name = 'city_content';

    $api_val = get_option($api_key);
    $city_val = get_option($city_name);

    if ($_POST[$hidden_field_name] == 'Y') {
        $api_val = $_POST[$data_key_name];
        $city_val = $_POST[$data_city_name];
        update_option($api_key, $api_val);
        update_option($city_name, $city_val);

        ?>
        <div class="updated"><p><strong><?php _e('Options saved.', 'mt_trans_domain'); ?></strong></p></div>
        <?php

    }
    ?>
    <div class="wrap">
        <h2><?= __('Menu Test Plugin Options', 'mt_trans_domain') ?></h2>
        <form name="form1" method="post" action="<?php echo str_replace('%7E', '~', $_SERVER['REQUEST_URI']); ?>">

            <input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">

            <p><?php _e("API key:", 'mt_trans_domain'); ?>
                <input type="text" name="<?php echo $data_key_name; ?>" value="<?php echo $api_val; ?>" size="30">
            </p>
            <p><?php _e("Сity name:", 'mt_trans_domain'); ?>
                <input type="text" name="<?php echo $data_city_name; ?>" value="<?php echo $city_val; ?>" size="30">
            </p>
            <hr/>
            <p class="submit">
                <input type="submit" name="Submit" value="<?php _e('Update Options', 'mt_trans_domain') ?>"/>
            </p>

        </form>
    </div>

    <?php

}

?>
