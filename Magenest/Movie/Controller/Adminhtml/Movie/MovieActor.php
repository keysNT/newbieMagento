<?php
namespace Magenest\Movie\Controller\Adminhtml\Movie;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class MovieActor extends \Magento\Backend\App\Action {
    protected $resultPageFactory;
    public function __construct(Context $context, PageFactory $resultPageFactory){
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute(){
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magenest_Movie::movieactor');
        $resultPage->addBreadcrumb(__('Movie Actor'), __('Movie Actor'));
        $resultPage->addBreadcrumb(__('Manage Movie Actor'), __('Manage Movie Actor'));
        $resultPage->getConfig()->getTitle()->prepend(__('Movie Actor'));
        return $resultPage;
    }
    public function _isAllowed(){
        return $this->_authorization->isAllowed('Magenest_Movie::movieactor');
    }
}