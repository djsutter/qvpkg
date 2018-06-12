<?php
/**
 * Qualivera Corporation
 *
 * @package QVWW
 */

/**
 * Implements the Welcome controller.
 */
class Welcome extends Qvc_controller {
	public $_access = array(
		'*' => 'public_perm',
	);

	/**
	 * Display the static home page.
	 */
	function index() {
		$page['title'] = 'QVPkg Home';
		$page['view'] = 'qvpkg_home';
		$this->theme->render($page);
	}
}
