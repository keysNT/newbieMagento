<?php
namespace Magenest\Movie\Observer;


use \Magento\Framework\App\ObjectManager;
use \Magento\Framework\App\Config\ConfigResource\ConfigInterface;

class ChangeValueTextfield implements \Magento\Framework\Event\ObserverInterface {
    protected $_configInterface;

    public function __construct(\Magento\Framework\App\Config\ConfigResource\ConfigInterface $configInterface) {
        $this->_configInterface = $configInterface;
    }
    public function execute(\Magento\Framework\Event\Observer $observer){
        $scopeConfig = \Magento\Framework\App\ObjectManager::getInstance()->create('Magento\Framework\App\Config\ScopeConfigInterface');
        $value = $scopeConfig->getValue('magenestmovie/magenestmoviepage/testfield1');
        if($value == 'Ping'){
            $value = 'Pong';
        }
        $this->_configInterface->saveConfig('magenestmovie/magenestmoviepage/testfield1', $value, 'default', 0);
    }
}