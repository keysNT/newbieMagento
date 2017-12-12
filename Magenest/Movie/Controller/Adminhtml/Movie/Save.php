<?php
namespace Magenest\Movie\Controller\Adminhtml\Movie;

class Save extends \Magento\Framework\App\Action\Action{
    /**
    * @var \Magento\Framework\View\Result\PageFactory
    */
    protected $resultPageFactory;


    /**
    * @param \Magento\Framework\App\Action\Context $context
    * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
    */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
    * Default customer account page
    *
    * @return void
    */
    public function execute(){
        /** @var \Magento\Framework\Controller\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        try{
            $request = $this->getRequest()->getParams();
            $movie = $this->_objectManager->create('Magenest\Movie\Model\Movie');
            $name = $request['name'];
            $description = $request['description'];
            $rating = $request['rating'];
            $director_id = $request['director_id'];
            $movie->setName($name);
            $movie->setDescription($description);
            $movie->setRating($rating);
            $movie->setDirectorId($director_id);
            $this->_eventManager->dispatch(
                'adminhtml_movie_prepare_save',
                ['movie' => $movie]
            );
            $movie->save();
//            $this->getResponse()->setBody('success');
//            $this->resultPageFactory->create();
            return $resultRedirect->setPath('magenestmovie/movie/movie');
        }catch (\Exception $e){
            $this->messageManager->addExceptionMessage($e, __('We can\'t submit your request, Please try again.'));
            $this->_objectManager->get('Psr\Log\LoggerInterface')->critical($e);
            return $resultRedirect->setPath('contactus/index/index');
        }

    }

}
?>