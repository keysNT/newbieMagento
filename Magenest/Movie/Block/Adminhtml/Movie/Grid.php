<?php
namespace Magenest\Movie\Block\Adminhtml\Movie;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended {
    protected $_movieCollection;
    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Magenest\Movie\Model\ResourceModel\Movie\Collection $movieCollection
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magenest\Movie\Model\ResourceModel\Movie\Collection $movieCollection,
        array $data = []
    ){
        $this->_movieCollection = $movieCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No Movie Found'));
    }
    /**
     * Initialize the movie collection
     * 
     * @return WidgetGrid
     */
    protected function _prepareCollection(){
        $this->setCollection($this->_movieCollection);
        return parent::_prepareCollection(); // TODO: Change the autogenerated stub
    }
    /**
     * Prepare grid colums
     *
     * @return $this
     */
    protected function _prepareColumns(){
        $this->addColumn(
            'movie_id',
            [
                'header' => __('Movie Id'),
                'index' => 'movie_id'
            ]
        );
        $this->addColumn(
            'name',
            [
                'header' => __('Name'),
                'index' => 'name'
            ]
        );
        $this->addColumn(
            'description',
            [
                'header' => 'Description',
                'index' => 'description'
            ]
        );
        $this->addColumn(
            'rating',
            [
                'header' => 'Rating',
                'index' => 'rating'
            ]
        );
        $this->addColumn(
            'director_id',
            [
                'header' => 'Director Id',
                'index' => 'director_id'
            ]
        );
        return parent::_prepareColumns();
    }
}