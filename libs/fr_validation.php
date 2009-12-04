<?php
/**
 * French Localized Validation class. Handles localized validation for France
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org
 * @package       localized
 * @since         localized 0.1
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class FrValidation {
/**
 * Checks phone numbers for France
 *
 * @param string $check The value to check.
 * @access public
 * @return boolean
 */
	function phone($check) {
		$pattern = '/^0[1-6]{1}(([0-9]{2}){4})|((\s[0-9]{2}){4})|((-[0-9]{2}){4})$/';
		return preg_match($pattern, $check);
	}
}