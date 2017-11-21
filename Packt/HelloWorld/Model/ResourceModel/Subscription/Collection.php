<?php
namespace Packt\HelloWorld\Model\ResourceModelSubscription;

/**
 * Subscription Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {
    /**
     *	Initialize	resource	collection
     *
     *	@return	void
     */
    public function _construct() {
        $this->_init('Packt\HelloWorld\Model\Subscription', 'Packt\HelloWorld\Model\ResourceModel\Subscription');
    }
}