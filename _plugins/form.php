<?php
/**
 * @package Swiftlet
 * @copyright 2009 ElbertF http://elbertf.com
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU Public License
 */

if ( !isset($model) ) die('Direct access to this file is not allowed');

switch ( $hook )
{
	case 'info':
		$info = array(
			'name'       => 'form',
			'version'    => '1.0.0',
			'compatible' => array('from' => '1.2.0', 'to' => '1.2.*'),
			'hooks'      => array('init' => 1)
			);

		break;	
	case 'init':
		require($contr->classPath . 'form.php');

		$model->form = new form($model);

		break;
}