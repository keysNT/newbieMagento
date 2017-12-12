<?php
namespace Magenest\Movie\Observer;//RegisterChangeNameCustomer

class RegisterChangeNameCustomer implements \Magento\Framework\Event\ObserverInterface {

    public function execute(\Magento\Framework\Event\Observer $observer){
        $customer = $observer->getData('customer');
        $request = $observer->getData('request');
        $customer->setData('firstname', 'Magenest');
        return $customer;
    }
}