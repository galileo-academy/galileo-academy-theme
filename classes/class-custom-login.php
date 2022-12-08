<?php
/**
 * Initial setup
 *
 * @author      Jay Schmidt
 * @since       23/03/2022
 * @package
 *
 */

class CustomLogin {

    public function __construct() {
		$this->register();
	}

    private function register() {
        //actions
        add_action( 'login_enqueue_scripts', [ $this, 'loginDependencies'] );

        //filters
        add_filter('login_headerurl', [$this, 'customLoginUrl'] );
        add_filter('login_headertext', [$this, 'customLoginTitle'] );
    }

    public function customLoginUrl() {
        return home_url();
    }

    public function customLoginTitle() {
        return 'Galileo Academy';
    }

    public function loginDependencies() {
        wp_enqueue_style('child-theme-main', get_template_directory_uri() .'/assets/css/login.css');
    }

}