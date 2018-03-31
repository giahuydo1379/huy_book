<?php

class Giahuy_Helloworld_Block_Helloworld extends Mage_Core_Block_Template
{
 /**
 * prepare block's layout
 *
 * @return Quytv_Helloworld_Block_Helloworld
 */
 public function _prepareLayout()
 { 

     return parent::_prepareLayout();
 }
 
 public function showGiaHuyName()
 {
	return "gia huy name"; 
 } 
 
 
}