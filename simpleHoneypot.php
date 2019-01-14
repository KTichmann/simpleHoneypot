<?php
/*
Plugin Name: Simple Honeypot
Plugin URI:  
Description: A simple honeypot plugin for use with defender pro
Version:     0.1
Author:      ktichmann
Author URI:  ktichmann.github.io
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: gcp
Domain Path: /languages
*/

function honeypot_field() {
    add_action('login_form','simpleHoneypot_honeypot_login_field');
    function bOnline_honeypot_login_field(){
        wp_register_script( 'honeypot_script', plugins_url('./honeypot.js', __FILE__));
        wp_enqueue_script('honeypot_script')
            //Hidden fields added to the login page
    ?>
        <div class="simpleHoneypot" style="display:none">
            <label>Don't Fill In This Field</label>
            <input type="text" name="simpleHoneypot" id="simpleHoneypot" />
        </div>
    <?php
    }
}
honeypot_field();