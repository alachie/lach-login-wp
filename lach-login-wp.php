<?php
/*
Plugin Name: LACH Login
Description: styles the wordpress login screen
Version:     1.0
Author:      LACH
Author URI:  https://lach.io/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function lach_login_stylesheet() {
    ?>
	<style>
		body.login {
			background: white;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		body.login form {
			box-shadow: none;
			padding: 0;
			margin: 0;
			overflow: visible;
		}
		div#login {
			padding: 0;
		}
		body.login div#login h1 a,
		#nav,
		#backtoblog,
		.forgetmenot {
			display: none;
		} 
		body.login form .input,
		body.login form input[type=checkbox], body.login input[type=text] {
			background: white;
			padding: 10px;
			margin: 0;
			margin-top: 10px;
			margin-bottom: 10px;
			box-shadow: none;
		}

		#loginform .input:focus {
			box-shadow: 0 0 20px 0 rgba(115, 184, 255, 0.53);
			border-color: #299cff;
		}

		.login form label {
			font-size: 12px;
		}

		.login #wp-submit {
			width: 100%;
			text-shadow: none;
			font-size: 12px;
			line-height: auto;
			padding: 10px;
			margin-top: 10px;
			border-radius: 0;
			height: auto;
			background-color: #252525;
			border: none;
			box-shadow: none;
			transition: transform 0.2s ease-out;
		}
		.login #wp-submit:focus {
			background-color: #299cff;
			box-shadow: 0 0 20px 0 rgba(115, 184, 255, 0.53);
		}

		.login #wp-submit:active {
			transform: none;
		}

		body.login #login_error, 
		body.login .message {
			border-left: 4px solid #299cff;
			padding: 10px;
			font-size: 12px;
			margin-left: 0;
			margin-bottom: 20px;
			background-color: #fff;
			box-shadow: none;
		}
		
	</style>
    <?php
}
add_action( 'login_enqueue_scripts', 'lach_login_stylesheet' );
