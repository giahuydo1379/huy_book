<?php
// app/code/local/Envato/WidgetLinks/Model/Options.php
class Envato_WidgetLinks_Model_Options2 {
/**
  * Provide available options as a value/label array
  *
  * @return array
  */
 public function getAllCategoryId(){
$_categories = Mage::getModel('catalog/category')->getCollection()
					->addAttributeToSelect('name,id')->addIsActiveFilter();;
$data = array ();
if (count($_categories) > 0){
    foreach($_categories as $_category){
        $_category = Mage::getModel('catalog/category')->load($_category->getId());
        $_subcategories = $_category->getChildrenCategories();
        if (count($_subcategories) > 0){
			$data[] = array (
				'value' => $_category->getId(),
				'label' => $_category->getName(),
			); 
            foreach($_subcategories as $_subcategory){
				$data[] = array(
					'value' => $_subcategory->getId(),
					'label' => $_subcategory->getName(),
				);
                 //echo $_subcategory->getName();
                 //echo $_subcategory->getId();
            }
        }
    }
}
	return $data;
}

	//@description: dung de show cac category name trong admin
	//@return: tra ve mot mang co dang array( 	array('value' => value, 'label' => label), 
	//											array('value' => value2, 'label' => label2)	
    public function toOptionArray()
    {
		$array_test = $this->getAllCategoryId();
        return $array_test;
    }
}





 
