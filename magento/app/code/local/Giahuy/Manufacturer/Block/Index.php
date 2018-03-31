<?php
class Giahuy_Manufacturer_Block_Index extends Mage_Core_Block_Template{
	public function index()
	{
		$atribute = Mage::getModel('eav/config')->getAttribute('catalog_product', 'manufacturer');
		return $attribute;
}
}