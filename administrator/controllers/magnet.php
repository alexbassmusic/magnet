<?php
/**
 * @version     1.0.0
 * @package     com_magnet
 * @copyright   © 2013. All Rights Reserved.
 * @license     GNU General Public License v2.0; See LICENSE.txt
 * @author      Alexander.B <alexbassmusic@gmail.com> - https://www.odesk.com/users/~01ae8f6e1a81c189cf
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Magnet controller class.
 */
class MagnetControllerMagnet extends JControllerForm
{

    function __construct() {
        $this->view_list = 'magnets';
        parent::__construct();
    }

}