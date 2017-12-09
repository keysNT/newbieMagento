<?php
namespace Magenest\Movie\Block\Adminhtml;

class Movie extends \Magento\Backend\Block\Widget\Grid\Container {
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct(){
        $this->_blockGroup = 'Magenest_Movie';
        $this->_controller = 'adminhtml_movie';
        $this->_headerText = __('Manage Movie');
        $this->_addButtonLabel = __('Add Movie');
        parent::_construct();
    }
}