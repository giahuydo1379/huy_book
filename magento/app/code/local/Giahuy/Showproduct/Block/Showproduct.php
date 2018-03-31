 <?php
class Giahuy_Showproduct_Block_Showproduct extends Mage_Catalog_Block_Product_List
{
    //lấy tất cả sản phẩm sử dụng getCollection
    //getCollection cho ra những sản phẩm có id, sku, chỉ để xác định sản phẩm
    protected function _getProductCollection()
    {
        return Mage::getModel('catalog/product')->getCollection();
    }
    
    //hàm dùng để function _getProductCollection()
    public function getAllProduct()
    {
        return $this->_getProductCollection();
    }
    
    //lấy tất cả sản phẩm theo  id
    public function getAllDataProduct($productId)
    {
        return Mage::getModel('catalog/product')->load($productId);
    }
    
    //hàm lấy theo category id trả về string id
    public function getCategoryId()
    {
        $configValue4 = Mage::getStoreConfig('tab1/general/dropdown', Mage::app()->getStore());
        return $configValue4;
        
    }
    
    //hàm lấy giá trong trường admin trả về giá
    public function getMinprice()
    {
        $configValue = Mage::getStoreConfig('tab1/general/text_field2', Mage::app()->getStore());
        return $configValue;
    }
    //hàm lấy số lượng trả về số lượng
    public function getLimit()
    {
        $configValue5 = Mage::getStoreConfig('tab1/general/text_field3', Mage::app()->getStore());
        return $configValue5;
    }
    //hàm lấy giá cao
    public function getMaxprice()
    {
        $configValue2 = Mage::getStoreConfig('tab1/general/text_field', Mage::app()->getStore());
        return $configValue2;
    }
    //hàm dùng để enable module
    public function getEnabledisable()
    {
        $configValue3 = Mage::getStoreConfig('tab1/general/active', Mage::app()->getStore());
        return $configValue3;
    }
    // hàm lọc giá
    
    public function getProductPrice()
    {
        $a          = $this->getMinprice();
        $b          = $this->getMaxprice();
        $category   = Mage::getModel('catalog/category')->load($this->getCategoryId());
        $collection = $category->getProductCollection();
        $collection = $collection->addFieldToFilter('price', array(
            'from' => $a,
            'to' => $b
        ));
        $collection->addAttributeToFilter('status', Mage_Catalog_Model_Product_Status::STATUS_ENABLED);
        $collection->addFieldToFilter('visibility', Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH);
        $collection->addAttributeToSelect(array(
            'name',
            'image',
            'price',
            'special_price',
            'special_packing',
            'prosort',
            'description',
            'special_from_date',
            'special_to_date'
        ));
        $collection->getSelect()->limit($this->getLimit());
        return $collection;
    }
    //hàm để xuất mảng sản phẩm có category id
    public function getIdCategory()
    {
        
        $category   = Mage::getModel('catalog/category')->load($this->getCategoryId());
        $collection = $category->getProductCollection();
        $collection->addAttributeToSelect('*');
        return $collection;
    }  
} 