<?php
/*
Plugin Name: push4sender
Plugin URI: https://push4site.com
Description: This plugin is making push message and send them for subscribers
Author: Inin Vitalii
Author URI: http://washrepair.ru
*/

/*  Copyright 2016  Jenyay  (email : jedyv {at} yandex.ru)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Hook for adding admin menus
add_action('admin_menu', 'mt_add_pages');

// action function for above hook
function mt_add_pages() {
    // Add a new top-level menu (ill-advised):
    add_menu_page('Push4sender', 'Push4sender', 8, __FILE__, 'mt_toplevel_page', 'dashicons-email-alt');
     //add_submenu_page(__FILE__, 'Test Sublevel', 'Test Sublevel', 8, 'sub-page', 'mt_sublevel_page');

}

// mt_toplevel_page() displays the page content for the custom Test Toplevel menu
function mt_toplevel_page() {
    echo "<h2>Push4sender</h2>";
    ?>

<style type="text/css">
    #feedback-form {
  max-width: 400px;
  padding: 2%;
  border-radius: 3px;
  background: #f1f1f1;
}
#feedback-form [required] {
  width: 100%;
  box-sizing: border-box;
  margin: 2px 0 2% 0;
  padding: 2%;
  border: 1px solid rgba(0,0,0,.1);
  border-radius: 3px;
  box-shadow: 0 1px 2px -1px rgba(0,0,0,.2) inset, 0 0 transparent;
}
#feedback-form [required]:hover {
  border-color: #7eb4ea;
  box-shadow: 0 1px 2px -1px rgba(0,0,0,.2) inset, 0 0 transparent;
}
#feedback-form [required]:focus {
  outline: none;
  border-color: #7eb4ea;
  box-shadow: 0 1px 2px -1px rgba(0,0,0,.2) inset, 0 0 4px rgba(35,146,243,.5);
  transition: .2s linear;
}
#feedback-form [type="submit"] {
  padding: 2%;
  border: none;
  border-radius: 3px;
  box-shadow: 0 0 0 1px rgba(0,0,0,.2) inset;
  background: #669acc;
  color: #fff;
}
#feedback-form [type="submit"]:hover {
  background: #5c90c2;
}
#feedback-form [type="submit"]:focus {
  box-shadow: 0 1px 1px #fff, inset 0 1px 2px rgba(0,0,0,.8), inset 0 -1px 0 rgba(0,0,0,.05);
}
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
    
    <div class="container" style="margin-top: 30px;">
    <row>
        <div class="col-md-4 col-md-offset-2">
            <form id="feedback-form" method="POST" action="">
            Chrome<input id="Chrome" type="checkbox" checked>
            Firefox<input id="Firefox" type="checkbox" checked>
            Safari<input id="Safari" type="checkbox" checked>
            <br><br>Tags
            <input id="title" type="text" name="title" required placeholder="ААА" value="ААА">
            Body of message
            <textarea id="body" name="body" required rows="5">Сообщение для рассылки</textarea>
            Website_id
            <input id="website_id" type="text" name="website_id" required placeholder="https://push4site.com" value="244">
            API-KEY
            <input id="api_key" type="text" name="api_key" required placeholder="API-KEY" value="AAABBBCCC555">
            Link
            <input id="link" type="text" name="link" required placeholder="API-KEY" value="washrepair.ru">
            <input type="button" value="Отправить" onclick="SendPush()">
            </form>
            <div id="CheckSend" style="margin-left: 30px;"></div>
        </div>
    </row>
</div>
<script type="text/javascript">
function SendPush() {
    var title = document.getElementById("title").value;
    var body = document.getElementById("body").value;
    var website_id = document.getElementById("website_id").value;
    var api_key = document.getElementById("api_key").value;
    var link = document.getElementById("link").value;
    var browsers = [];
     if (document.getElementById("Chrome").checked) {
      browsers.push("Chrome");
     }
     if (document.getElementById("Firefox").checked) {
      browsers.push("Firefox");
     }
     if (document.getElementById("Safari").checked) {
      browsers.push("Safari");
     }

    $.ajax({  
        type:'post',
        url: '/wp-content/plugins/push4sender/client.php',
        data: { 'title': title,
                    'body': body,
                    'website_id': website_id,
                    'api_key': api_key,
                    'link': link,
                    'browsers': browsers
         },
        success: function(data) { 
            $('#CheckSend').html(data);
        }
    });
}
</script>

<?php } ?>
