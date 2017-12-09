<?php
namespace Magenest\Movie\Block\Adminhtml;

class Director extends \Magento\Backend\Block\Widget\Grid\Container {
    /**
     * Contructor
     * 
     * @return void
     */
    public function _construct(){
        $this->_blockGroup = 'Magenest_Movie';
        $this->_controller = 'adminhtml_director';
        $this->_headerText = __('Manage Director');
        $this->_addButtonLabel = __('Add Director');
        parent::_construct(); 
    }
}