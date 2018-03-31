<?php
/*
* Name Extension: Slideshow Homepage
* Version: 1.0.0
* Author: The Cmsmart Development Team 
* Date Created: 16/09/2013
* Websites: http://cmsmart.net
* Technical Support: Forum - http://cmsmart.net/support
* GNU General Public License v3 (http://opensource.org/licenses/GPL-3.0)
* Copyright © 2011-2013 Cmsmart.net. All Rights Reserved.
*/
class Cmsmart_Slideshow_Model_Lofsliderstyle{
    public function toOptionArray()
    {
        return array(
			//Ease in-out
			array('value' => '1',	'label' => Mage::helper('slideshow')->__('One')),
			array('value' => '2',	'label' => Mage::helper('slideshow')->__('Two')),
        );
    }
}
