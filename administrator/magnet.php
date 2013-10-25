<?php
/**
 * @version     1.0.0
 * @package     com_magnet
 * @copyright   © 2013. All Rights Reserved.
 * @license     GNU General Public License v2.0; See LICENSE.txt
 * @author      Alexander.B <alexbassmusic@gmail.com> - https://www.odesk.com/users/~01ae8f6e1a81c189cf
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_magnet')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JController::getInstance('Magnet');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
