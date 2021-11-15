<?php
/**
 * @package ERP_EV24
 * @version 0.0.2
 */
/*
Plugin Name: ERP_EV24
Plugin URI: http://wordpress.org/plugins/ERP_EV24/
Description: This is a development sandbox for educational training of building wordpress plugins in a DevOps toolchain. Just starting based on Hello Dolly
Author: Kevin Beeskow, Hanning Liu, Tilo Karczewski, Duc Ngo Minh, William Liesche
Version: 0.0.1
Author URI: https://github.com/TiloKar/SoftProDoc
*/

// This just echoes hello world in container.
function hello_world() {
	printf(
		'<p id="helloworld"><span class="screen-reader-text">ERP_EV24 sagt Hallo Welt </span><span dir="ltr" lang="de">ERP_EV24 sagt Hallo Welt</span></p>'
	);
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'hello_world' );

// We need some CSS to position the paragraph.
function helloworld_css() {
	echo "
	<style type='text/css'>
	#helloworld {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl #helloworld {
		float: left;
	}
	.block-editor-page #helloworld {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#helloworld,
		.rtl #helloworld {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'helloworld_css' );
