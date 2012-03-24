<?php
/*
Plugin Name: iFrame Wrapper
Plugin URI: http://www.proofbuddy.com
Description: Adds a shortcode that allows you to embed another site inside a page or post using an iframe.
Version: 0.1.1
Author: ProofBuddy
Author URI: http://www.proofbuddy.com
License: GPL2
*/

add_shortcode('iframeWrapper', array('iframeWrapper', 'shortcode'));

add_action('wp_enqueue_scripts', array('iframeWrapper', 'queueScripts')); 

class iframeWrapper {

    public function shortcode($atts) {
        
        
        $url = $atts['url'];
        if (empty($url)) {
            return '<!-- url value not passed -->';
        }
        
        else if (!preg_match('/^http:\/\//', $url)) {
            $url = 'http://'.$url;
        }
        
        return '<iframe scrolling="no" class="iframe-wrapper" style="width:100%;border:0;overflow-y:hidden;" src="'.$url.'"></iframe>';  
    }
    
    public function queueScripts() {
        wp_register_script('iframe-wrapper', plugins_url('iframe-wrapper.js', __FILE__)); 
        wp_enqueue_script('jquery'); 
        wp_enqueue_script('iframe-wrapper'); 
    }
    
}
?>