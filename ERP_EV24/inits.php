<?php

class InitDB{
	public function __construct() {
        register_activation_hook( __FILE__, array( $this, 'makeADummyDBEntry' ) );
    }


    public function makeADummyDBEntry(){
		//
        printf(
    		'<p id="helloworld"><span class="screen-reader-text">ERP_EV24 sagt Hallo Welt aus inits.php </span><span dir="ltr" lang="de">ERP_EV24 sagt Hallo Welt in Version 3</span></p>'
    	);
	}
}

?>
