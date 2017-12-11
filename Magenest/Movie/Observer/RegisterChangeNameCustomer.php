<?php
namespace Magenest\Movie\Observer;//RegisterChangeNameCustomer

class RegisterChangeNameCustomer implements \Magento\Framework\Event\ObserverInterface {
    public function execute(\Magento\Framework\Event\Observer $observer){
        var_dump($observer);
        $displayText = $observer->getEvent()->getCurrentCustomerId();
//        $displayText->setText('Execute event successfully');
        return $displayText;
    }
}