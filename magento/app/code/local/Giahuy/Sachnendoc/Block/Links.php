 <?php
// app/code/local/Envato/WidgetLinks/Block/Links.php
class Giahuy_Sachnendoc_Block_Links extends Mage_Catalog_Block_Product_List implements Mage_Widget_Block_Interface
{
    /**
     * Produce links list rendered as html
     *
     * @return string
     */
    
    
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
    
    
    protected function _construct()
    {
        $this->setTemplate('showproduct/widgetshowproduct.phtml');
        parent::_construct();
    }
    protected $_limit;
    protected $_minprice;
    protected $_maxprice;
    protected $_category;
    protected $_enable;
    
    public function getMinprice()
    {
        $this->_minprice = $this->getData('Minprice');
        return $this->_minprice;
    }
    
    public function getLimit()
    {
        $this->_limit = $this->getData('Limit');
        return $this->_limit;
    }
    
    public function getMaxprice()
    {
        $this->_maxprice = $this->getData('Maxprice');
        return $this->_maxprice;
    }
    
    public function getCategory()
    {
        $this->_category = $this->getData('Category');
        return $this->_category;
    }
    
    public function getEnable()
    {
        $this->_enable = $this->getData('Enable_Disable');
        return $this->_enable;
    }
    //tra ve mang product
    public function getProductPrice()
    {
        $a          = $this->getMinprice();
        $b          = $this->getMaxprice();
        $category   = Mage::getModel('catalog/category')->load($this->getCategory());
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
} 