<?php
/*
Plugin Name: Messenger Customer Chat
Description: Messenger Customer Chat is the official free Messenger customer chat plugin for WordPress by Facebook. This plugin allows you to interact with your customers using Messenger by integrating it on your WordPress website in three simple steps. To get started, go to your Wordpress Dashboard -> Customer Chat -> click on "Setup Customer Chat."
Author: Facebook
Author URI: https://developers.facebook.com
Version: 1.5

* Copyright (C) 2017-present, Facebook, Inc.
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; version 2 of the License.

* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*/

class Facebook_Messenger_Customer_Chat {
  function __construct() {
    include( plugin_dir_path( __FILE__ ) . 'options.php' );
    add_action( 'wp_footer', array( $this, 'fbmcc_inject_messenger' ) );
  }

  function fbmcc_inject_messenger() {
    if( get_option( 'fbmcc_pageID' ) != '' ) {
      $genCode = "";
      $genCode .= "
        <div id='fb-root'></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/".get_option( 'fbmcc_locale' )."/sdk/xfbml.customerchat.js#xfbml=1&version=v6.0&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
          <div class='fb-customerchat'
            attribution='wordpress'
            page_id=".get_option( 'fbmcc_pageID' )."
          >
        </div>
        ";
      _e($genCode);
    }else if( get_option( 'fbmcc_enabled' ) == '1'
      && get_option( 'fbmcc_generatedCode' ) != ''
    ) {
      _e( stripslashes( get_option( 'fbmcc_generatedCode' ) ) );
    }
  }
}

new Facebook_Messenger_Customer_Chat();
?>
