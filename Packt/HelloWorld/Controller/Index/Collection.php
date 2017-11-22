<?php
namespace Packt\HelloWorld\Controller\Index;

class Collection extends \Magento\Framework\App\Action\Action {
    public function execute() {
        $productCollection = $this->_objectManager
            ->create('Magento\Catalog\Model\ResourceModel\Product\Collection')
            ->addAttributeToSelect([
                'name',
                'price',
                'image',
            ])
            //->addAttributeToFilter('name', 'Premium Quality')
//            ->addAttributeToFilter('name', array(
//                'like' => '%%'
//            ));
            //->setPageSize(10,1);
            ->addAttributeToFilter('entity_id', array(
                'in' => array(1,3)
            ));
        //$output = $productCollection->getSelect()->__toString();
        $output = '';
        //$productCollection->setDataToAll('price',20);
        //$productCollection->save();
        foreach ($productCollection as $product) {
            $output .= \Zend_Debug::dump($product->debug(), null, false);
        }
        $this->getResponse()->setBody($output);
    }
}