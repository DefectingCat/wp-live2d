<?php
/*
Plugin Name: 插件测试
Plugin URI: www.defectink.com
Description: 这是一个插件测试
Version: 0.0.1
Author: Defectink
Author URI: www.defectink.com
License: A "Slug" license name e.g. GPL2
*/
defined('ABSPATH') or exit;
//定义插件url
define('LIVE2D_URL', plugins_url('', __FILE__));
//定义插件目录
define('LIVE2D_PATH', dirname(__FILE__));
//定义footer
add_action('wp_footer', 'live2d_footer');
//在footer中添加一个canvas画布
function live2d_footer()
    {
            ?>
                <canvas id="paul" width="280" height="250"></canvas>
        <?php
    }
//定义js
    add_action('wp_enqueue_scripts', 'live2d_scripts');
    function live2d_scripts()
    {
	        wp_enqueue_style('live2d-base', LIVE2D_URL . 'plugin_dir_url( __FILE__ );. umaru/css/style.css', array(), 'all');
            wp_enqueue_script('live2d-base', LIVE2D_URL . 'plugin_dir_url( __FILE__ );. umaru/js/live2d.js', array(),'all',false);
    }
//定义footer
add_action('wp_footer', 'live2d_footer2');
function live2d_footer2()
    {
            ?>
				<script type="text/javascript">
    loadlive2d("paul", "plugin_dir_url( __FILE__ );. umaru/model.json");
</script>
        <?php
    }
?>