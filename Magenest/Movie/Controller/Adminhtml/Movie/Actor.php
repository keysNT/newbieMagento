<?php
namespace Magenest\Movie\Controller\Adminhtml\Movie;

use \Magento\Backend\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Actor extends \Magento\Backend\App\Action {
    protected $resultPageFactory;
    public function __construct(Context $context, PageFactory $resultPageFactory){
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    public function execute(){
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magenest_Movie::actor');
        $resultPage->addBreadcrumb(__('Actor'), __('Actor'));
        $resultPage->addBreadcrumb(__('Manage Actor'), __('Manage Actor'));
        $resultPage->getConfig()->getTitle()->prepend(__('Actor'));
        return $resultPage;
    }
    public function _isAllowed(){
        return $this->_authorization->isAllowed('Magenest_Movie::actor');
    }
}