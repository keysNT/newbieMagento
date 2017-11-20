<?php
namespace Packt\HelloWorld\Controller\Index;
class Redirect extends \Magento\Framework\App\Action\Action {
    public function execute(){
        //$this->_redirect('helloworld'); url change from /helloworld/index/redirect to /helloworld
        $this->_forward('index'); //Url don't change
    }
}