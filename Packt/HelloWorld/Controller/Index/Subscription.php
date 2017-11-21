<?php
namespace Packt\HelloWorld\Controller\Index;

class Subscription extends \Magento\Framework\App\Action\Action {
    public function execute() {
        $subscription = $this->_objectManager->create('Packt\HelloWorld\Model\Subscription');
        $subscription->setFirstname('john');
        $subscription->setLastname('Doe');
        $subscription->setEmail('john@gmail.com');
        $subscription->setMessage('A short message to test');
        $subscription->save();
        $this->getResponse()->setBody('Success');
    }
}