<?php
namespace Magenest\Movie\Observer;

class ChangeValueTextfield implements \Magento\Framework\Event\ObserverInterface {
    public function execute(\Magento\Framework\Event\Observer $observer){
        $store = $observer->getData('store');
        $website = $observer->getData('website');
    }
}