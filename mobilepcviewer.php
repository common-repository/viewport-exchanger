<?php
/*
Plugin Name: Viewport Exchanger
Plugin URI:http://wp-kyoto.net/
Description:There is plugin switching the viewport of PC view and Mobile view.
Author:Hidetaka Okamoto
Version: 1.2
Author URI:http://wp-kyoto.net/
*/

/*  Copyright 2014 Hidetaka OKamoto

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if ( wp_is_mobile() ) {
add_action('wp_footer','mpv_viewer');
 function mpv_viewer(){
    echo '<div class="switchBtn"><a href="javascript:void(0);" id="swPc">Show PC View</a><a href="javascript:void(0);" id="swSp">Show Mobile View</a></div>';
    wp_enqueue_script('mpview',plugins_url( 'mpview.js' , __FILE__ ) , array('jquery'));
    wp_enqueue_script('jquery.cookie',plugins_url( 'jquery.cookie.js' , __FILE__ ) , array('jquery'));
    wp_enqueue_style( 'mpview', plugins_url( 'mpview.css' , __FILE__ ) );
}
}