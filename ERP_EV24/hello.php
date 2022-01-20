<?php
/**
 * @package ERP_EV24
 * @version 0.0.3
 */
/*
Plugin Name: ERP_EV24
Plugin URI: http://wordpress.org/plugins/ERP_EV24/
Description: This is a development sandbox for educational training of building wordpress plugins in a DevOps toolchain. Just starting based on Hello Dolly
Author: Kevin Beeskow, Hanning Liu, Tilo Karczewski, Duc Ngo Minh, William Liesche
Version: 0.0.3
Author URI: https://github.com/TiloKar/SoftProDoc
*/

//eigene testklasse
include 'inits.php';

$myO = new InitDB();

// This just echoes hello world in container.
// aus hello-dolly übernommen, um die basics zu testen
function hello_world() {
	printf(
		'<p id="helloworld"><span class="screen-reader-text">ERP_EV24 sagt Hallo Welt in Version 3 </span><span dir="ltr" lang="de">ERP_EV24 sagt Hallo Welt in Version 3</span></p>'
	);
}

// Now we set that function up to execute when the admin_notices action is called.
// aus hello-dolly übernommen, um die basics zu testen
add_action( 'admin_notices', '$myO->makeADummyDBEntry()' );

// We need some CSS to position the paragraph.
// aus hello-dolly übernommen, um die basics zu testen
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
// aus hello-dolly übernommen, um die basics zu testen
add_action( 'admin_head', 'helloworld_css' );

?>
